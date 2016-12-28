@extends('layouts.app')

@section('content')
  <h1>Crear Plan <small class="pull-right"><a href="{{ route('price_plans_path') }}" class="btn btn-link"><< Regresar</a></small></h1>
  @include('errors._validation_errors')
  <form class="form" action="{{ route('create_price_plan_path') }}" method="post">
    @include('partials._price_plan_form', ['btn_price_plan' => 'Crear Plan'])
  </form>
@stop
