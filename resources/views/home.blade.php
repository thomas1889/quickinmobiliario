@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="jumbotron">
            <h1>Quick Inmobiliario</h1>
            <p>This gonna be something unreal :V</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Próximamente</a></p>
          </div>

          <div class="panel panel-primary">
            <div class="panel-heading">Inmuebles</div>
            <div class="panel-body">
              <h3>Acceso a listado de Inmuebles: <small><a href="{{ route('properties_path') }}" class="btn btn-success">Inmuebles >></a></small></h3>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
