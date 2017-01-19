@extends('layouts.app')

@section('content')

  <!--<div class="row">
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
  </div>-->

  <!-- BREADCRUMBS AREA START -->
  <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="breadcrumbs">
            <h2 class="breadcrumbs-title">{{ $section_text }} Inmueble</h2>
            <ul class="breadcrumbs-list">
              <li><a href="{{ url('/') }}">Inicio</a></li>
              <li><a href="{{ route('properties_path') }}">Inmuebles</a></li>
              <li>{{ $section_text }} Inmueble</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- BREADCRUMBS AREA END -->

  <!-- Start page content -->
  <section id="page-content" class="page-wrapper">

    <!-- PROPERTIES DETAILS AREA START -->
    <div class="properties-details-area pt-115 pb-60">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
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
      </div>
    </div>

    <!-- NEWSLETTER AREA START -->
    @include('partials._newsletter')
    <!-- NEWSLETTER AREA END -->
  </section>

@stop
