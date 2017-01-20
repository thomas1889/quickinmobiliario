@if (isset($property))
  <label for="name">Nombre Inmueble</label>
  <input type="text" id="name" name="name" value="{{ old('name', $property->name) }}">
  <label for="phone">Teléfono</label>
  <input type="tel" id="phone" name="phone" value="{{ old('phone', $property->phone) }}">
  <label for="address">Dirección</label>
  <input type="text" id="address" name="address" value="{{ old('address', $property->address) }}">
  <label for="antiquity">Antiguedad</label>
  <select name="antiquity" id="antiquity">
    <option value="0-5 años" @if($property->antiquity == '0-5 años') selected @endif>0-5 años</option>
    <option value="6-10 años" @if($property->antiquity == '6-10 años') selected @endif>6-10 años</option>
    <option value="11-20 años" @if($property->antiquity == '11-20 años') selected @endif>11-20 años</option>
    <option value="más de 20 años" @if($property->antiquity == 'más de 20 años') selected @endif>más de 20 años</option>
  </select>
  <label for="state">Estado</label>
  <select name="state" id="state">
    <option value="1" @if ($property->state == '1') selected @endif>Nuevo</option>
    <option value="2" @if ($property->state == '2') selected @endif>Usuado</option>
    <option value="3" @if ($property->state == '3') selected @endif>Remodelado</option>
    <option value="4" @if ($property->state == '4') selected @endif>Proyecto</option>
  </select>
  <label for="zone">Zona</label>
  <select name="zone" id="zone">
    <option value="Norte" @if ($property->zone == 'Norte') selected @endif>Norte</option>
    <option value="Sur" @if ($property->zone == 'Sur') selected @endif>Sur</option>
    <option value="Occidente" @if ($property->zone == 'Occidente') selected @endif>Occidente</option>
    <option value="Centro" @if ($property->zone == 'Centro') selected @endif>Centro</option>
  </select>
  <label for="city">Ciudad</label>
  <select name="city" id="city">
    <option value="Chocontá">Chocontá</option>
    <option value="Machetá">Machetá</option>
    <option value="Manta">Manta</option>
    <option value="Sesquilé">Sesquilé</option>
    <option value="Suesca">Suesca</option>
    <option value="Tibirita">Tibirita</option>
    <option value="Villapinzón">Villapinzón</option>
    <option value="Bogotá" selected>Bogotá</option>
  </select>
  <label for="neighborhood">Barrio</label>
  <input type="text" id="neighborhood" name="neighborhood" value="{{ old('neighborhood', $property->neighborhood) }}">
  <label for="built_area">Área construida</label>
  <div class="input-group">
    <input type="text" id="built_area" name="built_area" value="{{ old('built_area', $property->built_area) }}">
    <div class="input-group-addon">m<sup>2</sup></div>
  </div>
  <label for="full_area">Área lote</label>
  <div class="input-group">
    <input type="text" id="full_area" name="full_area" value="{{ old('full_area', $property->full_area) }}">
    <div class="input-group-addon">m<sup>2</sup></div>
  </div>
  <label for="rooms">Habitaciones</label>
  <input type="number" min="1" step="1" id="rooms" name="rooms" value="{{ old('rooms', $property->rooms) }}">
  <label for="parkings">Parqueaderos</label>
  <input type="number" min="1" step="1" id="parkings" name="parkings" value="{{ old('parkings', $property->parkings) }}">
  <label for="bathrooms">Baños</label>
  <input type="number" min="1" step="1" id="bathrooms" name="bathrooms" value="{{ old('bathrooms', $property->bathrooms) }}">
  <label for="stratum">Estrato</label>
  <input type="number" min="1" step="1" max="6" id="stratum" name="stratum" value="{{ old('stratum', $property->stratum) }}">
  <label for="floors">Pisos</label>
  <input type="number" min="1" step="1" id="floors" name="floors" value="{{ old('floors', $property->floors) }}">
  <label for="price">Precio</label>
  <div class="input-group">
    <div class="input-group-addon">$</div>
    <input type="number" id="price" name="price" value="{{ old('price', $property->price) }}">
  </div>
  <label for="project">Proyecto</label>
  <select name="project_id">
    <option value="-1">No aplica</option>
    @foreach ($projects as $project)
      @if ($project->id == $property->project_id)
        <option value="{{ $project->id }}" selected>{{ $project->name }}</option>
      @else
        <option value="{{ $project->id }}">{{ $project->name }}</option>
      @endif
    @endforeach
  </select>
  <label for="property_type">Tipo de propiedad</label>
  <select name="property_type_id">
    @foreach ($property_types as $type)
      @if ($type->id == $property->property_type_id)
        <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
      @else
        <option value="{{ $type->id }}">{{ $type->name }}</option>
      @endif
    @endforeach
  </select>
  <label for="use_type">Tipo de uso</label>
  <select name="use_type_id">
    @foreach ($use_types as $type)
      @if ($type->id == $property->use_type_id)
        <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
      @else
        <option value="{{ $type->id }}">{{ $type->name }}</option>
      @endif
    @endforeach
  </select>
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
  <label for="description">Descripción</label>
  <textarea name="description" id="description" rows="8" cols="80" placeholder="Descripción del inmueble">{{ old('description', $property->description) }}</textarea>
  <label for="commission">Comisión</label>
  <div class="input-group">
    <div class="input-group-addon">$</div>
    <input type="number" id="commission" min="0" step="1" name="commission" value="{{ old('commission', $property->commission->price) }}">
    <input type="hidden" name="commission_id" value="{{ $property->commission->id }}">
  </div>
  <label for="video360">Código youtube video 360</label>
  <input type="text" class="form-control" name="video360" id="video360" placeholder="-xNN-bJQ4vI" value="{{ old('video360', $property->video360) }}">
  @if($property->video360 != '')
    <div class="form-group">
      <div class="row">
        <label for="" class="col-md-12">Previsualización</label>
        <div class="col-md-4">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe height="315" class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $property->video360 }}"></iframe>
          </div>
        </div>
      </div>
    </div>
  @endif
  @if (!empty($property->property_images))
    @foreach ($property->property_images as $image)
      <input type="hidden" name="images[]" data-source="{{ route('get_property_image_path', $image->path) }}" id="{{ preg_replace('/(.png|.jpg|.jpeg|.gif)/', '', $image->path) }}" value="{{ $image->path }}">
    @endforeach
  @endif
