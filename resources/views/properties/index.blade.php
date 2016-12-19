@extends('layouts.app')

@section('content')
  <h1>Listado de Inmuebles <a href="{{ route('property_create_path') }}" class="btn btn-success">Nuevo Inmueble</a> <small><a href="/" class="btn btn-link pull-right"><< Regresar</a></small></h1>

  <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Inmueble</th>
          <th>Precio</th>
          <th>Área</th>
          <th>Ciudad</th>
          <th>Creado</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($properties as $property)
          <tr>
            <td>{{ $property->id }}</td>
            <td>{{ $property->name }}</td>
            <td>{{ $property->price }}</td>
            <td>{{ $property->full_area }}</td>
            <td>{{ $property->city }}</td>
            <td>{{ $property->created_at }}</td>
            <td>
              <a href="{{ route('property_show_path', $property->id) }}" class="btn btn-success"><span class="glyphicon glyphicon-eye-open"></span></a>
              <a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
              <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@stop
