@extends('layouts.app')
@section('content')
<!-- Body main wrapper start -->
<div class="wrapper">

	<!-- BREADCRUMBS AREA START -->
	<div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="breadcrumbs">
						<h2 class="breadcrumbs-title">Preguntas Frecuentes</h2>
						<ul class="breadcrumbs-list">
							<li><a href="index.html">Inicio</a></li>
							<li>Preguntas Frecuentes</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- BREADCRUMBS AREA END -->

	<!-- Start page content -->
	<div id="page-content" class="page-wrapper">

		<!-- ELEMENTS AREA START -->
		<div class="elements-area ptb-115">
			<div class="container">
				<div class="row">
					<!-- starts the 1st toogle  -->
					<div class="col-md-6">
						<h3 class="form-division mb-30">1- Período Promocional</h3>
						<div class="panel-group" id="accordion_1">
							<div class="panel panel-default">
								<div class="panel-heading" id="headingOne">
									<h5 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true">
											<i class="fa fa-bolt" aria-hidden="true"></i> ¿Cuántos días dura el período promocional?
										</a>
									</h5>
								</div>
								<div id="collapseOne_1" class="panel-collapse collapse in" >
									<div class="panel-body">
										Otorgamos 30 días de la herramienta, no se realiza ningún tipo de cargo.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" id="headingTwo">
									<h5 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false">
											<i class="fa fa-bolt" aria-hidden="true"></i> ¿Tengo que instalar algún software para usar QuickInmobiliario?
										</a>
									</h5>
								</div>
								<div id="collapseTwo_1" class="panel-collapse collapse">
									<div class="panel-body">
										No, en lo absoluto, QuickInmobiliario es un servicio 100% en la nube, es decir, ingresar a <a href="#">QuickInmobiliario.com</a> es el único requisito.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" id="headingThree">
									<h5 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_1" aria-expanded="false">
											<i class="fa fa-bolt" aria-hidden="true"></i> ¿Tengo que proveer datos de pago para usar QuickInmobiliario?
										</a>
									</h5>
								</div>
								<div id="collapseThree_1" class="panel-collapse collapse"  aria-labelledby="headingThree">
									<div class="panel-body">
										No, no solicitamos información de pago (tarjetas de crédito o cuentas bancarias) para registrarte a QuickInmobiliario, en el momento que decidas contratar un plan, deberás ingresar estos datos para proceder con la contratación
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" id="headingFour">
									<h5 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion_1" href="#collapseFour_1" aria-expanded="false">
											<i class="fa fa-bolt" aria-hidden="true"></i> ¿Luego del período promocional, me cobrarán?
										</a>
									</h5>
								</div>
								<div id="collapseFour_1" class="panel-collapse collapse"  aria-labelledby="headingFour">
									<div class="panel-body">
										No, no realizamos cargo de ningún tipo al vencer tu período promocional a menos de que solicites la activación de cualquiera de nuestros planes.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" id="headingSix">
									<h5 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion_1" href="#collapseSix_1" aria-expanded="false">
											<i class="fa fa-bolt" aria-hidden="true"></i> ¿Cuáles funcionalidades están activas durante el período promocional?
										</a>
									</h5>
								</div>
								<div id="collapseSix_1" class="panel-collapse collapse"  aria-labelledby="headingSix">
									<div class="panel-body">
										Durante este período disfrutarás al 100% del plan Empresarial
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ending 1st toogle  -->
					<!-- starts the 2nd toogle -->
					<div class="col-md-6">
						<h3 class="form-division mb-30">2- Pagos.</h3>
						<div class="panel-group" id="accordion_2">
							<div class="panel panel-default">
								<div class="panel-heading" id="headingOne">
									<h5 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion_2" href="#collapseOne_2" aria-expanded="true">
											<i class="fa fa-bolt" aria-hidden="true"></i> ¿Los precios incluyen IVA, y entregan factura?
										</a>
									</h5>
								</div>
								<div id="collapseOne_2" class="panel-collapse collapse in" >
									<div class="panel-body">
										Sí, Los precios ya incluyen IVA, y la factura es eléctronica.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" id="headingTwo">
									<h5 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion_2" href="#collapseTwo_2" aria-expanded="false">
											<i class="fa fa-bolt" aria-hidden="true"></i> ¿Cuáles monedas aceptan?
										</a>
									</h5>
								</div>
								<div id="collapseTwo_2" class="panel-collapse collapse">
									<div class="panel-body">
										Aceptamos sólamente Pesos Colombianos (COP).
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" id="headingThree">
									<h5 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion_2" href="#collapseThree_2" aria-expanded="false">
											<i class="fa fa-bolt" aria-hidden="true"></i> ¿Cuál es el procedimiento para contratar?
										</a>
									</h5>
								</div>
								<div id="collapseThree_2" class="panel-collapse collapse"  aria-labelledby="headingThree">
									<div class="panel-body">
										Es muy sencillo, sólo sigue estos pasos:
										<ol>
											<li>Completa tu proceso de <a href="">registro</a> o <a href="">inicia sesión</a> si ya eres usuario.</li>
											<li>Una vez dentro, dirígete la sección <a href="">Precios</a></li>
											<li>Asegúrate que estés en la pestaña Pedidos, luego haz click en Seleccionar y Contratar Plan</li>
											<li>Selecciona el método de pago de tu preferencia y ¡listo!</li>
										</ol>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" id="headingFour">
									<h5 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion_2" href="#collapseFour_2" aria-expanded="false">
											<i class="fa fa-bolt" aria-hidden="true"></i> ¿Cuáles son los métodos de pago aceptados?
										</a>
									</h5>
								</div>
								<div id="collapseFour_2" class="panel-collapse collapse"  aria-labelledby="headingFour">
									<div class="panel-body">
										<ol>
											<!-- <li>Para pagos desde el exterior aceptamos tarjeta de crédito a través de Paypal</li> -->
											<li>Para Colombia, aceptamos depósito o transferencia bancaria, de igual forma, aceptamos pagos con tarjeta de crédito a través de <a href="https://www.mercadopago.com.co" target="_blank">MercadoPago</a></li>
										</ol>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" id="headingFive">
									<h5 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion_2" href="#collapseFive_2" aria-expanded="false">
											<i class="fa fa-bolt" aria-hidden="true"></i> ¿Ofrecen descuentos en sus planes?
										</a>
									</h5>
								</div>
								<div id="collapseFive_2" class="panel-collapse collapse"  aria-labelledby="headingFive">
									<div class="panel-body">
										Sí, ofrecemos descuentos por pagos adelantados así:
										<ol>
											<li>Trimestral
												<li>semestral </li>
												<li>y anual con el 8% </li>
											</ol>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ending 2nd toogle -->
					</div>
				</div>
			</div>
			<!-- ELEMENTS AREA END -->

			@include('partials._newsletter')
			<!-- SUBSCRIBE AREA END -->
		</div>
		<!-- End page content -->

		@stop
