<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Quick Inmobiliario</title>
    </head>
    <body>
        <!-- Body main wrapper start -->
        <div id="app" class="wrapper">
          <!-- HEADER AREA START -->
          @include('partials._header')
          <!-- HEADER AREA END -->

          <!-- MOBILE MENU AREA START -->
          @include('partials._mobileMenu')
          <!-- MOBILE MENU AREA END -->

          <!-- Header por defecto al usar el generador Auth
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image
                        <a class="navbar-brand" href="{{ url('/') }}">
                            Quick Inmobiliario
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        <!-- Right Side Of Navbar
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links
                            @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Iniciar Sesión</a></li>
                            <li><a href="{{ url('/register') }}">Registro</a></li>
                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>
                                        <a href="{{ route('profile_show_perfil',Auth::user()->username) }}">
                                            Perfil
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>-->

          <!-- SLIDER SECTION START -->
          @include('partials._slider')
          <!-- SLIDER SECTION END -->

          <!-- Start page content -->
          <section id="page-content" class="page-wrapper">
            @yield('content')

            <!-- NEWSLETTER AREA START -->
            @include('partials._newsletter')
            <!-- NEWSLETTER AREA END -->
          </section>
          <!-- Body main wrapper end -->

          <!-- Start footer area -->
          @include('partials._footer')
          <!-- End footer area -->
        </div>
        <!-- Body main wrapper end -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
        <!-- Scripts -->
        <script>
            window.Laravel = <?php
            echo json_encode([
              'csrfToken' => csrf_token(),
            ]);
            ?>
        </script>
        <!-- Scripts -->
        <script src="/js/app.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
