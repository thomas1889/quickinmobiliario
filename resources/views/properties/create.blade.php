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
    </div>
  </div>

@stop
