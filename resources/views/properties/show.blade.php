@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>Detalle del Inmueble</h1>
      <hr>

      <h2>{{ $property->name }}</h2>
      <h3>código: {{ $property->property_code }}</h3>
      <p><strong>Descripción:</strong> {{ $property->description }}</p>
      <p><strong>Zona:</strong> {{ $property->zone }}</p>
      <p><strong>Ciudad:</strong> {{ $property->city }}</p>
      <p><strong>Barrio:</strong> {{ $property->neighborhood }}</p>
      <p><strong>Dirección:</strong> {{ $property->address }}</p>
      <p><strong>Área construida:</strong> {{ $property->built_area }} M2</p>
      <p><strong>Área lote:</strong> {{ $property->full_area }} M2</p>
      <p><strong>Habitaciones:</strong> {{ $property->rooms }}</p>
      <p><strong>Estrato:</strong> {{ $property->stratum }}</p>
      <p><strong>Pisos:</strong> {{ $property->floors }}</p>
      <p><strong>Precio:</strong> $ {{ $property->price }}</p>
    </div>
  </div>

@stop
