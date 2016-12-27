
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
  import Dropzone from 'dropzone';
  /**
   * Next, we will create a fresh Vue application instance and attach it to
   * the page. Then, you may begin adding components to this application
   * or customize the JavaScript scaffolding to fit your unique needs.
   */

//Vue.component('example', require('./components/Example.vue'));

//Vue Components for Frontend
  const app = new Vue({
  el: '#app',
    methods: {
    deleteProperty: function(event){
    var x = confirm('Está seguro de borrar el inmueble?');
      if (x){
    $(event.currentTarget).children('form').submit();
    }
    },
      deletePricePlan: function(event){
      var x = confirm('Está seguro de borrar el plan?');
        if (x){
      $(event.currentTarget).children('form').submit();
      }
      },
      createProperty: function(){
      $('#form-create-property').submit();
      }
    }
  });
//JS REGISTER
  var first_name = $('#first_name');
  var business_name = $('#business_name');
  $('#date_legal').children('div').hide();
  $("#document_type option[value='RUT']").hide();
  $("#document_type option[value='NIT']").hide();
  $('#select').on('change', function () {
var selectValue = $(this).val();
  if (selectValue == '1') {
$("#document_type option[value='RUT']").remove();
  $("#document_type option[value='NIT']").remove();
  $("#document_type").append('<option value="CC">CC</option>');
  $('#date_legal').children('div').hide();
  $('#date_natural').children('div').show();
  first_name.attr("required", "true");
  business_name.removeAttr("required");
}
if (selectValue == '2') {
$("#document_type option[value='CC']").remove();
  $("#document_type").append('<option value="NIT">NIT</option>');
  $("#document_type").append('<option value="RUT">RUT</option>');
  $('#date_natural').children('div').hide();
  $('#date_legal').children('div').show();
  first_name.removeAttr("required");
  business_name.attr("required", "true");
}
});
//END JS REGISTER

  / * Generar el componente para encapsular el código * /
  Dropzone.autoDiscover = false;
  $(function(){
  var uploader = new Dropzone("#my-awesome-dropzone", {
  addRemoveLinks: true,
    maxFiles: 10,
    dictRemoveFile: "X",
    dictDefaultMessage: 'Arrastra las imágenes parar cargarlas'
  });
    uploader.on('success', function(file){
    var result = JSON.parse(file.xhr.response);
      var input = ` < input type = "hidden" name = "images[]" value = "${result.path}" > `;
      $('#form-create-property').append(input);
    }).on('removedfile', function(file){
  var result = JSON.parse(file.xhr.response);
    $.ajax({
    url: '/images/delete',
      method: 'GET',
      data: { path: result.path },
      success: function(data){
      //console.log(data);
      },
      error: function(data){
      //console.log(data);
      }
    });
  });
    });