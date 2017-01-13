<template>
  <form class="form form-inline" method="post">
		<div class="form-group">
				<select class="form-control" name="zone">
						<option value="-1">Zona</option>
						<option value="West">West</option>
						<option value="North">North</option>
						<option value="Center">Center</option>
						<option value="South">South</option>
				</select>
		</div>
    <div class="form-group">
      <input type="text" min="0" step="1" class="form-control" v-model="city" placeholder="Ciudad">
    </div>

    <button type="button" class="btn btn-primary" v-on:click="search">Buscar</button>
  </form>
</template>

<script>
export default {
  mounted: function(){
    console.log('Componente cargado correctamente!!');
  },
  data() {
    return {
      projects: [],
      city: '-1',
      zone: '',
      name: ''
    }
  },
  methods: {
    search: function(){
      var vue = this;
      Vue.http.get(`projects/buscar?city=${vue.city}&zone=${vue.zone}&name=${vue.name}`).then((response) => {
        vue.projects = response.body.data;
        console.log(vue.projects);
      });
    }
  }
}
</script>
