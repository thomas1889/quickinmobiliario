@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>{{ $price_plan->name }} <small class="pull-right"><a href="{{ route('price_plans_path') }}" class="btn btn-link"><< Regresar</a></small></h1>
      <p>{{ $price_plan->description }}</p>
      <p>$ {{ money_format('%.2n', $price_plan->price) }}</p>
    </div>
  </div>

@stop
