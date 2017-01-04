@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>Editar Inmueble <small class="pull-right"><a href="{{ route('properties_path') }}" class="btn btn-link"><< Regresar</a></small></h1>

      @include('errors._validation_errors')

      <form class="form" id="form-edit-property" action="{{ route('property_edit_path', $property->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        @include('partials._property_form')
      </form>
      <uploadimages form="update-property-images" principal="form-edit-property" title="Imágenes inmueble" save="{{ route('property_image_upload_path') }}" delete="/imagen_inmueble" token="{{ csrf_token() }}"></uploadimages>
      <div class="form-group">
        <button type="button" class="btn btn-primary" v-on:click="updateProperty">Actualizar Inmueble</button>
      </div>
    </div>
  </div>

@stop
