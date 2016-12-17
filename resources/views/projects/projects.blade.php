@extends('layouts.main')

@section('content')

  <h1>Listado de Proyectos</h1><button class="btn btn-primary small"><span class="glyphicon glyphicon-triangle-left"></span>> Regresar</button>

  <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Proyecto</th>
          <th>Dirección</th>
          <th>Teléfono</th>
          <th>Descripción</th>
          <th>Área Construida</th>
          <th>Área Lote</th>
          <th>Zona</th>
          <th>Ciudad</th>
          <th>Barrio</th>
          <th>Tipo</th>
          <th>Negocio</th>
          <th>Coordenadas</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projects as $projects)
          <tr>
            <td>{{ $projects->id }}</td>
            <td>{{ $projects->name }}</td>
            <td>{{ $projects->address }}</td>
            <td>{{ $projects->phone }}</td>
            <td>{{ $projects->description }}</td>
            <td>{{ $projects->built_area }}</td>
            <td>{{ $projects->full_area }}</td>
            <td>{{ $projects->zone }}</td>
            <td>{{ $projects->city }}</td>
            <td>{{ $projects->use_type_id }}</td>
            <td>{{ $projects->business_type_id }}</td>
            <td>{{ $projects->neighborhood }}</td>
            <td>{{ $projects->coordinates }}</td>
            
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@stop
