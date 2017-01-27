@if (isset($project))
    
    <h3 class="form-division mb-30"><i class="fa fa-home"></i>Datos de la Publicación 
    <label for="name">Nombre del Proyecto</label>
    <input type="text" id="name" name="name" value="{{ old('name', $project->name) }}">

  <div class="row">
    <div class="col-md-4">
      <label for="property_type">Tipo de Proyecto</label>
      <select name="property_type_id">
        @foreach ($property_types as $type)
          @if ($type->id == $project->property_type_id)
            <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
          @else
            <option value="{{ $type->id }}">{{ $type->name }}</option>
          @endif
        @endforeach
      </select>
    </div>
    <div class="col-md-4">
      <label for="use_type">Tipo de uso</label>
    <select class="form-control" name="use_type_id">
      @foreach ($use_types as $type)
        @if ($type->id == $project->use_type_id)
          <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
        @else
          <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endif
      @endforeach
    </select>
    </div>

    <div class="col-md-4">
      <label for="stratum">Estado</label>
      <select name="stratum" id="stratum">
        <option value="1" @if ($project->stratum == '1') selected @endif>1</option>
        <option value="2" @if ($project->stratum == '2') selected @endif>2</option>
        <option value="3" @if ($project->stratum == '3') selected @endif>3</option>
        <option value="4" @if ($project->stratum == '4') selected @endif>4</option>
        <option value="5" @if ($project->stratum == '5') selected @endif>5</option>
        <option value="6" @if ($project->stratum == '6') selected @endif>6</option>
      </select>
    </div>
    </div>

<!-- Ubicación del Proyecto -->
  <h3 class="form-division mb-30 mt-30"><i class="fa fa-map"></i>Ubicación del Proyecto</h3>
    <div class="row">
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
        <label for="zone">Zona</label>
    <select name="zone" id="zone">
      <option value="Norte" @if ($project->zone == 'Norte') selected @endif>Norte</option>
      <option value="Sur" @if ($project->zone == 'Sur') selected @endif>Sur</option>
      <option value="Occidente" @if ($project->zone == 'Occidente') selected @endif>Occidente</option>
      <option value="Centro" @if ($project->zone == 'Centro') selected @endif>Centro</option>
    </select>
      </div>
      <div class="col-md-4">
    <label for="neighborhood">Barrio</label>
    <input type="text" id="neighborhood" name="neighborhood" value="{{ old('neighborhood', $project->neighborhood) }}">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
          <label for="address">Dirección</label>
    <input type="text" id="address" name="address" value="{{ old('address', $project->address) }}">

      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
      <label for="phone">Número de Teléfono Fijo</label>
      <input type="tel" id="phone" name="phone" value="{{ old('phone', $project->phone) }}">
        </div>
      <div class="col-md-4">
      <label for="phone2">Número de Teléfono Opcional (2)</label>
      <input type="tel" id="phone2" name="phone2" value="{{ old('phone2', $project->phone2) }}">
      </div>
      <div class="col-md-4">
      <label for="cellphone">Número de Teléfono Celular</label>
      <input type="tel" id="cellphone" name="cellphone" value="{{ old('cellphone', $project->cellphone) }}">
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <label for="built_area">Área construida</label>
    <div class="input-group">
      <input type="text" id="built_area" name="built_area" value="{{ old('built_area', $project->built_area) }}">
      <div class="input-group-addon">m<sup>2</sup></div>
    </div>
      </div>
      <div class="col-md-4">
        <label for="full_area">Área lote</label>
    <div class="input-group">
      <input type="text" id="full_area" name="full_area" class="form-control" value="{{ old('full_area', $project->full_area) }}">
      <div class="input-group-addon">m<sup>2</sup></div>
    </div>
      </div>
      <div class="col-md-4">
         <label for="floors">Pisos</label>
      <input type="number" min="1" step="1" id="floors" name="floors" value="{{ old('floors', $project->floors) }}">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <label for="rooms">Número de habitaciones</label>
      <input type="number" min="1" step="1" id="rooms" name="rooms" value="{{ old('rooms', $project->rooms) }}">
      </div>
      <div class="col-md-4">
        <label for="bathrooms">Número de baños</label>
      <input type="number" min="1" step="1" id="bathrooms" name="bathrooms" value="{{ old('bathrooms', $project->bathrooms) }}">
      </div>
      <div class="col-md-4">
        <label for="price">Precio</label>
      <div class="input-group">
        <div class="input-group-addon">$</div>
        <input type="number" id="price" name="price" value="{{ old('price', $project->price) }}">
      </div>
      </div>
    </div>

  <h3 class="form-division mb-30 mt-30"><i class="fa fa-check-square"></i>Características generales del Proyecto</h3>
  <div class="form-group flex-checkboxes">
    @foreach ($features as $feature)
      @if (is_array(old('features')) && in_array($feature->id, old('features')))
        <div class="checkbox">
          <label>
            <input type="checkbox" name="features[]" checked id="feature-{{ $feature->id }}" value="{{ $feature->id }}"> {{ $feature->name }}
          </label>
        </div>
      @else
        @if (array_has($project->features, $feature->id))
          <div class="checkbox">
            <label>
              <input type="checkbox" name="features[]" checked id="feature-{{ $feature->id }}" value="{{ $feature->id }}"> {{ $feature->name }}
            </label>
          </div>
        @else
          <div class="checkbox">
            <label>
              <input type="checkbox" name="features[]" id="feature-{{ $feature->id }}" value="{{ $feature->id }}"> {{ $feature->name }}
            </label>
          </div>
        @endif
      @endif
    @endforeach
  </div>
  
    <label for="description">Descripción</label>
    <textarea name="description" id="description" rows="8" cols="80" placeholder="Descripción del inmueble">{{ old('description', $project->description) }}</textarea>

    <label for="file">Brochure del Proyecto</label>
    <div class="col-md-12">
    <input id="image"  type="file" name="file" accept="pdf" class="form-control" value="" autofocus">
          <span class="help-block">
                    <strong>
                    <!-- {{ $errors->first('image') }} -->
                    </strong>
                </span>
    </div>

  <h3 class="form-division mb-30 mt-30"><i class="fa fa-youtube"></i>Video 360 del inmueble (opcional)</h3>
  <input type="text" name="video360" id="video360" placeholder="-xNN-bJQ4vI" value="{{ old('video360', $project->video360) }}">
  @if($project->video360 != '')
    <div class="form-group">
      <div class="row">
        <label for="" class="col-md-12">Previsualización</label>
        <div class="col-md-4">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe height="315" class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $project->video360 }}"></iframe>
          </div>
        </div>
      </div>
    </div>
  @endif

  @if (!empty($project->project_images))
    @foreach ($project->project_images as $image)
      <input type="hidden" name="images[]" data-source="{{ route('get_project_image_path', $image->path) }}" id="{{ preg_replace('/(.png|.jpg|.jpeg|.gif)/', '', $image->path) }}" value="{{ $image->path }}">
    @endforeach
  @endif
  
