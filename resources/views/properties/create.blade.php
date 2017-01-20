@extends('layouts.app')

@section('content')

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
          <div class="col-md-12">
            <div class="contact-messge bg-gray">
              <!-- blog-details-reply -->
              <div class="leave-review">
                <!--<h1>Crear Inmueble <small class="pull-right"><a href="{{ route('properties_path') }}" class="btn btn-link"><< Regresar</a></small></h1>-->

                @include('errors._validation_errors')

                <form id="form-create-property" class="form" action="{{ route('property_create_path') }}" method="post">
                  {{ csrf_field() }}
                  @include('partials._property_form')
                </form>
                <uploadimages form="my-awesome-dropzone" principal="form-create-property" title="Imágenes inmueble" save="{{ route('property_image_upload_path') }}" delete="/imagen_inmueble" token="{{ csrf_token() }}"></uploadimages>
                <div class="form-group">
                  <button type="button" class="submit-btn-1" v-on:click="createProperty">
                    Crear Inmueble
                  </button>
                </div>
              </div>
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
