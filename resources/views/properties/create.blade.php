@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>Crear Inmueble <small class="pull-right"><a href="{{ route('properties_path') }}" class="btn btn-link"><< Regresar</a></small></h1>

      @include('errors._validation_errors')

      <form id="form-create-property" class="form" action="{{ route('property_create_path') }}" method="post">
        {{ csrf_field() }}
        @include('partials._property_form')
      </form>
      <uploadimages form="my-awesome-dropzone" principal="form-create-property" title="Imágenes inmueble" save="{{ route('property_image_upload_path') }}" delete="/imagen_inmueble" token="{{ csrf_token() }}"></uploadimages>
      <div class="form-group">
        <button type="button" class="btn btn-primary" v-on:click="createProperty">
        Crear Inmueble
        </button>
      </div>
    </div>
  </div>

@stop
