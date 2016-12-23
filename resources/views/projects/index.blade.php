@extends('layouts.app')

@section('content')


<div class="row">
  <div class="col-sm-8 col-md-offset-2">
      <h1 class="text-center">
        <a href="/" class="btn btn-info pull-left" > << Regresar</a>
        Listado de Proyectos
        <a href="{{Route('projects_create_path')}}" class="btn btn-success pull-right">
          Publicar Proyecto
        </a>
      </h1>
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
              <a href="{{ route('projects_show_path', $projects->id) }}" class="btn btn-primary">
                <span class="glyphicon glyphicon-eye-open"></span>
              </a>
            </td>
            <td>
              <a href="{{ route('projects_edit_path', $projects->id) }}" class="btn btn-warning">
                <span class="glyphicon glyphicon-pencil"></span>
              </a>
            </td>
            <td>
              <a href="{{ route('projects_delete_path', $projects->id) }}" class="btn btn-danger">
                <span class="glyphicon glyphicon-trash"></span>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a href="#top" class="btn btn-primary pull-right">
        Ir Arriba <span class="glyphicon glyphicon-chevron-up"></span>
      </a>
    </div>
  </div>
</div>
@stop
