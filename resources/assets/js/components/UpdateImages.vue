<template>
  <div class="form-group">
    <label :for="form">{{ title }}</label>
    <form :action="save" class="dropzone" :id="form">
      <input type="hidden" name="_token" :value="token">
    </form>
  </div>
</template>

<script>
export default {
  mounted: function(){
    console.log('Componente para actualizar imágenes cargado!!');
  },
  props: ['form', 'save', 'delete', 'token'],
  data () {
    return {
      images: [],
      updater: undefined
    }
  },
  methods: {

  },
  watch: {
    images: function(val, oldVal){
      console.log(val);
    }
  }
}
</script>
