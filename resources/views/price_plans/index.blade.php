@extends('layouts.app')

@section('content')

  <h1>Listados de planes de Quick Inmobiliario</h1>
  <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Plan</th>
          <th>Precio</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($price_plans as $plan)
          <tr>
            <td>{{ $plan->id }}</td>
            <td>{{ $plan->name }}</td>
            <td>{{ $plan->price }}</td>
            <td>
              <a href="{{ route('price_plan_show_path', $plan->id) }}" title="Ver detalle plan" class="btn btn-success"><span class="glyphicon glyphicon-eye"></span></a>
              <a href="#" title="Editar plan" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
              <a href="#" title="Eliminar plan" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@stop
