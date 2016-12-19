@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>Crear Inmueble</h1>

      <form class="form" action="{{ route('property_create_path') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Nombre Inmueble</label>
          <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="phone">Teléfono</label>
          <input type="tel" id="phone" name="phone" class="form-control">
        </div>
        <div class="form-group">
          <label for="address">Dirección</label>
          <input type="text" id="address" name="address" class="form-control">
        </div>
        <div class="form-group">
          <label for="address">Antiguedad</label>
          <input type="text" id="address" name="address" class="form-control">
        </div>
        <div class="form-group">
          <label for="address">Dirección</label>
          <input type="text" id="address" name="address" class="form-control">
        </div>
        <div class="form-group">
          <label for="address">Dirección</label>
          <input type="text" id="address" name="address" class="form-control">
        </div>
        <div class="form-group">
          <label for="address">Dirección</label>
          <input type="text" id="address" name="address" class="form-control">
        </div>
        <div class="form-group">
          <label for="address">Dirección</label>
          <input type="text" id="address" name="address" class="form-control">
        </div>
        <div class="form-group">
          <label for="address">Dirección</label>
          <input type="text" id="address" name="address" class="form-control">
        </div>
        <div class="form-group">
          <label for="address">Dirección</label>
          <input type="text" id="address" name="address" class="form-control">
        </div>
        <div class="form-group">
          <label for="address">Dirección</label>
          <input type="text" id="address" name="address" class="form-control">
        </div>
        <div class="form-group">
          <label for="address">Dirección</label>
          <input type="text" id="address" name="address" class="form-control">
        </div>
      </form>
    </div>
  </div>

@stop
