<header class="header-area header-wrapper">
  <div class="header-top-bar bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="logo">
            <a href="{{ url('/') }}">
              <img src="{{ asset('images/logo/logo.png') }}" alt="Quick Inmobiliario">
            </a>
          </div>
        </div>
        <div class="col-md-6 hidden-sm hidden-xs">
          <div class="company-info clearfix">
            <div class="company-info-item">
              <div class="header-icon">
                <img src="{{ asset('images/icons/phone.png') }}" alt="Teléfono">
              </div>
              <div class="header-info">
                <h6>+88 (012) 564 979 56</h6>
                <p>Estamos de 9 am - 10pm</p>
              </div>
            </div>
            <div class="company-info-item">
              <div class="header-icon">
                <img src="{{ asset('images/icons/mail-open.png') }}" alt="Email">
              </div>
              <div class="header-info">
                <h6><a href="mailto:info@quickinmobiliario.com">info@quickinmobiliario.com</a></h6>
                <p>Puedes escribirnos</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="header-search clearfix">
            <form action="#">
              <button class="search-icon" type="submit">
                <img src="{{ asset('images/icons/search.png') }}" alt="Buscar">
              </button>
              <input type="text" placeholder="Buscar...">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="sticky-header" class="header-middle-area  transparent-header hidden-xs">
    <div class="container">
      <div class="full-width-mega-drop-menu">
        <div class="row">
          <div class="col-md-12">
            <div class="sticky-logo">
              <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo/logo.png') }}" alt="Quick Inmobiliario">
              </a>
            </div>
            <nav id="primary-menu">
              <ul class="main-menu text-center">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li>
                <a href="#">Publicar</a>
                  <ul class="drop-menu">
                    <li><a href="{{ route('property_create_path') }}">Inmueble</a></li>
                    <li><a href="">Proyecto de Construcción</a></li>
                  </ul>
                </li>
                <li><a href="#">Acelerador</a></li>
                <li><a href="#">Planes</a></li>
                <li><a href="{{ url('contacto') }}">Contacto</a></li>
                <li><a href="">Preguntas Frecuentes</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
