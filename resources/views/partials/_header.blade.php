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
                        <div class=" col-md-6 company-info-item">
                            <div class="header-icon">
                                <img src="images/icons/phone.png" alt="">
                            </div>
                            <div class="header-info">
                                <h7>+88 (012) 564 979 56</h7>
                                <p>Estamos de 9 am - 10pm</p>
                            </div>
                        </div>
                        <div class="col-md-6 company-info-item">
                            <div class="header-icon">
                                <img src="images/icons/mail-open.png" alt="">
                            </div>
                            <div class="header-info">
                                <h7><a href="mailto:info@quickinmobiliario.com">info@quickinmobiliario.com</a></h7>
                                <p>Puedes escribirnos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="header-search clearfix">
                        @if (Auth::guest())
                        <div class="col-xs-2 col-md-1"></div>
                        <div class="col-md-5 col-xs-5 ">
                            <a href="{{ url('/login') }}">
                                <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>Sesión
                            </a>
                        </div>
                        <div class="col-md-5 col-xs-5">
                            <a href="{{ url('/register') }}">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Registro
                            </a>
                        </div>
                        @else
                        <div class="col-md-8 col-xs-8">
                            <a href="{{ route('profile_show_perfil',Auth::user()->username) }}" >
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ Auth::user()->username }}
                            </a>
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>Salir
                            </a>
                        </div>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="header-middle-area  transparent-header hidden-xs">
        <div class="container">
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
                    <li><a href="{{ url('preguntasfrecuentes') }}">Preguntas Frecuentes</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
>>>>>>> origin/master
</div>
</div>
</header>
