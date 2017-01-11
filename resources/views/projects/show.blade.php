@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-sm-8 col-md-offset-2">
    <h1 class="text-center">
      <a href="{{ route('projects_path') }}" class="btn btn-info pull-left"> Volver</a>
      Detalles del Proyecto
      <a href="{{ route('projects_create_path') }}" class="btn btn-success pull-right">
        Publicar un Proyecto
      </a>
    </h1>
    <hr>
    <h2>{{ $project->name }}</h2>
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img src="..." width="100" height="100" alt="...">
          <img src="..." width="100" height="100" alt="...">
          <img src="..." width="100" height="100" alt="...">
          <img src="..." width="100" height="100" alt="...">
          <img src="..." width="100" height="100" alt="...">
        </a>
      </div>
    </div>
    <h3>código: {{ $project->project_code }}</h3>
    <p><strong>Tipo de Vivienda:</strong> {{ $project -> use_type_id }}</p>
    <p><strong>Tipo de venta:</strong> {{ $project -> business_type_id }}</p>
    <p><strong>Cantidad de Unidades:</strong> {{ $project->unit_quantity }}</p>
    <p><strong>Unidades Restantes:</strong> - {{ $project->left_units }}</p>
    <p><strong>Descripción:</strong> {{ $project->description }}</p>
    <p><strong>Zona:</strong> {{ $project->zone }}</p>
    <p><strong>Ciudad:</strong> {{ $project->city }}</p>
    <p><strong>Barrio:</strong> {{ $project->neighborhood }}</p>
    <p><strong>Dirección:</strong> {{ $project->address }}</p>
    <p><strong>Teléfono:</strong> {{ $project->phone }}</p>
    <p><strong>Área construida:</strong> {{ $project->built_area }} M2</p>
    <p><strong>Área lote:</strong> {{ $project->full_area }} M2</p>
    <hr>
    <div class="row">
      <div class="col-sm-8">
        <a href="{{ route('projects_edit_path', $project->id) }}" class="btn btn-warning pull-left">
          Editar <span class="glyphicon glyphicon-pencil"></span>
        </a>
        <a href="" class="btn btn-danger" v-on:click.prevent="deleteProject($event)">
          <span class="glyphicon glyphicon-trash"></span>
          <form class="hidden" action="{{ route('projects_delete_path', $project->id)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('delete') }}
          </form>
        </a>
      </div>
      <div class="col-sm-4">
        <a href="#top" class="btn btn-primary pull-right">
          Ir Arriba <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
      </div>
    </div>
  </div>
</div>
@stop
