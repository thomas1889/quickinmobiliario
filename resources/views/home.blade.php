@extends('layouts.main')

@section('content')

  <div class="jumbotron">
    <h1>Quick Inmobiliario</h1>
    <p>This gonna be something unreal :V</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Próximamente</a></p>
  </div>

  <div class="panel panel-primary">
    <div class="panel-heading">Inmuebles</div>
    <div class="panel-body">
      <h3>Acceso a listado de Inmuebles: <small><a href="{{ route('properties_path') }}" class="btn btn-link">Inmuebles</a></small></h3>
    </div>
  </div>

@stop
