@extends('layouts.app')

@section('content')
  <!--<h1>Listado de Inmuebles <a href="{{ route('property_create_path') }}" class="btn btn-success">Nuevo Inmueble</a> <small><a href="/" class="btn btn-link pull-right"><< Regresar</a></small></h1>

  <div class="row">
    <div class="col-md-12">
      <div class="well well-lg">
        <!--<propertysearch></propertysearch>
        <form class="form form-inline" action="{{ route('property_filter_path') }}" method="get">
          <div class="form-group">
            <select class="form-control" name="city">
              <option value="-1">Ciudad</option>
              <option value="Gerholdport">Gerholdport</option>
              <option value="Leonieview">Leonieview</option>
              <option value="Uptonstad">Uptonstad</option>
              <option value="East Terryville">East Terryville</option>
              <option value="Haneview">Haneview</option>
              <option value="New Devon">New Devon</option>
              <option value="West Laishamouth">West Laishamouth</option>
              <option value="Maggioville">Maggioville</option>
              <option value="New Waldo">New Waldo</option>
              <option value="Ziemefurt">Ziemefurt</option>
            </select>
          </div>
          <div class="form-group">
            <input type="number" min="0" step="1" class="form-control" name="rooms" placeholder="Habitaciones">
          </div>
          <div class="form-group">
            <input type="number" min="0" step="1" class="form-control" name="bathrooms" placeholder="Baños">
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
      </div>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Inmueble</th>
          <th>Precio</th>
          <th>Área</th>
          <th>Ciudad</th>
          <th>Creado</th>
          <th style="width:13%">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($properties as $property)
          <tr>
            <td>{{ $property->id }}</td>
            <td>{{ $property->name }}</td>
            <td>{{ $property->price }}</td>
            <td>{{ $property->full_area }}</td>
            <td>{{ $property->city }}</td>
            <td>{{ $property->created_at }}</td>
            <td id="property-actions">
              <a href="{{ route('property_show_path', $property->id) }}" class="btn btn-success"><span class="glyphicon glyphicon-eye-open"></span></a>
              <a href="{{ route('property_edit_path', $property->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
              <a href="#" class="btn btn-danger" v-on:click.prevent="deleteProperty($event)">
                <span class="glyphicon glyphicon-trash"></span>
                <form class="hidden" action="{{ route('property_delete_path', $property->id) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                </form>
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- Paginación
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ $properties->links() }}
    </div>
  </div>-->

  <!-- BREADCRUMBS AREA START -->
  <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="breadcrumbs">
            <h2 class="breadcrumbs-title">Inmuebles</h2>
            <ul class="breadcrumbs-list">
              <li><a href="{{ url('/') }}">Inicio</a></li>
              <li>Inmuebles</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- BREADCRUMBS AREA END -->

  <!-- Start page content -->
  <section id="page-content" class="page-wrapper">

    <!-- FEATURED FLAT AREA START -->
    <div class="featured-flat-area pt-115 pb-60">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="featured-flat">
              <div class="row">
                <!-- flat-item -->
                <div class="col-sm-6 col-xs-12">
                  <div class="flat-item">
                    <div class="flat-item-image">
                      <span class="for-sale">For Sale</span>
                      <a href="properties-details.html"><img src="images/flat/1.jpg" alt=""></a>
                      <div class="flat-link">
                        <a href="properties-details.html">More Details</a>
                      </div>
                      <ul class="flat-desc">
                        <li>
                          <img src="images/icons/4.png" alt="">
                          <span>450 sqft</span>
                        </li>
                        <li>
                          <img src="images/icons/5.png" alt="">
                          <span>5</span>
                        </li>
                        <li>
                          <img src="images/icons/6.png" alt="">
                          <span>3</span>
                        </li>
                      </ul>
                    </div>
                    <div class="flat-item-info">
                      <div class="flat-title-price">
                        <h5><a href="properties-details.html">Masons de Villa </a></h5>
                        <span class="price">$52,350</span>
                      </div>
                      <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                    </div>
                  </div>
                </div>
                <!-- flat-item -->
                <div class="col-sm-6 col-xs-12">
                  <div class="flat-item">
                    <div class="flat-item-image">
                      <a href="properties-details.html"><img src="images/flat/2.jpg" alt=""></a>
                      <div class="flat-link">
                        <a href="properties-details.html">More Details</a>
                      </div>
                      <ul class="flat-desc">
                        <li>
                          <img src="images/icons/4.png" alt="">
                          <span>450 sqft</span>
                        </li>
                        <li>
                          <img src="images/icons/5.png" alt="">
                          <span>5</span>
                        </li>
                        <li>
                          <img src="images/icons/6.png" alt="">
                          <span>3</span>
                        </li>
                      </ul>
                    </div>
                    <div class="flat-item-info">
                      <div class="flat-title-price">
                        <h5><a href="properties-details.html">Masons de Villa </a></h5>
                        <span class="price">$52,350</span>
                      </div>
                      <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                    </div>
                  </div>
                </div>
                <!-- flat-item -->
                <div class="col-sm-6 col-xs-12">
                  <div class="flat-item">
                    <div class="flat-item-image">
                      <span class="for-sale rent">For rent</span>
                      <a href="properties-details.html"><img src="images/flat/3.jpg" alt=""></a>
                      <div class="flat-link">
                        <a href="properties-details.html">More Details</a>
                      </div>
                      <ul class="flat-desc">
                        <li>
                          <img src="images/icons/4.png" alt="">
                          <span>450 sqft</span>
                        </li>
                        <li>
                          <img src="images/icons/5.png" alt="">
                          <span>5</span>
                        </li>
                        <li>
                          <img src="images/icons/6.png" alt="">
                          <span>3</span>
                        </li>
                      </ul>
                    </div>
                    <div class="flat-item-info">
                      <div class="flat-title-price">
                        <h5><a href="properties-details.html">Masons de Villa </a></h5>
                        <span class="price">$52,350</span>
                      </div>
                      <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                    </div>
                  </div>
                </div>
                <!-- flat-item -->
                <div class="col-sm-6 col-xs-12">
                  <div class="flat-item">
                    <div class="flat-item-image">
                      <a href="properties-details.html"><img src="images/flat/4.jpg" alt=""></a>
                      <div class="flat-link">
                        <a href="properties-details.html">More Details</a>
                      </div>
                      <ul class="flat-desc">
                        <li>
                          <img src="images/icons/4.png" alt="">
                          <span>450 sqft</span>
                        </li>
                        <li>
                          <img src="images/icons/5.png" alt="">
                          <span>5</span>
                        </li>
                        <li>
                          <img src="images/icons/6.png" alt="">
                          <span>3</span>
                        </li>
                      </ul>
                    </div>
                    <div class="flat-item-info">
                      <div class="flat-title-price">
                        <h5><a href="properties-details.html">Masons de Villa </a></h5>
                        <span class="price">$52,350</span>
                      </div>
                      <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                    </div>
                  </div>
                </div>
                <!-- flat-item -->
                <div class="col-sm-6 col-xs-12">
                  <div class="flat-item">
                    <div class="flat-item-image">
                      <span class="for-sale">For Sale</span>
                      <a href="properties-details.html"><img src="images/flat/5.jpg" alt=""></a>
                      <div class="flat-link">
                        <a href="properties-details.html">More Details</a>
                      </div>
                      <ul class="flat-desc">
                        <li>
                          <img src="images/icons/4.png" alt="">
                          <span>450 sqft</span>
                        </li>
                        <li>
                          <img src="images/icons/5.png" alt="">
                          <span>5</span>
                        </li>
                        <li>
                          <img src="images/icons/6.png" alt="">
                          <span>3</span>
                        </li>
                      </ul>
                    </div>
                    <div class="flat-item-info">
                      <div class="flat-title-price">
                        <h5><a href="properties-details.html">Masons de Villa </a></h5>
                        <span class="price">$52,350</span>
                      </div>
                      <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                    </div>
                  </div>
                </div>
                <!-- flat-item -->
                <div class="col-sm-6 col-xs-12">
                  <div class="flat-item">
                    <div class="flat-item-image">
                      <a href="properties-details.html"><img src="images/flat/6.jpg" alt=""></a>
                      <div class="flat-link">
                        <a href="properties-details.html">More Details</a>
                      </div>
                      <ul class="flat-desc">
                        <li>
                          <img src="images/icons/4.png" alt="">
                          <span>450 sqft</span>
                        </li>
                        <li>
                          <img src="images/icons/5.png" alt="">
                          <span>5</span>
                        </li>
                        <li>
                          <img src="images/icons/6.png" alt="">
                          <span>3</span>
                        </li>
                      </ul>
                    </div>
                    <div class="flat-item-info">
                      <div class="flat-title-price">
                        <h5><a href="properties-details.html">Masons de Villa </a></h5>
                        <span class="price">$52,350</span>
                      </div>
                      <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                    </div>
                  </div>
                </div>
                <!-- flat-item -->
                <div class="col-sm-6 col-xs-12">
                  <div class="flat-item">
                    <div class="flat-item-image">
                      <span class="for-sale rent">For rent</span>
                      <a href="properties-details.html"><img src="images/flat/7.jpg" alt=""></a>
                      <div class="flat-link">
                        <a href="properties-details.html">More Details</a>
                      </div>
                      <ul class="flat-desc">
                        <li>
                          <img src="images/icons/4.png" alt="">
                          <span>450 sqft</span>
                        </li>
                        <li>
                          <img src="images/icons/5.png" alt="">
                          <span>5</span>
                        </li>
                        <li>
                          <img src="images/icons/6.png" alt="">
                          <span>3</span>
                        </li>
                      </ul>
                    </div>
                    <div class="flat-item-info">
                      <div class="flat-title-price">
                        <h5><a href="properties-details.html">Masons de Villa </a></h5>
                        <span class="price">$52,350</span>
                      </div>
                      <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                    </div>
                  </div>
                </div>
                <!-- flat-item -->
                <div class="col-sm-6 col-xs-12">
                  <div class="flat-item">
                    <div class="flat-item-image">
                      <a href="properties-details.html"><img src="images/flat/8.jpg" alt=""></a>
                      <div class="flat-link">
                        <a href="properties-details.html">More Details</a>
                      </div>
                      <ul class="flat-desc">
                        <li>
                          <img src="images/icons/4.png" alt="">
                          <span>450 sqft</span>
                        </li>
                        <li>
                          <img src="images/icons/5.png" alt="">
                          <span>5</span>
                        </li>
                        <li>
                          <img src="images/icons/6.png" alt="">
                          <span>3</span>
                        </li>
                      </ul>
                    </div>
                    <div class="flat-item-info">
                      <div class="flat-title-price">
                        <h5><a href="properties-details.html">Masons de Villa </a></h5>
                        <span class="price">$52,350</span>
                      </div>
                      <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                    </div>
                  </div>
                </div>
                <!-- flat-item -->
                <div class="col-sm-6 col-xs-12">
                  <div class="flat-item">
                    <div class="flat-item-image">
                      <span class="for-sale">For Sale</span>
                      <a href="properties-details.html"><img src="images/flat/9.jpg" alt=""></a>
                      <div class="flat-link">
                        <a href="properties-details.html">More Details</a>
                      </div>
                      <ul class="flat-desc">
                        <li>
                          <img src="images/icons/4.png" alt="">
                          <span>450 sqft</span>
                        </li>
                        <li>
                          <img src="images/icons/5.png" alt="">
                          <span>5</span>
                        </li>
                        <li>
                          <img src="images/icons/6.png" alt="">
                          <span>3</span>
                        </li>
                      </ul>
                    </div>
                    <div class="flat-item-info">
                      <div class="flat-title-price">
                        <h5><a href="properties-details.html">Masons de Villa </a></h5>
                        <span class="price">$52,350</span>
                      </div>
                      <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                    </div>
                  </div>
                </div>
                <!-- flat-item -->
                <div class="col-sm-6 col-xs-12">
                  <div class="flat-item">
                    <div class="flat-item-image">
                      <span class="for-sale rent">For rent</span>
                      <a href="properties-details.html"><img src="images/flat/7.jpg" alt=""></a>
                      <div class="flat-link">
                        <a href="properties-details.html">More Details</a>
                      </div>
                      <ul class="flat-desc">
                        <li>
                          <img src="images/icons/4.png" alt="">
                          <span>450 sqft</span>
                        </li>
                        <li>
                          <img src="images/icons/5.png" alt="">
                          <span>5</span>
                        </li>
                        <li>
                          <img src="images/icons/6.png" alt="">
                          <span>3</span>
                        </li>
                      </ul>
                    </div>
                    <div class="flat-item-info">
                      <div class="flat-title-price">
                        <h5><a href="properties-details.html">Masons de Villa </a></h5>
                        <span class="price">$52,350</span>
                      </div>
                      <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                    </div>
                  </div>
                </div>
                <!-- pagination-area -->
                <div class="col-xs-12">
                  <div class="pagination-area mb-60">
                    <ul class="pagination-list text-center">
                      <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <!-- widget-search-property -->
            <aside class="widget widget-search-property mb-30">
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
            <aside class="widget widget-featured-property mb-30">
              <h5>Featured Property</h5>
              <div class="row">
                <!-- flat-item -->
                <div class="col-md-12 col-sm-6 col-xs-12">
                  <div class="flat-item">
                    <div class="flat-item-image">
                      <span class="for-sale">For Sale</span>
                      <a href="#"><img src="images/flat/1.jpg" alt=""></a>
                      <div class="flat-link">
                        <a href="#">More Details</a>
                      </div>
                      <ul class="flat-desc">
                        <li>
                          <img src="images/icons/4.png" alt="">
                          <span>450 sqft</span>
                        </li>
                        <li>
                          <img src="images/icons/5.png" alt="">
                          <span>5</span>
                        </li>
                        <li>
                          <img src="images/icons/6.png" alt="">
                          <span>3</span>
                        </li>
                      </ul>
                    </div>
                    <div class="flat-item-info">
                      <div class="flat-title-price">
                        <h5><a href="#">Masons de Villa </a></h5>
                        <span class="price">$52,350</span>
                      </div>
                      <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                    </div>
                  </div>
                </div>
                <!-- flat-item -->
                <div class="col-md-12 col-sm-6 col-xs-12">
                  <div class="flat-item">
                    <div class="flat-item-image">
                      <span class="for-sale">For Sale</span>
                      <a href="#"><img src="images/flat/2.jpg" alt=""></a>
                      <div class="flat-link">
                        <a href="#">More Details</a>
                      </div>
                      <ul class="flat-desc">
                        <li>
                          <img src="images/icons/4.png" alt="">
                          <span>450 sqft</span>
                        </li>
                        <li>
                          <img src="images/icons/5.png" alt="">
                          <span>5</span>
                        </li>
                        <li>
                          <img src="images/icons/6.png" alt="">
                          <span>3</span>
                        </li>
                      </ul>
                    </div>
                    <div class="flat-item-info">
                      <div class="flat-title-price">
                        <h5><a href="#">Masons de Villa </a></h5>
                        <span class="price">$52,350</span>
                      </div>
                      <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                    </div>
                  </div>
                </div>
                <!-- flat-item -->
                <div class="col-md-12 hidden-sm col-xs-12">
                  <div class="flat-item">
                    <div class="flat-item-image">
                      <span class="for-sale">For Sale</span>
                      <a href="#"><img src="images/flat/3.jpg" alt=""></a>
                      <div class="flat-link">
                        <a href="#">More Details</a>
                      </div>
                      <ul class="flat-desc">
                        <li>
                          <img src="images/icons/4.png" alt="">
                          <span>450 sqft</span>
                        </li>
                        <li>
                          <img src="images/icons/5.png" alt="">
                          <span>5</span>
                        </li>
                        <li>
                          <img src="images/icons/6.png" alt="">
                          <span>3</span>
                        </li>
                      </ul>
                    </div>
                    <div class="flat-item-info">
                      <div class="flat-title-price">
                        <h5><a href="#">Masons de Villa </a></h5>
                        <span class="price">$52,350</span>
                      </div>
                      <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
            <!-- widget-video -->
            <aside class="widget widget-video mb-0">
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
    <!-- FEATURED FLAT AREA END -->

    <!-- NEWSLETTER AREA START -->
    @include('partials._newsletter')
    <!-- NEWSLETTER AREA END -->
  </section>

@stop
