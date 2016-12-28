{{ csrf_field() }}
@if(isset($price_plan))
  <div class="form-group">
    <label for="price-plan-name">Nombre del Plan</label>
    <input type="text" class="form-control" name="name" id="price-plan-name" value="{{ $price_plan->name }}">
  </div>
  <div class="form-group">
    <label for="price-plan">Precio</label>
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="number" id="price-plan" name="price" class="form-control" value="{{ $price_plan->price }}">
    </div>
  </div>
  <div class="form-group">
    <label for="price-plan-description">Descripción</label>
    <textarea name="description" id="price-plan-description" class="form-control" rows="8" cols="80">{{ $price_plan->description }}</textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $btn_price_plan }}</button>
  </div>
@else
  <div class="form-group">
    <label for="price-plan-name">Nombre del Plan</label>
    <input type="text" class="form-control" name="name" id="price-plan-name" value="{{ old('name') }}">
  </div>
  <div class="form-group">
    <label for="price-plan">Precio</label>
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="number" id="price-plan" name="price" class="form-control" value="{{ old('price') }}">
    </div>
  </div>
  <div class="form-group">
    <label for="price-plan-description">Descripción</label>
    <textarea name="description" id="price-plan-description" class="form-control" rows="8" cols="80">{{ old('description') }}</textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Crear Plan</button>
  </div>
@endif
