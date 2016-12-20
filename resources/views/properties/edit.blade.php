@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>Editar Inmueble</h1>

      @include('errors._validation_errors')

      <form class="form" action="{{ route('property_edit_path', $property->id) }}">
        {{ csrf_field() }}
        {{ method_field('put') }}
        @include('partials._property_form', ['buttonText' => 'Actualizar Inmueble'])
      </form>
    </div>
  </div>

@stop
