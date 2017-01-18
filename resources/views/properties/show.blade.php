@extends('layouts.app')

@section('content')

  <!--<div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>Detalle del Inmueble <small> <a href="{{ route('properties_path') }}" class="btn btn-link pull-right"><< Volver</a></small></h1>
      <hr>

      <h2>{{ $property->name }}</h2>
      <h3>código: {{ $property->property_code }}</h3>
      <p><strong>Descripción:</strong> {{ $property->description }}</p>
      <p><strong>Zona:</strong> {{ $property->zone }}</p>
      <p><strong>Ciudad:</strong> {{ $property->city }}</p>
      <p><strong>Barrio:</strong> {{ $property->neighborhood }}</p>
      <p><strong>Dirección:</strong> {{ $property->address }}</p>
      <p><strong>Área construida:</strong> {{ $property->built_area }} M2</p>
      <p><strong>Área lote:</strong> {{ $property->full_area }} M2</p>
      <p><strong>Habitaciones:</strong> {{ $property->rooms }}</p>
      <p><strong>Estrato:</strong> {{ $property->stratum }}</p>
      <p><strong>Pisos:</strong> {{ $property->floors }}</p>
      <p><strong>Precio:</strong> $ {{ $property->price }}</p>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $property->video360 }}"></iframe>
      </div>
    </div>
  </div>

  <div class="row">
    @foreach ($property->property_images as $image)
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img src="{{ route('get_property_image_path', $image->id) }}" alt="{{ $property->name }}">
        </a>
      </div>
    @endforeach
  </div>-->

  <!-- BREADCRUMBS AREA START -->
  <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="breadcrumbs">
            <h2 class="breadcrumbs-title">Detalles Inmueble</h2>
            <ul class="breadcrumbs-list">
              <li><a href="index.html">Home</a></li>
              <li><a href="properties.html">Inmuebles</a></li>
              <li>Detalles Inmueble</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- BREADCRUMBS AREA END -->

  <!-- Start page content -->
  <section id="page-content" class="page-wrapper">

    <!-- PROPERTIES DETAILS AREA START -->
    <div class="properties-details-area pt-115 pb-60">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <!-- pro-details-image -->
            <div class="pro-details-image mb-60">
              <div class="pro-details-big-image">
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="pro-1">
                    <a href="/images/single-property/big/1.jpg" data-lightbox="image-1" data-title="Sheltek Properties - 1">
                      <img src="/images/single-property/big/1.jpg" alt="">
                    </a>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="pro-2">
                    <a href="/images/single-property/big/2.jpg" data-lightbox="image-1" data-title="Sheltek Properties - 2">
                      <img src="/images/single-property/big/2.jpg" alt="">
                    </a>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="pro-3">
                    <a href="/images/single-property/big/3.jpg" data-lightbox="image-1" data-title="Sheltek Properties - 3">
                      <img src="/images/single-property/big/3.jpg" alt="">
                    </a>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="pro-4">
                    <a href="/images/single-property/big/1.jpg" data-lightbox="image-1" data-title="Sheltek Properties - 4">
                      <img src="/images/single-property/big/1.jpg" alt="">
                    </a>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="pro-5">
                    <a href="/images/single-property/big/2.jpg" data-lightbox="image-1" data-title="Sheltek Properties - 5">
                      <img src="/images/single-property/big/2.jpg" alt="">
                    </a>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="pro-6">
                    <a href="/images/single-property/big/2.jpg" data-lightbox="image-1" data-title="Sheltek Properties - 6">
                      <img src="/images/single-property/big/2.jpg" alt="">
                    </a>
                  </div>
                </div>
              </div>
              <div class="pro-details-carousel">
                <div class="pro-details-item">
                  <a href="#pro-1" data-toggle="tab"><img src="/images/single-property/small/1.jpg" alt=""></a>
                </div>
                <div class="pro-details-item">
                  <a href="#pro-2" data-toggle="tab">
                    <img src="/images/single-property/small/2.jpg" alt="">
                  </a>
                </div>
                <div class="pro-details-item">
                  <a href="#pro-3" data-toggle="tab">
                    <img src="/images/single-property/small/3.jpg" alt="">
                  </a>
                </div>
                <div class="pro-details-item">
                  <a href="#pro-4" data-toggle="tab">
                    <img src="/images/single-property/small/4.jpg" alt="">
                  </a>
                </div>
                <div class="pro-details-item">
                  <a href="#pro-5" data-toggle="tab">
                    <img src="/images/single-property/small/1.jpg" alt="">
                  </a>
                </div>
                <div class="pro-details-item">
                  <a href="#pro-6" data-toggle="tab">
                    <img src="/images/single-property/small/1.jpg" alt="">
                  </a>
                </div>
              </div>
            </div>
            <!-- pro-details-short-info -->
            <div class="pro-details-short-info mb-60">
              <div class="row">
                <div class="col-sm-6 col-xs-12">
                  <div class="pro-details-condition">
                    <h5>Condition</h5>
                    <div class="pro-details-condition-inner bg-gray">
                      <ul class="condition-list">
                        <li><img src="/images/icons/5.png" alt="">Area 450 sqft</li>
                        <li><img src="/images/icons/6.png" alt="">Bedroom 5</li>
                        <li><img src="/images/icons/7.png" alt="">Bathroom 3</li>
                        <li><img src="/images/icons/13.png" alt="">Garage 2</li>
                        <li><img src="/images/icons/14.png" alt="">Kitchen 2</li>
                        <li>$52,350</li>
                      </ul>
                      <p><img src="/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey, USA</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                  <div class="pro-details-amenities">
                    <h5>Amenities</h5>
                    <div class="pro-details-amenities-inner bg-gray">
                      <ul class="amenities-list">
                        <li>Air Conditioning</li>
                        <li>Bedding</li>
                        <li>Balcony</li>
                        <li>Cable TV</li>
                        <li>Internet</li>
                        <li>Parking</li>
                        <li>Lift</li>
                        <li>Pool</li>
                        <li>Dishwasher</li>
                        <li>Toaster</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- pro-details-description -->
            <div class="pro-details-description mb-50">
              <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna iqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut quipx ea codo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolo</p>
              <p>Sheltek is the Best  should be the consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore lore magna iqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacm emod tempor incididunt ut labore lore magna iqua. Ut enim ad minim veniamco laboris nisi ut aliqu</p>
              <p>Sheltek is the Best  should be the consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore lore magna iqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacm</p>
            </div>
            <!-- pro-details-feedback -->
            <div class="pro-details-feedback mb-40">
              <h5>3 Feedback</h5>
              <!-- media -->
              <div class="media">
                <a class="media-left" href="#">
                  <img src="/images/avatar/1.jpg" alt="">
                </a>
                <div class="media-body">
                  <h6 class="media-heading"><a href="#">David Backhum</a></h6>
                  <p><span>6 hour ago</span>There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu tempor inc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
                </div>
              </div>
              <!-- media -->
              <div class="media">
                <a class="media-left" href="#">
                  <img src="/images/avatar/2.jpg" alt="">
                </a>
                <div class="media-body">
                  <h6 class="media-heading"><a href="#">Saniya Mirza</a></h6>
                  <p><span>8 hour ago</span>There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu tempor inc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
                </div>
              </div>
              <!-- media -->
              <div class="media">
                <a class="media-left" href="#">
                  <img src="/images/avatar/3.jpg" alt="">
                </a>
                <div class="media-body">
                  <h6 class="media-heading"><a href="#">Lionel Messi</a></h6>
                  <p><span>10 hour ago</span>There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu tempor inc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
                </div>
              </div>
            </div>
            <!-- agent-review -->
            <div class="pro-details-agent-review">
              <div class="row">
                <!-- single-agent -->
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="pro-details-agent">
                    <h5>Contact Agent</h5>
                    <div class="single-agent">
                      <div class="agent-image">
                        <img src="/images/agents/2.jpg" alt="">
                      </div>
                      <div class="agent-info">
                        <div class="agent-name">
                          <h5><a href="#">Eva Sharlin</a></h5>
                          <p>Real Estate Broker</p>
                        </div>
                      </div>
                      <div class="agent-info-hover">
                        <div class="agent-name">
                          <h5><a href="#">Eva Sharlin</a></h5>
                          <p>Real Estate Broker</p>
                        </div>
                        <ul class="agent-address">
                          <li><img src="/images/icons/phone-2.png" alt="">+1245  785  659 </li>
                          <li><img src="/images/icons/mail-close.png" alt="">eva@gmail.com </li>
                        </ul>
                        <ul class="social-media">
                          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- leave-massage -->
                <div class="col-md-7  col-sm-7 col-xs-12">
                  <div class="leave-review">
                    <h5>Leave a Review</h5>
                    <form action="#">
                      <input type="text" name="name" placeholder="Your name">
                      <input type="email" name="email" placeholder="Email here">
                      <textarea></textarea>
                      <button type="button" class="submit-btn-1">SUBMIT REVIEW</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <!-- widget-search-property -->
            <aside class="widget widget-search-property">
              <h5>Search For Property</h5>
              <div class="row">
                <div class="col-md-6 col-sm-3 col-xs-12">
                  <div class="find-home-item custom-select">
                    <select class="selectpicker" title="Location" data-hide-disabled="true" data-live-search="true">
                      <optgroup disabled="disabled" label="disabled">
                        <option>Hidden</option>
                      </optgroup>
                      <optgroup label="Australia">
                        <option>Sydney</option>
                        <option>Melbourne</option>
                        <option>Cairns</option>
                      </optgroup>
                      <optgroup label="USA">
                        <option>South Carolina</option>
                        <option>Florida</option>
                        <option>Rhode Island</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-3 col-xs-12">
                  <div class="find-home-item custom-select">
                    <select class="selectpicker" title="Sub - Location" data-hide-disabled="true" data-live-search="true">
                      <optgroup disabled="disabled" label="disabled">
                        <option>Hidden</option>
                      </optgroup>
                      <optgroup label="Australia">
                        <option>southeastern coast</option>
                        <option>southeastern tip</option>
                        <option>northwest corner</option>
                      </optgroup>
                      <optgroup label="USA">
                        <option>Charleston</option>
                        <option>St. Petersburg</option>
                        <option>Newport</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-3 col-xs-12">
                  <div class="find-home-item">
                    <input type="text" name="min-area" placeholder="Min area (sqft)">
                  </div>
                </div>
                <div class="col-md-6 col-sm-3 col-xs-12">
                  <div class="find-home-item">
                    <input type="text" name="max-area" placeholder="Max area (sqft)">
                  </div>
                </div>
                <div class="col-md-6 col-sm-3 col-xs-12">
                  <div class="find-home-item  custom-select">
                    <select class="selectpicker" title="No. of Beadrooms" data-hide-disabled="true">
                      <optgroup  label="1">
                        <option label="1">1 Beadrooms</option>
                        <option>2 Beadrooms</option>
                        <option>3 Beadrooms</option>
                        <option>4 Beadrooms</option>
                        <option>5 Beadrooms</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-3 col-xs-12">
                  <div class="find-home-item custom-select">
                    <select class="selectpicker" title="No. of Bathrooms" data-hide-disabled="true">
                      <optgroup label="2">
                        <option>1 Bathrooms</option>
                        <option>2 Bathrooms</option>
                        <option>3 Bathrooms</option>
                        <option>4 Bathrooms</option>
                        <option>5 Bathrooms</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <div class="col-md-10 col-sm-6 col-xs-12">
                  <div class="row">
                    <div class="col-md-12 col-sm-7 col-xs-12">
                      <div class="find-home-item">
                        <!-- shop-filter -->
                        <div class="shop-filter">
                          <div class="price_filter">
                            <div class="price_slider_amount">
                              <input type="submit"  value="You range :"/>
                              <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                            </div>
                            <div id="slider-range"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-5 col-xs-12">
                      <div class="find-home-item">
                        <a class="button-1 btn-block btn-hover-1" href="#">SEARCH</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
            <!-- widget-featured-property -->
            <aside class="widget widget-featured-property">
              <h5>Featured Property</h5>
              <div class="row">
                <!-- flat-item -->
                <div class="col-md-12 col-sm-6 col-xs-12">
                  <div class="flat-item">
                    <div class="flat-item-image">
                      <span class="for-sale">For Sale</span>
                      <a href="#"><img src="/images/flat/1.jpg" alt=""></a>
                      <div class="flat-link">
                        <a href="#">More Details</a>
                      </div>
                      <ul class="flat-desc">
                        <li>
                          <img src="/images/icons/4.png" alt="">
                          <span>450 sqft</span>
                        </li>
                        <li>
                          <img src="/images/icons/5.png" alt="">
                          <span>5</span>
                        </li>
                        <li>
                          <img src="/images/icons/6.png" alt="">
                          <span>3</span>
                        </li>
                      </ul>
                    </div>
                    <div class="flat-item-info">
                      <div class="flat-title-price">
                        <h5><a href="#">Masons de Villa </a></h5>
                        <span class="price">$52,350</span>
                      </div>
                      <p><img src="/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                    </div>
                  </div>
                </div>
                <!-- flat-item -->
                <div class="col-md-12 col-sm-6 col-xs-12">
                  <div class="flat-item">
                    <div class="flat-item-image">
                      <span class="for-sale">For Sale</span>
                      <a href="#"><img src="/images/flat/2.jpg" alt=""></a>
                      <div class="flat-link">
                        <a href="#">More Details</a>
                      </div>
                      <ul class="flat-desc">
                        <li>
                          <img src="/images/icons/4.png" alt="">
                          <span>450 sqft</span>
                        </li>
                        <li>
                          <img src="/images/icons/5.png" alt="">
                          <span>5</span>
                        </li>
                        <li>
                          <img src="/images/icons/6.png" alt="">
                          <span>3</span>
                        </li>
                      </ul>
                    </div>
                    <div class="flat-item-info">
                      <div class="flat-title-price">
                        <h5><a href="#">Masons de Villa </a></h5>
                        <span class="price">$52,350</span>
                      </div>
                      <p><img src="/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                    </div>
                  </div>
                </div>
                <!-- flat-item -->
                <div class="col-md-12 hidden-sm col-xs-12">
                  <div class="flat-item">
                    <div class="flat-item-image">
                      <span class="for-sale">For Sale</span>
                      <a href="#"><img src="/images/flat/3.jpg" alt=""></a>
                      <div class="flat-link">
                        <a href="#">More Details</a>
                      </div>
                      <ul class="flat-desc">
                        <li>
                          <img src="/images/icons/4.png" alt="">
                          <span>450 sqft</span>
                        </li>
                        <li>
                          <img src="/images/icons/5.png" alt="">
                          <span>5</span>
                        </li>
                        <li>
                          <img src="/images/icons/6.png" alt="">
                          <span>3</span>
                        </li>
                      </ul>
                    </div>
                    <div class="flat-item-info">
                      <div class="flat-title-price">
                        <h5><a href="#">Masons de Villa </a></h5>
                        <span class="price">$52,350</span>
                      </div>
                      <p><img src="/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
            <!-- widget-video -->
            <aside class="widget widget-video">
              <h5>Take A Look</h5>
              <div class="properties-video">
                <div class="embed-responsive embed-responsive-16by9">
                  <!-- <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/40934652"></iframe> -->
                  <iframe src="https://player.vimeo.com/video/117765418?title=0&byline=0&portrait=0" allowfullscreen></iframe>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
    <!-- PROPERTIES DETAILS AREA END -->

    <!-- NEWSLETTER AREA START -->
    @include('partials._newsletter')
    <!-- NEWSLETTER AREA END -->
  </section>

@stop
