<header class="header-area header-wrapper">
  <div class="header-top-bar bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="logo">
            <a href="{{ url('/') }}">
              <img src="images/logo/logo.png" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-6 hidden-sm hidden-xs">
          <div class="company-info clearfix">
            <div class="company-info-item">
              <div class="header-icon">
                <img src="images/icons/phone.png" alt="">
              </div>
              <div class="header-info">
                <h6>+88 (012) 564 979 56</h6>
                <p>Estamos de 9 am - 10pm</p>
              </div>
            </div>
            <div class="company-info-item">
              <div class="header-icon">
                <img src="images/icons/mail-open.png" alt="">
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
                <img src="images/icons/search.png" alt="">
              </button>
              <input type="text" placeholder="Search...">
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
              <a href="index.html">
                <img src="images/logo/logo.png" alt="">
              </a>
            </div>
            <nav id="primary-menu">
              <ul class="main-menu text-center">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">Publicar</a></li>
                <li><a href="#">Acelerador</a></li>
                <li><a href="{{ url('contacto') }}">Contacto</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
