@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>Crear Inmueble</h1>

      @include('errors._validation_errors')

      <form class="form" action="{{ route('property_create_path') }}" method="post">
        {{ csrf_field() }}
        @include('partials._property_form', ['buttonText' => 'Crear Inmueble'])
      </form>
      <!-- Componente para vista previa de imágenes -->
      <form action="{{ route('property_image_upload_path')}}" class="dropzone" id="my-awesome-dropzone">{{ csrf_field() }}</form>
    </div>
  </div>

@stop