@else
  <h3 class="form-division mb-30"><i class="fa fa-home"></i>Datos de la Publicacion</h3>
    <label for="name">Nombre del Proyecto</label>
    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
  
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
  <h3 class="form-division mb-30 mt-30"><i class="fa fa-map"></i>Ubicación del Proyecto</h3>
<div class="row">
<div class="col-md-4">
  
    <label for="zone">Zona</label>
    <select class="form-control" name="zone" id="zone">
      <option value="Norte" @if (old('zone') == 'Norte') selected @endif>Norte</option>
      <option value="Sur" @if (old('zone') == 'Sur') selected @endif>Sur</option>
      <option value="Occidente" @if (old('zone') == 'Occidente') selected @endif>Occidente</option>
      <option value="Centro" @if (old('zone') == 'Centro') selected @endif>Centro</option>
    </select>
  </div>

  <div class="col-md-4">
    <label for="city">Ciudad</label>
    <select class="form-control" name="city" id="city">
      <option value="Bogotá" selected>Bogotá</option>
      <option value="Chocontá">Chocontá</option>
      <option value="Machetá">Machetá</option>
      <option value="Manta">Manta</option>
      <option value="Sesquilé">Sesquilé</option>
      <option value="Suesca">Suesca</option>
      <option value="Tibirita">Tibirita</option>
      <option value="Villapinzón">Villapinzón</option>
    </select>
  </div>

  <div class="col-md-4">
    <label for="neighborhood">Barrio</label>
    <input type="text" id="neighborhood" name="neighborhood" class="form-control" value="{{ old('neighborhood') }}">
  </div>
  
</div>
<div class="row">
<div class="col-md-8">
    <label for="phone">Teléfono</label>
    <input type="tel" id="phone" name="phone" class="form-control" value="{{ old('phone') }}">
  </div>
  <div class="col-md-4">
    <label for="address">Dirección</label>
    <input type="text" id="address" name="address" class="form-control" value="{{ old('address') }}">
  </div>
  </div>
<h3 class="form-division mb-30 mt-30"><i class="fa fa-info-circle"></i>Descripción del Proyecto</h3>
<div class="row">
  <div class="col-md-3">
    <label for="built_area">Área construida</label>
    <div class="input-group">
      <input type="text" id="built_area" name="built_area" class="form-control" value="{{ old('built_area') }}">
      <div class="input-group-addon">m<sup>2</sup></div>
    </div>
  </div>
  <div class="col-md-3">
    <label for="full_area">Área lote</label>
    <div class="input-group">
      <input type="text" id="full_area" name="full_area" class="form-control" value="{{ old('full_area') }}">
      <div class="input-group-addon">m<sup>2</sup></div>
    </div>
  </div>
  <div class="col-md-3">
    <label for="unit_quantity">Cantidad de Unidades Totales</label>
    <input type="number" min="1" step="1" id="unit_quantity" name="unit_quantity" class="form-control" value="{{ old('unit_quantity') }}">
  </div>
  <div class="col-md-3">
    <label for="left_units">Cantidade de Unidades Restantes...</label>
    <input type="number" min="1" step="1" id="left_units" name="left_units" class="form-control" value="{{ old('left_units') }}">
  </div>
  </div>


    <label for="description">Descripción</label>
    <textarea name="description" id="description" rows="8" cols="80" class="form-control" placeholder="Descripción del inmueble">{{ old('description') }}</textarea>


  <!-- Aquí va los inmuebles relacionados con el proyecto
  <div class="form-group">
    <label for="project">Proyecto</label>
    <select class="form-control" name="project_id">
      <option value="-1">No aplica</option>
      @foreach ($projects as $project)
        <option value="{{ $project->id }}">{{ $project->name }}</option>
      @endforeach
    </select>
  </div>
  -->
  
  
  <h3 class="form-division mb-30 mt-30"><i class="fa fa-youtube"></i>Video 360 del inmueble (opcional)</h3>

    <label for="video360">Código youtube video 360</label>
    <input type="text" class="form-control" id="video360" name="video360" placeholder="-xNN-bJQ4vI" value="{{ old('video360') }}">

  <!--
  @if (!empty(old('images')))
    @foreach (old('images') as $image)
      <input type="hidden" name="images[]" data-source="{{ route('get_property_image_path', $image) }}" id="{{ preg_replace('/(.png|.jpg|.jpeg|.gif)/', '', $image) }}" value="{{ $image }}">
    @endforeach
  @endif
  -->
  
@endif
