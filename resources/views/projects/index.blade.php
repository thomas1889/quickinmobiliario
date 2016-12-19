@extends('layouts.app')

@section('content')


<div class="content">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
  <h1>Listado de Proyectos <a href="/" class="btn btn-link"><< Regresar</a></h1>
  <div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
          <th>ID</th>
          <th>Nombre del Proyecto</th>
          <th>Área Construida</th>
          <th>Ciudad</th>
          <th>Detalles</th>
          <th>Editar</th>
          <th>Borrar</th>
        </tr>
      </thead>
      <tbody>
        @foreach($projects as $projects)
        <tr>
            <td>{{ $projects->id }}</td>
            <td>{{ $projects->name }}</td>
            <td>{{ $projects->built_area }}</td>
            <td>{{ $projects->city }}</td>
            <td>
              <button type="button" class="btn btn-primary">
                <span class="glyphicon glyphicon-eye-open"></span>
              </button>
            </td>
            <td>
              <button type="button" class="btn btn-warning">
                <span class="glyphicon glyphicon-pencil"></span>
              </button>
            </td>
            <td>
              <button type="button" class="btn btn-danger">
                <span class="glyphicon glyphicon-trash"></span>
              </button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<div class="col-sm-2"></div>
</div>
@stop
