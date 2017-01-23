<div class="mobile-menu-area hidden-sm hidden-md hidden-lg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a href="{{ url('/') }}">
                                    <i class="fa fa-home fa-1x" aria-hidden="true"></i>	Inicio
                                </a></li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-pencil fa-1x" aria-hidden="true"></i> Publicar
                                </a>
                                <ul class="drop-menu">
                                    <li><a href="{{ route('property_create_path') }}">Inmueble</a></li>
                                    <li><a href="">Proyecto de Construcción</a></li>
                                </ul>
                            </li>
                            <li><a href="#">
                                    <i class="fa fa-universal-access fa-1x" aria-hidden="true"></i> Acelerador
                                </a>
                            </li>
                            <li><a href="{{ url('preciosyplanes') }}">
                                    <i class="fa fa-shopping-basket fa-1x" aria-hidden="true" alt="Ícono Canasta"></i> Planes
                                </a></li>
                            <li><a href="{{ url('contacto') }}">
                                    <i class="fa fa-bell fa-1x" aria-hidden="true" alt="Ícono Campana"></i> Contacto
                                </a></li>
                            <li><a href="{{ url('preguntasfrecuentes') }}">
                                    <i class="fa fa-life-ring" aria-hidden="true"></i> Ayuda
                                </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
