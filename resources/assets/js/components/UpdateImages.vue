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
    console.log('Componente para actualizar imágenes cargado!!');
    this.initializeDropzone();
    this.loadExistingImages();
    this.addDropzoneSuccess();
    this.addDropzoneRemove();
  },
  props: ['form', 'principal', 'save', 'delete', 'token'],
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
        dictDefaultMessage: "Arrastra las imágenes para cargarlas"
      });
    },
    loadExistingImages: function(){
      //console.log(this.updater.options.maxFiles);
      /*var mockfile = { name: $('#imagen' + i + '-fondo').val(), accepted: true };
      this.updater.emit("addedfile", mockfile);
      this.updater.emit("thumbnail", mockfile, `/imagen_inmueble/${$(this).val()}`);
      this.updater.emit("complete", mockfile);
      $('.dz-image').children('img').attr({ width: "120", height: "120" });
      this.updater.files.push( mockfile );
      $('input[type="hidden"][name="images[]"]').each(function(){
      })*/
    },
    addDropzoneSuccess: function(){
      var vue = this;
      this.updater.on('success', function(file){
        var result = JSON.parse(file.xhr.response);
        vue.images.push(result.path);
        vue.generateHiddenInput(result.path);
      });
    },
    addDropzoneRemove: function(){
      var vue = this;
      this.updater.on('removedfile', function(file){
        var result = JSON.parse(file.xhr.response);
        Vue.http.post(vue.delete, { path: result.path }).then((response) => {
          vue.images.splice(vue.images.indexOf(result.path), 1);
          vue.removeHiddenInput(vue.removeExtension(result.path));
        }, (response) => {
          //console.log(response);
        })
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
  },
  watch: {
    images: function(val, oldVal){
      console.log(val);
    }
  }
}
</script>
