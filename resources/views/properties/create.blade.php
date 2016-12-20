@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>Crear Inmueble</h1>

      @include('partials.errors')

      <form class="form" action="{{ route('property_create_path') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Nombre Inmueble</label>
          <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="form-group">
          <label for="phone">Teléfono</label>
          <input type="tel" id="phone" name="phone" class="form-control" value="{{ old('phone') }}">
        </div>
        <div class="form-group">
          <label for="address">Dirección</label>
          <input type="text" id="address" name="address" class="form-control" value="{{ old('address') }}">
        </div>
        <div class="form-group">
          <label for="antiquity">Antiguedad</label>
          <select class="form-control" name="antiquity" id="antiquity">
            <option value="0-5 años" @if(old('antiquity') == '0-5 años') selected @endif>0-5 años</option>
            <option value="6-10 años" @if(old('antiquity') == '6-10 años') selected @endif>6-10 años</option>
            <option value="11-20 años" @if(old('antiquity') == '11-20 años') selected @endif>11-20 años</option>
            <option value="más de 20 años" @if(old('antiquity') == 'más de 20 años') selected @endif>más de 20 años</option>
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
          <input type="text" id="neighborhood" name="neighborhood" class="form-control" value="{{ old('neighborhood') }}">
        </div>
        <div class="form-group">
          <label for="built_area">Área construida</label>
          <div class="input-group">
            <input type="text" id="built_area" name="built_area" class="form-control" value="{{ old('built_area') }}">
            <div class="input-group-addon">m<sup>2</sup></div>
          </div>
        </div>
        <div class="form-group">
          <label for="full_area">Área lote</label>
          <div class="input-group">
            <input type="text" id="full_area" name="full_area" class="form-control" value="{{ old('full_area') }}">
            <div class="input-group-addon">m<sup>2</sup></div>
          </div>
        </div>
        <div class="form-group">
          <label for="rooms">Habitaciones</label>
          <input type="number" min="1" step="1" id="rooms" name="rooms" class="form-control" value="{{ old('rooms') }}">
        </div>
        <div class="form-group">
          <label for="parkings">Parqueaderos</label>
          <input type="number" min="1" step="1" id="parkings" name="parkings" class="form-control" value="{{ old('parkings') }}">
        </div>
        <div class="form-group">
          <label for="bathrooms">Baños</label>
          <input type="number" min="1" step="1" id="bathrooms" name="bathrooms" class="form-control" value="{{ old('bathrooms') }}">
        </div>
        <div class="form-group">
          <label for="stratum">Estrato</label>
          <input type="number" min="1" step="1" max="6" id="stratum" name="stratum" class="form-control" value="{{ old('stratum') }}">
        </div>
        <div class="form-group">
          <label for="floors">Pisos</label>
          <input type="number" min="1" step="1" id="floors" name="floors" class="form-control" value="{{ old('floors') }}">
        </div>
        <div class="form-group">
          <label for="price">Precio</label>
          <div class="input-group">
            <div class="input-group-addon">$</div>
            <input type="number" id="price" name="price" class="form-control" value="{{ old('price') }}">
          </div>
        </div>

        <div class="form-group">
          <label for="project">Proyecto</label>
          <select class="form-control" name="project_id" value="{{ old('project_id') }}">
            <option value="-1">No aplica</option>
            @foreach ($projects as $project)
              <option value="{{ $project->id }}">{{ $project->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="property_type">Tipo de propiedad</label>
          <select class="form-control" name="property_type_id" value="{{ old('property_type_id') }}">
            @foreach ($property_types as $type)
              <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="use_type">Tipo de uso</label>
          <select class="form-control" name="use_type_id" value="{{ old('use_type_id') }}">
            @foreach ($use_types as $type)
              <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="business_type">Tipo de negocio</label>
          <select class="form-control" name="business_type_id" value="{{ old('business_type_id') }}">
            @foreach ($business_types as $type)
              <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="description">Descripción</label>
          <textarea name="description" id="description" rows="8" cols="80" class="form-control" placeholder="Descripción del inmueble">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
          <label for="commission">Comisión</label>
          <div class="input-group">
            <div class="input-group-addon">$</div>
            <input type="number" id="commission" min="0" step="1" name="commission" class="form-control" value="{{ old('commission') }}">
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Crear Inmueble</button>
        </div>
      </form>
    </div>
  </div>

@stop
