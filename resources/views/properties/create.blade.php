@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>Crear Inmueble</h1>

      @include('errors._validation_errors')

      <form id="form-create-property" class="form" action="{{ route('property_create_path') }}" method="post">
        {{ csrf_field() }}
        @include('partials._property_form')
      </form>
      <!-- Dropzone para carga de imágenes del inmueble -->
      <div class="form-group">
        <label for="my-awesome-dropzone">Imágenes inmueble</label>
        <form action="{{ route('property_image_upload_path')}}" class="dropzone" id="my-awesome-dropzone">{{ csrf_field() }}</form>
      </div>
      <div class="form-group">
        <button type="button" class="btn btn-primary" v-on:click="createProperty">
        Crear Inmueble
        </button>
      </div>
    </div>
  </div>

@stop
