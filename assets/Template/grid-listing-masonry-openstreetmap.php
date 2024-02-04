<?php
    require_once("includes/sections.php");
    require_once("includes/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FooYes - Quality delivery or takeaway food">
    <meta name="author" content="Ansonika">
    <title>FooYes - Quality delivery or takeaway food</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="assets/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="assets/css/listing.css" rel="stylesheet">
    <link href="assets/css/leaflet.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">

</head>

<body>
	<!-- Header -->
	<?php headerC(); ?>
	
	<main>
	    <div class="page_header element_to_stick">
	        <div class="container">
	            <div class="row">
	                <div class="col-xl-8 col-lg-7 col-md-7 d-none d-md-block">
	                    <h1>145 restaurants in Convent Street 2983</h1>
	                    <a href="#0">Change address</a>
	                </div>
	                <div class="col-xl-4 col-lg-5 col-md-5">
	                    <div class="search_bar_list">
	                        <input type="text" class="form-control" placeholder="Dishes, restaurants or cuisines">
	                        <button type="submit"><i class="icon_search"></i></button>
	                    </div>
	                </div>
	            </div>
	            <!-- /row -->
	        </div>
	    </div>
	    <!-- /page_header -->
	    <div class="filters_full clearfix add_bottom_15">
	        <div class="container">
	            <div class="type_delivery">
						<ul class="clearfix">
							<li>
						        <label class="container_radio">All
						            <input type="radio" name="type_d" value="all" id="all" checked data-filter="*" class="selected">
						            <span class="checkmark"></span>
						        </label>
						    </li>
						    <li>
						        <label class="container_radio">Delivery
						            <input type="radio" name="type_d" value="delivery" id="delivery" data-filter=".delivery">
						            <span class="checkmark"></span>
						        </label>
						    </li>
						    <li>
						        <label class="container_radio">Takeaway
						            <input type="radio" name="type_d" value="takeway" id="takeaway" data-filter=".takeaway">
						            <span class="checkmark"></span>
						        </label>
						    </li>
						</ul>
				</div>
				<!-- /type_delivery -->
	            <a class="btn_map mobile btn_filters" data-bs-toggle="collapse" href="#collapseMap"><i class="icon_pin_alt"></i></a>
	            <a href="#collapseFilters" data-bs-toggle="collapse" class="btn_filters"><i class="icon_adjust-vert"></i><span>Filters</span></a>
	        </div>
	    </div>
	    <!-- /filters_full -->
	    <div class="collapse" id="collapseMap">
			<div id="map" class="map"></div>
		</div>
		<!-- /Map -->

	    <div class="collapse filters_2" id="collapseFilters">
	        <div class="container margin_30_20">
	            <div class="row">
	                <div class="col-md-4">
	                    <div class="filter_type">
	                        <h6>Categories</h6>
	                        <ul>
	                            <li>
	                                <label class="container_check">Pizza - Italian <small>12</small>
	                                    <input type="checkbox">
	                                    <span class="checkmark"></span>
	                                </label>
	                            </li>
	                            <li>
	                                <label class="container_check">Japanese - Sushi <small>24</small>
	                                    <input type="checkbox">
	                                    <span class="checkmark"></span>
	                                </label>
	                            </li>
	                            <li>
	                                <label class="container_check">Burghers <small>23</small>
	                                    <input type="checkbox">
	                                    <span class="checkmark"></span>
	                                </label>
	                            </li>
	                            <li>
	                                <label class="container_check">Vegetarian <small>11</small>
	                                    <input type="checkbox">
	                                    <span class="checkmark"></span>
	                                </label>
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	                <div class="col-md-4">
	                    <div class="filter_type">
	                        <h6>Rating</h6>
	                        <ul>
	                            <li>
	                                <label class="container_check">Superb 9+ <small>06</small>
	                                    <input type="checkbox">
	                                    <span class="checkmark"></span>
	                                </label>
	                            </li>
	                            <li>
	                                <label class="container_check">Very Good 8+ <small>12</small>
	                                    <input type="checkbox">
	                                    <span class="checkmark"></span>
	                                </label>
	                            </li>
	                            <li>
	                                <label class="container_check">Good 7+ <small>17</small>
	                                    <input type="checkbox">
	                                    <span class="checkmark"></span>
	                                </label>
	                            </li>
	                            <li>
	                                <label class="container_check">Pleasant 6+ <small>43</small>
	                                    <input type="checkbox">
	                                    <span class="checkmark"></span>
	                                </label>
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	                <div class="col-md-4">
	                    <div class="filter_type">
	                        <h6>Distance</h6>
	                        <div class="distance"> Radius around selected destination <span></span> km</div>
	                        <div class="mb-3
	                        "><input type="range" min="10" max="100" step="10" value="30" data-orientation="horizontal"></div>
	                    </div>
	                </div>
	            </div>
	            <!-- /row -->
	        </div>
	    </div>
	    <!-- /filters -->
	    <div class="container margin_30_20">

	        <div class="promo mb_30">
	            <h3>Free Delivery for your first 14 days!</h3>
	            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
	            <i class="icon-food_icon_delivery"></i>
	        </div>
	        <!-- /promo -->

	        <div class="row isotope-wrapper">
	            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item delivery">
	                <div class="strip">
	                    <figure>
	                        <span class="ribbon off">15% off</span>
	                        <img src="assets/img/lazy-placeholder.png" data-src="assets/img/location_1.jpg" class="img-fluid lazy" alt="">
	                        <a href="detail-restaurant.php" class="strip_info">
	                            <small>Pizza</small>
	                            <div class="item_title">
	                                <h3>Da Alfredo</h3>
	                                <small>27 Old Gloucester St</small>
	                            </div>
	                        </a>
	                    </figure>
	                    <ul>
	                        <li><span class="take yes">Takeaway</span> <span class="deliv yes">Delivery</span></li>
	                        <li>
	                            <div class="score"><strong>8.9</strong></div>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <!-- /strip grid -->
	            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item delivery">
	                <div class="strip">
	                    <figure>
	                        <img src="assets/img/lazy-placeholder.png" data-src="assets/img/location_2.jpg" class="img-fluid lazy" alt="">
	                        <a href="detail-restaurant.php" class="strip_info">
	                            <small>Burghers</small>
	                            <div class="item_title">
	                                <h3>Best Burghers</h3>
	                                <small>27 Old Gloucester St</small>
	                            </div>
	                        </a>
	                    </figure>
	                    <ul>
	                        <li><span class="take no">Takeaway</span> <span class="deliv yes">Delivery</span></li>
	                        <li>
	                            <div class="score"><strong>9.5</strong></div>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <!-- /strip grid -->
	            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item takeaway">
	                <div class="strip">
	                    <figure>
	                        <span class="ribbon off">15% off</span>
	                        <img src="assets/img/lazy-placeholder.png" data-src="assets/img/location_3.jpg" class="img-fluid lazy" alt="">
	                        <a href="detail-restaurant.php" class="strip_info">
	                            <small>Vegetarian</small>
	                            <div class="item_title">
	                                <h3>Vego Life</h3>
	                                <small>27 Old Gloucester St</small>
	                            </div>
	                        </a>
	                    </figure>
	                    <ul>
	                        <li><span class="take yes">Takeaway</span> <span class="deliv no">Delivery</span></li>
	                        <li>
	                            <div class="score"><strong>7.5</strong></div>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <!-- /strip grid -->
	            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item takeaway">
	                <div class="strip">
	                    <figure>
	                        <img src="assets/img/lazy-placeholder.png" data-src="assets/img/location_4.jpg" class="img-fluid lazy" alt="">
	                        <a href="detail-restaurant.php" class="strip_info">
	                            <small>Japanese</small>
	                            <div class="item_title">
	                                <h3>Sushi Temple</h3>
	                                <small>27 Old Gloucester St</small>
	                            </div>
	                        </a>
	                    </figure>
	                    <ul>
	                        <li><span class="take">Takeaway</span> <span class="deliv no">Delivery</span></li>
	                        <li>
	                            <div class="score"><strong>9.5</strong></div>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <!-- /strip grid -->
	            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item takeaway">
	                <div class="strip">
	                    <figure>
	                        <img src="assets/img/lazy-placeholder.png" data-src="assets/img/location_5.jpg" class="img-fluid lazy" alt="">
	                        <a href="detail-restaurant.php" class="strip_info">
	                            <small>Pizza</small>
	                            <div class="item_title">
	                                <h3>Auto Pizza</h3>
	                                <small>27 Old Gloucester St</small>
	                            </div>
	                        </a>
	                    </figure>
	                    <ul>
	                        <li><span class="take yes">Takeaway</span> <span class="deliv no">Delivery</span></li>
	                        <li>
	                            <div class="score"><strong>7.0</strong></div>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <!-- /strip grid -->
	            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item delivery">
	                <div class="strip">
	                    <figure>
	                        <img src="assets/img/lazy-placeholder.png" data-src="assets/img/location_6.jpg" class="img-fluid lazy" alt="">
	                        <a href="detail-restaurant.php" class="strip_info">
	                            <small>Burghers</small>
	                            <div class="item_title">
	                                <h3>Alliance</h3>
	                                <small>27 Old Gloucester St</small>
	                            </div>
	                        </a>
	                    </figure>
	                    <ul>
	                        <li><span class="take no">Takeaway</span> <span class="deliv yes">Delivery</span></li>
	                        <li>
	                            <div class="score"><strong>8.9</strong></div>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <!-- /strip grid -->
	            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item delivery">
	                <div class="strip">
	                    <figure>
	                        <img src="assets/img/lazy-placeholder.png" data-src="assets/img/location_7.jpg" class="img-fluid lazy" alt="">
	                        <a href="detail-restaurant.php" class="strip_info">
	                            <small>Chinese</small>
	                            <div class="item_title">
	                                <h3>Alliance</h3>
	                                <small>27 Old Gloucester St</small>
	                            </div>
	                        </a>
	                    </figure>
	                    <ul>
	                        <li><span class="take no">Takeaway</span> <span class="deliv yes">Delivery</span></li>
	                        <li>
	                            <div class="score"><strong>8.9</strong></div>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <!-- /strip grid -->
	            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item takeaway">
	                <div class="strip">
	                    <figure>
	                        <img src="assets/img/lazy-placeholder.png" data-src="assets/img/location_8.jpg" class="img-fluid lazy" alt="">
	                        <a href="detail-restaurant.php" class="strip_info">
	                            <small>Sushi</small>
	                            <div class="item_title">
	                                <h3>Dragon Tower</h3>
	                                <small>27 Old Gloucester St</small>
	                            </div>
	                        </a>
	                    </figure>
	                    <ul>
	                        <li><span class="take yes">Takeaway</span> <span class="deliv no">Delivery</span></li>
	                        <li>
	                            <div class="score"><strong>8.9</strong></div>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <!-- /strip grid -->
	            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item takeaway delivery">
	                <div class="strip">
	                    <figure>
	                        <img src="assets/img/lazy-placeholder.png" data-src="assets/img/location_9.jpg" class="img-fluid lazy" alt="">
	                        <a href="detail-restaurant.php" class="strip_info">
	                            <small>Mexican</small>
	                            <div class="item_title">
	                                <h3>El Paso Tacos</h3>
	                                <small>27 Old Gloucester St</small>
	                            </div>
	                        </a>
	                    </figure>
	                    <ul>
	                        <li><span class="take yes">Takeaway</span> <span class="deliv yes">Delivery</span></li>
	                        <li>
	                            <div class="score"><strong>8.9</strong></div>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <!-- /strip grid -->
	            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item latest">
	                <div class="strip">
	                    <figure>
	                        <img src="assets/img/lazy-placeholder.png" data-src="assets/img/location_10.jpg" class="img-fluid lazy" alt="">
	                        <a href="detail-restaurant.php" class="strip_info">
	                            <small>Bakery</small>
	                            <div class="item_title">
	                                <h3>Monnalisa</h3>
	                                <small>27 Old Gloucester St</small>
	                            </div>
	                        </a>
	                    </figure>
	                    <ul>
	                        <li><span class="take yes">Takeaway</span> <span class="deliv yes">Delivery</span></li>
	                        <li>
	                            <div class="score"><strong>8.9</strong></div>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <!-- /strip grid -->
	            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item delivery">
				    <div class="strip">
				        <figure>
				            <img src="assets/img/lazy-placeholder.png" data-src="assets/img/location_12.jpg" class="img-fluid lazy" alt="">
				            <a href="detail-restaurant.php" class="strip_info">
				                <small>Chinese</small>
				                <div class="item_title">
				                    <h3>Pechino Express</h3>
				                    <small>27 Old Gloucester St</small>
				                </div>
				            </a>
				        </figure>
				        <ul>
				            <li><span class="take no">Takeaway</span> <span class="deliv yes">Delivery</span></li>
				            <li>
				                <div class="score"><strong>8.9</strong></div>
				            </li>
				        </ul>
				    </div>
				</div>
				<!-- /strip grid -->
	            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item delivery takeaway">
	                <div class="strip">
	                    <figure>
	                        <img src="assets/img/lazy-placeholder.png" data-src="assets/img/location_11.jpg" class="img-fluid lazy" alt="">
	                        <a href="detail-restaurant.php" class="strip_info">
	                            <small>Mexican</small>
	                            <div class="item_title">
	                                <h3>Guachamole</h3>
	                                <small>135 Newtownards Road</small>
	                            </div>
	                        </a>
	                    </figure>
	                    <ul>
	                        <li><span class="take yes">Takeaway</span> <span class="deliv yes">Delivery</span></li>
	                        <li>
	                            <div class="score"><strong>8.9</strong></div>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <!-- /strip grid -->
	        </div>
	        <!-- /strip row -->
	        <div class="pagination_fg">
	            <a href="#">&laquo;</a>
	            <a href="#" class="active">1</a>
	            <a href="#">2</a>
	            <a href="#">3</a>
	            <a href="#">4</a>
	            <a href="#">5</a>
	            <a href="#">&raquo;</a>
	        </div>
	    </div>
	    <!-- /container -->
	</main>
	<!-- /main -->

	<!-- Footer -->
    <?php footerC(); ?>

    <!-- Back to top button -->
	<div id="toTop"></div>
	
	<!-- Sign In Modal -->
	<?php loginC(); ?>
	
	<!-- COMMON SCRIPTS -->
    <script src="assets/js/common_scripts.min.js"></script>
    <script src="assets/js/common_func.js"></script>
    <script src="assets/validate.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="assets/js/sticky_sidebar.min.js"></script>
    <script src="assets/js/specific_listing.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script>
		$(window).on("load",function(){
		  var $container = $('.isotope-wrapper');
		  $container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry' });
		});
		$('.type_delivery').on( 'click', 'input', 'change', function(){
		  var selector = $(this).attr('data-filter');
		  $('.isotope-wrapper').isotope({ filter: selector });
		});
	</script>

    <!-- Map LeafLet + Mapbox-->
	<script src="assets/js/leaflet_map/leaflet.min.js"></script>
    <script src="assets/js/leaflet_map/leaflet_markercluster.min.js"></script>
    <script src="assets/js/leaflet_map/leaflet_markers.js"></script>
    <script src="assets/js/leaflet_map/leaflet_func.js"></script>

</body>
</html>