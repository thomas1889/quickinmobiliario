@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>Editar Inmueble</h1>

      @include('errors._validation_errors')

      <form class="form" action="{{ route('property_edit_path', $property->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        @include('partials._property_form')
      </form>
      <div class="form-group">
        <button type="button" class="btn btn-primary" id="btn-actualizar-inmueble">Actualizar Inmueble</button>
      </div>
    </div>
  </div>

@stop
