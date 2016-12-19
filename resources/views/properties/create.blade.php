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
          <label for="antiquity">Antiguedad</label>
          <select class="form-control" name="antiquity" id="antiquity">
            <option value="0-5 años">0-5 años</option>
            <option value="6-10 años">6-10 años</option>
            <option value="11-20 años">11-20 años</option>
            <option value="más de 20 años">más de 20 años</option>
          </select>
        </div>
        <div class="form-group">
          <label for="state">Estado</label>
          <select class="form-control" name="state" id="state">
            <option value="1">Nuevo</option>
            <option value="2">Usuado</option>
            <option value="3">Remodelado</option>
            <option value="4">Proyecto</option>
          </select>
        </div>
        <div class="form-group">
          <label for="zone">Zona</label>
          <select class="form-control" name="zone" id="zone">
            <option value="Norte">Norte</option>
            <option value="Sur">Sur</option>
            <option value="Occidente">Occidente</option>
            <option value="Centro">Centro</option>
          </select>
        </div>
        <div class="form-group">
          <label for="city">Ciudad</label>
          <select class="form-control" name="city" id="city">
            <option value="Chocontá">Chocontá</option>
            <option value="Machetá">Machetá</option>
            <option value="Manta">Manta</option>
            <option value="Sesquilé">Sesquilé</option>
            <option value="Suesca">Suesca</option>
            <option value="Tibirita">Tibirita</option>
            <option value="Villapinzón">Villapinzón</option>
            <option value="Bogotá" selected>Bogotá</option>
          </select>
        </div>
        <div class="form-group">
          <label for="neighborhood">Barrio</label>
          <input type="text" id="neighborhood" name="neighborhood" class="form-control">
        </div>
        <div class="form-group">
          <label for="built_area">Área construida</label>
          <div class="input-group">
            <input type="text" id="built_area" name="built_area" class="form-control">
            <div class="input-group-addon">m<sup>2</sup></div>
          </div>
        </div>
        <div class="form-group">
          <label for="full_area">Área lote</label>
          <div class="input-group">
            <input type="text" id="full_area" name="full_area" class="form-control">
            <div class="input-group-addon">m<sup>2</sup></div>
          </div>
        </div>
        <div class="form-group">
          <label for="rooms">Habitaciones</label>
          <input type="number" min="1" step="1" id="rooms" name="rooms" class="form-control">
        </div>
        <div class="form-group">
          <label for="stratum">Estrato</label>
          <input type="number" min="1" step="1" max="6" id="stratum" name="stratum" class="form-control">
        </div>
        <div class="form-group">
          <label for="floors">Pisos</label>
          <input type="number" min="1" step="1" id="floors" name="floors" class="form-control">
        </div>
        <div class="form-group">
          <label for="price">Precio</label>
          <div class="input-group">
            <div class="input-group-addon">$</div>
            <input type="number" id="price" name="price" class="form-control">
          </div>
        </div>

        <div class="form-group">
          <label for="project">Proyecto</label>
          <select class="form-control" name="project">
            @foreach ($projects as $project)
              <option value="{{ $project->id }}">{{ $project->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="property_type">Tipo de propiedad</label>
          <select class="form-control" name="project_id">
            <option value="-1">No aplica</option>
            @foreach ($property_types as $type)
              <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="use_type">Tipo de uso</label>
          <select class="form-control" name="use_type_id">
            @foreach ($use_types as $type)
              <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="business_type">Tipo de negocio</label>
          <select class="form-control" name="business_type_id">
            @foreach ($business_types as $type)
              <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="commission">Comisión</label>
          <div class="input-group">
            <div class="input-group-addon">$</div>
            <input type="number" id="commission" name="commission" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Crear Inmueble</button>
        </div>
      </form>
    </div>
  </div>

@stop
