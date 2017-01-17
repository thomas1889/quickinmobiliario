<template>
  <form class="form form-inline" method="post">
    <div class="form-group">
      <select class="form-control" v-model="city">
        <option value="-1">Ciudad</option>
        <option value="Gerholdport">Gerholdport</option>
        <option value="Leonieview">Leonieview</option>
        <option value="Uptonstad">Uptonstad</option>
        <option value="East Terryville">East Terryville</option>
        <option value="Haneview">Haneview</option>
        <option value="New Devon">New Devon</option>
        <option value="West Laishamouth">West Laishamouth</option>
        <option value="Maggioville">Maggioville</option>
        <option value="New Waldo">New Waldo</option>
        <option value="Ziemefurt">Ziemefurt</option>
      </select>
    </div>
    <div class="form-group">
      <input type="number" min="0" step="1" class="form-control" v-model="rooms" placeholder="Habitaciones">
    </div>
    <div class="form-group">
      <input type="number" min="0" step="1" class="form-control" v-model="bathrooms" placeholder="Baños">
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
      properties: [],
      city: '-1',
      rooms: '',
      bathrooms: ''
    }
  },
  methods: {
    search: function(){
      var vue = this;
      Vue.http.get(`inmuebles/buscar?city=${vue.city}&rooms=${vue.rooms}&bathrooms=${vue.bathrooms}`).then((response) => {
        vue.properties = response.body.data;
        console.log(vue.properties);
      });
    }
  }
}
</script>
