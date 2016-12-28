@extends('layouts.app')

@section('content')
  <h1>Editar Plan <small class="pull-right"><a href="{{ route('price_plans_path') }}" class="btn btn-link"><< Regresar</a></small></h1>
  @include('errors._validation_errors')
  <form class="form" action="{{ route('price_plan_edit_path', $price_plan->id) }}" method="post">
    {{ method_field('PUT') }}
    @include('partials._price_plan_form', ['btn_price_plan' => 'Actualizar Plan'])
  </form>
@stop
