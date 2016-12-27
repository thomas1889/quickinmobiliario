@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-sm-8 col-sm-offset-2">
      <h1 class="text-center">
        <a href="/" class="btn btn-info pull-left" > << Regresar</a>
        Listado de Proyectos
        <a href="{{ route('projects_create_path') }}" class="btn btn-success pull-right">
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

          @foreach($projects as $project)
          <tr>
            <td>{{ $project->id }}</td>
            <td>{{ $project->name }}</td>
            <td>{{ $project->built_area }}</td>
            <td>{{ $project->city }}</td>
            <td>
              <a href="{{ route('projects_show_path', $project->id) }}" class="btn btn-primary">
                <span class="glyphicon glyphicon-eye-open"></span>
              </a>
            </td>
            <td>
              <a href="{{ route('projects_edit_path', $project->id) }}" class="btn btn-warning">
                <span class="glyphicon glyphicon-pencil"></span>
              </a>
            </td>
            <td>
              <a href="" class="btn btn-danger" v-on:click.prevent="deleteProject($event)">
                <span class="glyphicon glyphicon-trash"></span>
                <form class="hidden" action="{{ route('projects_delete_path', $project->id)}}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('delete') }}
                </form>
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
