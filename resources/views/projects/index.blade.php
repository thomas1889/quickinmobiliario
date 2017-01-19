@extends('layouts.app')

@section('content')
<!-- Start page content -->
<section id="page-content" class="page-wrapper">

	<!-- FEATURED FLAT AREA START -->
	<div class="featured-flat-area pt-115 pb-60">
		<div class="container">
			<h2>#  Proyectos encontrados</h2><br>
			<div class="row">
				<div class="col-md-8">
					<div class="featured-flat">
						<div class="row">
							<!-- flat-item -->
							<div class="col-sm-6 col-xs-12">
								<div class="flat-item">
									<div class="flat-item-image">
										<!-- <span class="for-sale">For Sale</span> -->
										<a href="properties-details.html"><img src="images/flat/1.jpg" alt=""></a>
										<div class="flat-link">
											<a href="properties-details.html">Ver</a>
										</div>
										<ul class="flat-desc">
											<li>
												<i class="fa fa-th-large" aria-hidden="true"></i>
												<span>150 m<sup>2</sup></span>
											</li>
											<li>
												<i class="fa fa-bed" aria-hidden="true"></i>
												<span>2</span>
											</li>
											<li>
												<i class="fa fa-bath" aria-hidden="true"></i>
												<span>1</span>
											</li>
										</ul>
									</div>
									<div class="flat-item-info">
										<div class="flat-title-price">
											<h5><a href="properties-details.html">Titulo del Proyecto</a></h5>
											<span class="price">Precio</span>
										</div>
									</div>
								</div>
							</div>
							<!-- flat-item -->
							<div class="col-sm-6 col-xs-12">
								<div class="flat-item">
									<div class="flat-item-image">
										<!-- <span class="for-sale">For Sale</span> -->
										<a href="properties-details.html"><img src="images/flat/1.jpg" alt=""></a>
										<div class="flat-link">
											<a href="properties-details.html">Ver</a>
										</div>
										<ul class="flat-desc">
											<li>
												<i class="fa fa-th-large" aria-hidden="true"></i>
												<span>150 m<sup>2</sup></span>
											</li>
											<li>
												<i class="fa fa-bed" aria-hidden="true"></i>
												<span>2</span>
											</li>
											<li>
												<i class="fa fa-bath" aria-hidden="true"></i>
												<span>1</span>
											</li>
										</ul>
									</div>
									<div class="flat-item-info">
										<div class="flat-title-price">
											<h5><a href="properties-details.html">Titulo del Proyecto</a></h5>
											<span class="price">Precio</span>
										</div>
									</div>
								</div>
							</div>
							<!-- flat-item -->

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


				</div>
			</div>
		</div>
	</div>
	<!-- FEATURED FLAT AREA END -->


	@stop
