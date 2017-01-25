<div class="slider-2 bg-3 bg-opacity-black-70">
  <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="find-home-box">
      <div class="section-title text-white">
        <h3>Encuentre</h3>
        <h2 class="h1">Su vivienda Aquí!</h2>
      </div>
      <div class="find-homes">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <div class="find-home-item custom-select">
              <select class="selectpicker" title="Zona" data-hide-disabled="true" data-live-search="true">
                <optgroup disabled="disabled" label="disabled">
                  <option>Hidden</option>
                </optgroup>
                <optgroup label="Zona">
                  <option>Norte</option>
                  <option>Sur</option>
                  <option>Occidente</option>
                  <option>Centro</option>
                </optgroup>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="find-home-item custom-select">
              <select class="selectpicker" title="Ciudad" data-hide-disabled="true" data-live-search="true">
                <optgroup disabled="disabled" label="disabled">
                  <option>Hidden</option>
                </optgroup>
                <optgroup label="Cundinamarca">
                  <option value="Chocontá">Chocontá</option>
                  <option value="Machetá">Machetá</option>
                  <option value="Manta">Manta</option>
                  <option value="Sesquilé">Sesquilé</option>
                  <option value="Suesca">Suesca</option>
                  <option value="Tibirita">Tibirita</option>
                  <option value="Villapinzón">Villapinzón</option>
                  <option value="Bogotá">Bogotá</option>
                </optgroup>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="find-home-item custom-select">
              <select class="selectpicker" title="Tipo Inmueble">
                @foreach ($property_types as $type)
                  <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="find-home-item  custom-select">
              <select class="selectpicker" title="No. de Habitaciones" data-hide-disabled="true">
                <optgroup  label="1 Habitación">
                  <option label="1">1 Habitación</option>
                  <option>2 Habitaciones</option>
                  <option>3 Habitaciones</option>
                  <option>4 Habitaciones</option>
                  <option>5 Habitaciones</option>
                </optgroup>
              </select>
            </div>
          </div>
          <div class="col-sm-12 col-xs-12">
            <div class="find-home-item">
              <!-- shop-filter -->
              <div class="shop-filter">
                <div class="price_filter">
                  <div class="price_slider_amount">
                    <input type="submit"  value="Precio :"/>
                    <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                  </div>
                  <div id="slider-range"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-xs-12">
            <div class="find-home-item">
              <a class="button-1 btn-block btn-hover-1" href="#">Buscar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
