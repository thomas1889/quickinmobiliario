@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>Detalle del Inmueble <small> <a href="{{ route('properties_path') }}" class="btn btn-link pull-right"><< Volver</a></small></h1>
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
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $property->video360 }}"></iframe>
      </div>
    </div>
  </div>

  <div class="row">
    @foreach ($property->property_images as $image)
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img src="{{ route('get_property_image_path', $image->id) }}" alt="{{ $property->name }}">
        </a>
      </div>
    @endforeach
  </div>

@stop
