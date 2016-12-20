@if ($property)
  <div class="form-group">
    <label for="name">Nombre Inmueble</label>
    <input type="text" id="name" name="name" class="form-control" value="{{ $property->name }}">
  </div>
  <div class="form-group">
    <label for="phone">Teléfono</label>
    <input type="tel" id="phone" name="phone" class="form-control" value="{{ $property->phone }}">
  </div>
  <div class="form-group">
    <label for="address">Dirección</label>
    <input type="text" id="address" name="address" class="form-control" value="{{ $property->address }}">
  </div>
  <div class="form-group">
    <label for="antiquity">Antiguedad</label>
    <select class="form-control" name="antiquity" id="antiquity">
      <option value="0-5 años" @if($property->antiquity == '0-5 años') selected @endif>0-5 años</option>
      <option value="6-10 años" @if($property->antiquity == '6-10 años') selected @endif>6-10 años</option>
      <option value="11-20 años" @if($property->antiquity == '11-20 años') selected @endif>11-20 años</option>
      <option value="más de 20 años" @if($property->antiquity == 'más de 20 años') selected @endif>más de 20 años</option>
    </select>
  </div>
  <div class="form-group">
    <label for="state">Estado</label>
    <select class="form-control" name="state" id="state">
      <option value="1" @if ($property->state == '1') selected @endif>Nuevo</option>
      <option value="2" @if ($property->state == '2') selected @endif>Usuado</option>
      <option value="3" @if ($property->state == '3') selected @endif>Remodelado</option>
      <option value="4" @if ($property->state == '4') selected @endif>Proyecto</option>
    </select>
  </div>
  <div class="form-group">
    <label for="zone">Zona</label>
    <select class="form-control" name="zone" id="zone">
      <option value="Norte" @if ($property->zone == 'Norte') selected @endif>Norte</option>
      <option value="Sur" @if ($property->zone == 'Sur') selected @endif>Sur</option>
      <option value="Occidente" @if ($property->zone == 'Occidente') selected @endif>Occidente</option>
      <option value="Centro" @if ($property->zone == 'Centro') selected @endif>Centro</option>
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
    <input type="text" id="neighborhood" name="neighborhood" class="form-control" value="{{ $property->neighborhood }}">
  </div>
  <div class="form-group">
    <label for="built_area">Área construida</label>
    <div class="input-group">
      <input type="text" id="built_area" name="built_area" class="form-control" value="{{ $property->built_area }}">
      <div class="input-group-addon">m<sup>2</sup></div>
    </div>
  </div>
  <div class="form-group">
    <label for="full_area">Área lote</label>
    <div class="input-group">
      <input type="text" id="full_area" name="full_area" class="form-control" value="{{ $property->full_area }}">
      <div class="input-group-addon">m<sup>2</sup></div>
    </div>
  </div>
  <div class="form-group">
    <label for="rooms">Habitaciones</label>
    <input type="number" min="1" step="1" id="rooms" name="rooms" class="form-control" value="{{ $property->rooms }}">
  </div>
  <div class="form-group">
    <label for="parkings">Parqueaderos</label>
    <input type="number" min="1" step="1" id="parkings" name="parkings" class="form-control" value="{{ $property->parkings }}">
  </div>
  <div class="form-group">
    <label for="bathrooms">Baños</label>
    <input type="number" min="1" step="1" id="bathrooms" name="bathrooms" class="form-control" value="{{ $property->bathrooms }}">
  </div>
  <div class="form-group">
    <label for="stratum">Estrato</label>
    <input type="number" min="1" step="1" max="6" id="stratum" name="stratum" class="form-control" value="{{ $property->stratum }}">
  </div>
  <div class="form-group">
    <label for="floors">Pisos</label>
    <input type="number" min="1" step="1" id="floors" name="floors" class="form-control" value="{{ $property->floors }}">
  </div>
  <div class="form-group">
    <label for="price">Precio</label>
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="number" id="price" name="price" class="form-control" value="{{ $property->price }}">
    </div>
  </div>

  <div class="form-group">
    <label for="project">Proyecto</label>
    <select class="form-control" name="project_id">
      <option value="-1">No aplica</option>
      @foreach ($projects as $project)
        @if ($project->id == $property->project_id)
          <option value="{{ $project->id }}" selected>{{ $project->name }}</option>
        @else
          <option value="{{ $project->id }}">{{ $project->name }}</option>
        @endif
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="property_type">Tipo de propiedad</label>
    <select class="form-control" name="property_type_id">
      @foreach ($property_types as $type)
        @if ($type->id == $property->property_type_id)
          <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
        @else
          <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endif
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="use_type">Tipo de uso</label>
    <select class="form-control" name="use_type_id">
      @foreach ($use_types as $type)
        @if ($type->id == $property->use_type_id)
          <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
        @else
          <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endif
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="business_type">Tipo de negocio</label>
    <select class="form-control" name="business_type_id">
      @foreach ($business_types as $type)
        @if ($type->id == $property->business_type_id)
          <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
        @else
          <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endif
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="description">Descripción</label>
    <textarea name="description" id="description" rows="8" cols="80" class="form-control" placeholder="Descripción del inmueble">{{ $property->description }}</textarea>
  </div>
  <div class="form-group">
    <label for="commission">Comisión</label>
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="number" id="commission" min="0" step="1" name="commission" class="form-control" value="{{ $commission->price }}">
      <input type="hidden" name="commission_id" value="{{ $commission->id }}">
    </div>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
  </div>
@else
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
      <option value="1" @if (old('state') == '1') selected @endif>Nuevo</option>
      <option value="2" @if (old('state') == '2') selected @endif>Usuado</option>
      <option value="3" @if (old('state') == '3') selected @endif>Remodelado</option>
      <option value="4" @if (old('state') == '4') selected @endif>Proyecto</option>
    </select>
  </div>
  <div class="form-group">
    <label for="zone">Zona</label>
    <select class="form-control" name="zone" id="zone">
      <option value="Norte" @if (old('zone') == 'Norte') selected @endif>Norte</option>
      <option value="Sur" @if (old('zone') == 'Sur') selected @endif>Sur</option>
      <option value="Occidente" @if (old('zone') == 'Occidente') selected @endif>Occidente</option>
      <option value="Centro" @if (old('zone') == 'Centro') selected @endif>Centro</option>
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
    <select class="form-control" name="project_id">
      <option value="-1">No aplica</option>
      @foreach ($projects as $project)
        <option value="{{ $project->id }}">{{ $project->name }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="property_type">Tipo de propiedad</label>
    <select class="form-control" name="property_type_id">
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
    <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
  </div>
@endif
