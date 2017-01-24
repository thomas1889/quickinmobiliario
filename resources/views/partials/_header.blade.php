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
																<img src="{{ asset('images/icons/phone.png') }}" alt="">
														</div>
														<div class="header-info">
																<h6>+88 (012) 564 979 56</h6>
																<p>We are open 9 am - 10pm</p>
														</div>
												</div>
												<div class="company-info-item">
														<div class="header-icon">
																<img src="{{ asset('images/icons/mail-open.png') }}" alt="">
														</div>
														<div class="header-info">
																<h6><a href="mailto:hnasir770@gmail.com">info@quickinmobiliario.com</a></h6>
																<p>Puedes escribirnos</p>
														</div>
												</div>
										</div>
								</div>
								<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="clearfix">
											<div class="header-search clearfix">
													@if (Auth::guest())
													<div class="col-xs-2 col-md-1"></div>
													<div class="col-md-5 col-xs-5 ">
															<a href="{{ url('/login') }}">
																	<i class="fa fa-sign-in fa-1x" aria-hidden="true"></i> Sesión
															</a>
													</div>
													<div class="col-md-5 col-xs-5">
															<a href="{{ url('/register') }}">
																 <i class="fa fa-pencil-square-o fa-1x" aria-hidden="true"></i> Registro
															</a>
													</div>
													@else
													<div class="col-md-8 col-xs-8">
															<a href="{{ route('profile_show_perfil',Auth::user()->username) }}" >
																	<i class="fa fa-user-circle-o fa-1x" aria-hidden="true"></i> {{ Auth::user()->username }}
															</a>
													</div>
													<div class="col-md-4 col-xs-4">
															<a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
																	<i class="fa fa-power-off fa-1x" aria-hidden="true"></i> Salir
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
		</div>
		<div id="sticky-header" class="header-middle-area  transparent-header hidden-xs">
				<div class="container">
						<div class="full-width-mega-drop-menu">
								<div class="row">
										<div class="col-md-12">
												<div class="sticky-logo">
														<a href="index.html">
																<img src="{{ asset('images/logo/logo.png') }}" alt="">
														</a>
												</div>
												<nav id="primary-menu">
														<ul class="main-menu text-center">
																<li><a href="{{ url('/') }}"><i class="fa fa-home fa-1x" aria-hidden="true"></i> Inicio</a></li>
																<li><a href="#"><i class="fa fa-pencil fa-1x" aria-hidden="true"></i> Publicar</a>
																	<ul class="drop-menu">
																		<li><a href="{{ route('property_create_path') }}">Inmueble</a></li>
																		<li><a href="">Proyecto de Construcción</a></li>
				                        	</ul>
																</li>
																<li><a href="#"><i class="fa fa-universal-access fa-1x" aria-hidden="true"></i> Acelerador</a></li>
																<li><a href="{{ url('preciosyplanes') }}"><i class="fa fa-shopping-basket fa-1x" aria-hidden="true" alt="Ícono Canasta"></i> Planes</a></li>
																<li><a href="{{ url('contacto') }}"><i class="fa fa-bell fa-1x" aria-hidden="true" alt="Ícono Campana"></i> Contacto</a></li>
						                    <li><a href="{{ url('preguntasfrecuentes') }}"><i class="fa fa-life-ring" aria-hidden="true"></i> Ayuda</a></li>
														</ul>
												</nav>
										</div>
								</div>
						</div>
				</div>
		</div>
</header>
