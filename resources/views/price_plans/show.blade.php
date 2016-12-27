@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>{{ $price_plan->name }} <small class="pull-right"><a href="{{ route('price_plans_path') }}" class="btn btn-link"><< Regresar</a></small></h1>
      <p>{{ $price_plan->description }}</p>
      <p>$ {{ number_format($price_plan->price, 2, ',', '.') }}</p>
    </div>
  </div>

@stop
