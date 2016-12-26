@extends('layouts.app')

@section('content')
  <form class="form" action="{{ route('create_price_plan_path') }}" method="post">
    <div class="form-group">
      <label for=""></label>
      <input type="text" class="form-control" id="" placeholder="">
    </div>
  </form>
@stop
