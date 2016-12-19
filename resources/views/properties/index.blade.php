@extends('layouts.app')

@section('content')

  <h1>Listado de Inmuebles <small><a href="/" class="btn btn-link"><< Regresar</a></small></h1>

  <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Inmueble</th>
          <th>Precio</th>
          <th>Área</th>
          <th>Ciudad</th>
          <th>Descipción</th>
          <th>Creado</th>
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
            <td>{{ $property->description }}</td>
            <td>{{ $property->created_at }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@stop