@else
  <h3 class="form-division mb-30"><i class="fa fa-home"></i>Datos de la publicación</h3>
  <!-- Nombre publicación -->
  <label for="name">Nombre de la publicación</label>
  <input type="text" id="name" name="name" value="{{ old('name') }}">
  <div class="row">
    <div class="col-md-4">
      <label for="business_type">Tipo de negocio</label>
      <select name="business_type_id">
        @foreach ($business_types as $type)
          <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="col-md-4">
      <label for="property_type">Tipo de propiedad</label>
      <select name="property_type_id">
        @foreach ($property_types as $type)
          <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="col-md-4">
      <label for="use_type">Tipo de uso</label>
      <select name="use_type_id">
        @foreach ($use_types as $type)
          <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <!-- Ubicación del inmueble -->
  <h3 class="form-division mb-30 mt-30"><i class="fa fa-map"></i>Ubicación del Inmueble</h3>
  <div class="row">
    <div class="col-md-4">
      <label for="zone">Zona</label>
      <select name="zone" id="zone">
        <option value="Norte" @if (old('zone') == 'Norte') selected @endif>Norte</option>
        <option value="Sur" @if (old('zone') == 'Sur') selected @endif>Sur</option>
        <option value="Occidente" @if (old('zone') == 'Occidente') selected @endif>Occidente</option>
        <option value="Centro" @if (old('zone') == 'Centro') selected @endif>Centro</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="city">Ciudad</label>
      <select name="city" id="city">
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
    <div class="col-md-4">
      <label for="neighborhood">Barrio</label>
      <input type="text" id="neighborhood" name="neighborhood" value="{{ old('neighborhood') }}">
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <label for="address">Dirección</label>
      <input type="text" id="address" name="address" value="{{ old('address') }}">
    </div>
    <div class="col-md-4">
      <label for="phone">Teléfono</label>
      <input type="tel" id="phone" name="phone" value="{{ old('phone') }}">
    </div>
  </div>

  <h3 class="form-division mb-30 mt-30"><i class="fa fa-info-circle"></i>Descripción del Inmueble</h3>
  <div class="row">
    <div class="col-md-4">
      <!-- Antiguedad del inmueble -->
      <label for="antiquity">Antiguedad</label>
      <select name="antiquity" id="antiquity">
        <option value="0-5 años" @if(old('antiquity') == '0-5 años') selected @endif>0-5 años</option>
        <option value="6-10 años" @if(old('antiquity') == '6-10 años') selected @endif>6-10 años</option>
        <option value="11-20 años" @if(old('antiquity') == '11-20 años') selected @endif>11-20 años</option>
        <option value="más de 20 años" @if(old('antiquity') == 'más de 20 años') selected @endif>más de 20 años</option>
      </select>
    </div>
    <div class="col-md-4">
      <!-- Estado del inmueble -->
      <label for="state">Estado</label>
      <select name="state" id="state">
        <option value="1" @if (old('state') == '1') selected @endif>Nuevo</option>
        <option value="2" @if (old('state') == '2') selected @endif>Usuado</option>
        <option value="3" @if (old('state') == '3') selected @endif>Remodelado</option>
        <option value="4" @if (old('state') == '4') selected @endif>Proyecto</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="stratum">Estrato</label>
      <input type="number" min="1" step="1" max="6" id="stratum" name="stratum" value="{{ old('stratum') }}">
    </div>
  </div>
  <!-- Información del inmueble -->
  <div class="row">
    <div class="col-md-4">
      <label for="built_area">Área construida</label>
      <div class="input-group">
        <input type="text" id="built_area" name="built_area" value="{{ old('built_area') }}">
        <div class="input-group-addon">m<sup>2</sup></div>
      </div>
    </div>
    <div class="col-md-4">
      <label for="full_area">Área lote</label>
      <div class="input-group">
        <input type="text" id="full_area" name="full_area" value="{{ old('full_area') }}">
        <div class="input-group-addon">m<sup>2</sup></div>
      </div>
    </div>
    <div class="col-md-4">
      <label for="floors">Pisos</label>
      <input type="number" min="1" step="1" id="floors" name="floors" value="{{ old('floors') }}">
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <label for="rooms">Número de habitaciones</label>
      <input type="number" min="1" step="1" id="rooms" name="rooms" value="{{ old('rooms') }}">
    </div>
    <div class="col-md-4">
      <label for="parkings">Número parqueaderos</label>
      <input type="number" min="1" step="1" id="parkings" name="parkings" value="{{ old('parkings') }}">
    </div>
    <div class="col-md-4">
      <label for="bathrooms">Número de baños</label>
      <input type="number" min="1" step="1" id="bathrooms" name="bathrooms" value="{{ old('bathrooms') }}">
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <label for="price">Precio</label>
      <div class="input-group">
        <div class="input-group-addon">$</div>
        <input type="number" id="price" name="price" value="{{ old('price') }}">
      </div>
    </div>
    <div class="col-md-6">
      <label for="commission">Comisión</label>
      <div class="input-group">
        <div class="input-group-addon">$</div>
        <input type="number" id="commission" min="0" step="1" name="commission" value="{{ old('commission') }}">
      </div>
    </div>
  </div>

  <!-- Comentarios -->
  <label for="description">Comentarios</label>
  <textarea name="description" id="description" rows="8" cols="80" placeholder="Comentarios acerca del inmueble">{{ old('description') }}</textarea>

  <h3 class="form-division mb-30 mt-30"><i class="fa fa-check-square"></i>Características del inmueble</h3>
  <div class="form-group flex-checkboxes">
    @foreach ($features as $feature)
      <div class="checkbox">
        <label>
          <input type="checkbox" id="feature-{{ $feature->id }}" value="{{ $feature->id }}"> {{ $feature->name }}
        </label>
      </div>
    @endforeach
  </div>


  <h3 class="form-division mb-30 mt-30"><i class="fa fa-youtube"></i>Video 360 del inmueble (opcional)</h3>
  <!-- Video 360 alojado en youtube.com -->
  <input type="text" id="video360" name="video360" placeholder="-xNN-bJQ4vI" value="{{ old('video360') }}">
  @if (!empty(old('images')))
    @foreach (old('images') as $image)
      <input type="hidden" name="images[]" data-source="{{ route('get_property_image_path', $image) }}" id="{{ preg_replace('/(.png|.jpg|.jpeg|.gif)/', '', $image) }}" value="{{ $image }}">
    @endforeach
  @endif
@endif
