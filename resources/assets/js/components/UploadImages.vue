<template>
  <div class="form-group">
    <label :for="form">{{ title }}</label>
    <form :action="save" class="dropzone" :id="form">
      <input type="hidden" name="_token" :value="token">
    </form>
  </div>
</template>

<script>
import Dropzone from 'dropzone';

export default {
  mounted: function(){
    console.log('Componente para carga de imágenes listo!!');
    this.initializeDropzone();
    this.loadExistingImages();
    this.addDropzoneOnSending();
    this.addDropzoneSuccess();
    this.addDropzoneRemove();
  },
  props: ['form', 'title', 'principal', 'save', 'delete', 'token'],
  data () {
    return {
      images: [],
      updater: undefined
    }
  },
  methods: {
    initializeDropzone: function(){
      Dropzone.autoDiscover = false;
      this.updater = new Dropzone(`#${this.form}`, {
        addRemoveLinks: true,
        maxFiles: 10,
        dictRemoveFile: "X",
        dictDefaultMessage: "Arrastra las imágenes para cargarlas",
        dictMaxFilesExceeded: "No puedes subir más imágenes"
      });
    },
    loadExistingImages: function(){
      var vue = this;
      $('input[type="hidden"][name="images[]"]').each(function(){
        var mockfile = { name: $(this).val(), accepted: true, urlImg: $(this).val() };
        vue.updater.emit("addedfile", mockfile);
        vue.updater.createThumbnailFromUrl(mockfile, $(this).data('source'));
        vue.updater.emit("complete", mockfile);
        $('.dz-image').children('img').attr({ width: "120", height: "120" });
        vue.updater.files.push( mockfile );
        vue.images.push($(this).val());
      });
    },
    addDropzoneOnSending: function(){
      this.updater.on('sending', function(file, xhr, formData){
        formData.append('urlImg', '');
      });
    },
    addDropzoneSuccess: function(){
      var vue = this;
      this.updater.on('success', function(file){
        var result = JSON.parse(file.xhr.response);
        vue.images.push(result.path);
        file.urlImg = result.path;
        vue.generateHiddenInput(result.path);
      });
    },
    addDropzoneRemove: function(){
      var vue = this;
      this.updater.on('removedfile', function(file){
        if(file.urlImg !== undefined){
          Vue.http.delete(vue.delete + '/' + file.urlImg).then((response) => {
            vue.images.splice(vue.images.indexOf(file.urlImg), 1);
            vue.removeHiddenInput(vue.removeExtension(file.urlImg));
          }, (response) => {
          })
        }
      });
    },
    generateHiddenInput: function(path){
      var html = `<input type="hidden" name="images[]" id="${this.removeExtension(path)}" value="${path}">`
      $(`#${this.principal}`).append(html)
    },
    removeHiddenInput: function(id){
      $(`#${id}`).remove();
    },
    removeExtension: function(path){
      return path.replace(/(.png|.jpg|.jpeg|.gif)/g, '');
    }
  }
}
</script>
