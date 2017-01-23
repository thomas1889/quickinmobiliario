@extends('layouts.app')

@section('content')

  <!-- BREADCRUMBS AREA START -->
  <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="breadcrumbs">
            <h2 class="breadcrumbs-title">Contátenos</h2>
            <ul class="breadcrumbs-list">
              <li><a href="index.html">Inicio</a></li>
              <li>Contacto</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- BREADCRUMBS AREA END -->

  <!-- Start page content -->
  <section id="page-content" class="page-wrapper">

    <!-- CONTACT AREA START -->
    <div class="contact-area pt-115 pb-115">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 col-xs-12">
            <!-- get-in-toch -->
            <div class="get-in-toch">
              <div class="section-title mb-30">
                <h3>¿Tíenes alguna duda o sugerencia?</h3>
                <h2></h2>
              </div>
              <div class="contact-desc mb-50">
                <p>
																	En
																	<span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">QuickInmobiliario</span>
																	Valoramos todas las opiniones, Sí lo desea puede escribirnos, sus comentarios son muy importantes para nosotros...
																</p>
              </div>
              <ul class="contact-address">
                <li>
                  <div class="contact-address-icon">
                    <img src="/images/icons/location-2.png" alt="">
                  </div>
                  <div class="contact-address-info">
                    <span>Calle 94a #11a -27</span>
                    <span>Bogotá DC, Zipcode: 110011.</span>
                  </div>
                </li>
                <li>
                  <div class="contact-address-icon">
                    <img src="/images/icons/phone-3.png" alt="">
                  </div>
                  <div class="contact-address-info">
                    <span>Teléfono: (+57) 622 03 85.</span>
                    <span>Celular : (+57) 322 874 32 88.</span>
                  </div>
                </li>
                <li>
                  <div class="contact-address-icon">
                    <img src="/images/icons/world.png" alt="">
                  </div>
                  <div class="contact-address-info">
                    <span>Email : info@quickinmobiliario.com</span>
                    <span>Skype :<a href="#" target="_blank"> quickinmobiliario</a></span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-7 col-xs-12">
            <div class="contact-messge contact-bg">
              <!-- blog-details-reply -->
              <div class="leave-review">
                <h5>Escriba su mensaje a continuación:</h5>
                <form  id="contact-form" action="mail.php" method="post">
                  <input type="text" name="name" placeholder="Su Nombre:">
                  <input type="email" name="email" placeholder="Su E-mail:">
                  <textarea name="message" placeholder="Mensaje:"></textarea>
                  <button type="submit" class="submit-btn-1">Envíar</button>
                </form>
                <p class="form-messege mb-0"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CONTACT AREA END -->

    <!-- GOOGLE MAP AREA START -->
    <!--<div class="google-map-area">
      <div id="googleMap"></div>
    </div>-->
    <!-- GOOGLE MAP AREA END -->

    <!-- NEWSLETTER AREA START -->
    @include('partials._newsletter')
    <!-- NEWSLETTER AREA END -->
  </section>

@stop
