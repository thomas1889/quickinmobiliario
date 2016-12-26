@extends('layouts.app')

@section('content')

  <h1>Listados de planes de Quick Inmobiliario <small class="pull-right"><a href="{{ route('create_price_plan_path') }}" class="btn btn-primary">Nuevo Plan <span class="glyphicon glyphicon-plus"></span></a></small></h1>
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
              <a href="{{ route('price_plan_show_path', $plan->id) }}" title="Ver detalle plan" class="btn btn-success"><span class="glyphicon glyphicon-eye-open"></span></a>
              <a href="#" title="Editar plan" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
              <a href="#" title="Eliminar plan" class="btn btn-danger" v-on:click="deletePricePlan($event)">
                <span class="glyphicon glyphicon-trash"></span>
                <form class="hidden" action="{{ route('price_plan_delete_path', $plan->id) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                </form>
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@stop
