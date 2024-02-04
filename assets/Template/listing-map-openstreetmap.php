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

    <style>
        html,
        body {
            height: 100%;
        }
    </style>

</head>

<body>
	<!-- Header -->
	<?php headerC(); ?>
	
	<main>
	    <div class="container-fluid full-height">
	        <div class="row row-height">
	            <div class="content-left order-md-last order-sm-last order-last map_view">
	                <div class="page_header">
	                    <div class="row">
	                        <div class="col-xl-12 d-none d-md-block">
	                            <h1>145 restaurants in Convent Street 2983</h1>
	                        </div>
	                        <div class="col-xl-12">
	                            <div class="search_bar_list">
									<input type="text" class="form-control" placeholder="Dishes, restaurants or cuisines">
									<button type="submit"><i class="icon_search"></i></button>
								</div>
	                        </div>
	                    </div>
	                    <!-- /row -->
	                </div>
	                <!-- /page_header -->

	                <div class="filters_full clearfix">
	                    <div class="container">
	                        <div class="sort_select">
	                            <select name="sort" id="sort">
	                                <option value="popularity" selected="selected">Sort by Top Rated</option>
	                                <option value="rating">Sort by Reccomended</option>
	                                <option value="date">Sort by Price: low to high</option>
	                                <option value="price">Sort by Up to 15% off</option>
	                                <option value="price-desc">Distance</option>
	                            </select>
	                        </div>
	                        <a href="#collapseFilters" data-bs-toggle="collapse" class="btn_filters"><i class="icon_adjust-vert"></i><span>Filters</span></a>
	                    </div>
	                </div>
	                <!-- /filters_full -->

	                <div class="collapse filters_2" id="collapseFilters">
	                	<div class="type_delivery">
						<ul class="clearfix">
						    <li>
						        <label class="container_radio">Delivery
						            <input type="radio" name="type_d" checked="checked">
						            <span class="checkmark"></span>
						        </label>
						    </li>
						    <li>
						        <label class="container_radio">Take away
						            <input type="radio" name="type_d">
						            <span class="checkmark"></span>
						        </label>
						    </li>
						</ul>
					</div>
					<!-- /type_delivery -->
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
						<div class="filter_type">
						    <h6>Distance</h6>
						    <div class="distance"> Radius around selected destination <span></span> km</div>
						    <div class="add_bottom_25"><input type="range" min="10" max="100" step="10" value="30" data-orientation="horizontal"></div>
						</div>
					</div>
					<!-- /filters -->
	                
	                <div class="row">
	                    <div class="col-lg-12 col-sm-6">
	                        <div class="strip">
	                            <figure>
	                                <span class="ribbon off">-30%</span>
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
	                                <li><a href="#0" onclick="onHtmlClick('Marker',1)" class="address">View on Map</a></li>
	                                <li>
	                                    <div class="score"><strong>8.9</strong></div>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <!-- /strip grid -->
	                    <div class="col-lg-12 col-sm-6">
	                        <div class="strip">
	                            <figure>
	                                <span class="ribbon off">-40%</span>
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
	                                <li><a href="#0" onclick="onHtmlClick('Marker',2)" class="address">View on Map</a></li>
	                                <li>
	                                    <div class="score"><strong>9.5</strong></div>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <!-- /strip grid -->
	                    <div class="col-lg-12 col-sm-6">
	                        <div class="strip">
	                            <figure>
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
	                                <li><a href="#0" onclick="onHtmlClick('Marker',3)" class="address">View on Map</a></li>
	                                <li>
	                                    <div class="score"><strong>7.5</strong></div>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <!-- /strip grid -->
	                    <div class="col-lg-12 col-sm-6">
	                        <div class="strip">
	                            <figure>
	                                <span class="ribbon off">-25%</span>
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
	                                <li><a href="#0" onclick="onHtmlClick('Marker',4)" class="address">View on Map</a></li>
	                                <li>
	                                    <div class="score"><strong>9.5</strong></div>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <!-- /strip grid -->
	                    <div class="col-lg-12 col-sm-6">
	                        <div class="strip">
	                            <figure>
	                                <span class="ribbon off">-30%</span>
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
	                                <li><a href="#0" onclick="onHtmlClick('Marker',5)" class="address">View on Map</a></li>
	                                <li>
	                                    <div class="score"><strong>7.0</strong></div>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <!-- /strip grid -->
	                    <div class="col-lg-12 col-sm-6">
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
	                                <li><a href="#0" onclick="onHtmlClick('Marker',6)" class="address">View on Map</a></li>
	                                <li>
	                                    <div class="score"><strong>8.9</strong></div>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <!-- /strip grid -->
	                    <div class="col-lg-12 col-sm-6">
	                        <div class="strip">
	                            <figure>
	                                <span class="ribbon off">-30%</span>
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
	                                <li><a href="#0" onclick="onHtmlClick('Marker',7)" class="address">View on Map</a></li>
	                                <li>
	                                    <div class="score"><strong>8.9</strong></div>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <!-- /strip grid -->
	                    <div class="col-lg-12 col-sm-6">
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
	                                <li><a href="#0" onclick="onHtmlClick('Marker',8)" class="address">View on Map</a></li>
	                                <li>
	                                    <div class="score"><strong>8.9</strong></div>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <!-- /strip grid -->
	                    <div class="col-lg-12 col-sm-6">
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
	                                <li><a href="#0" onclick="onHtmlClick('Marker',9)" class="address">View on Map</a></li>
	                                <li>
	                                    <div class="score"><strong>8.9</strong></div>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <!-- /strip grid -->
	                    <div class="col-lg-12 col-sm-6">
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
	                                <li><a href="#0" onclick="onHtmlClick('Marker',10)" class="address">View on Map</a></li>
	                                <li>
	                                    <div class="score"><strong>8.9</strong></div>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <!-- /strip grid -->
	                </div>
	                <!-- /row -->
	                <p class="text-center"><a href="#0" class="btn_1"><strong>Load more</strong></a></p>
	            </div>
	            <!-- /content-left-->
	            <div class="col col-12 map-right">
	                <div id="map" class="map_right_listing"></div>
	                <!-- map-->
	            </div>
	            <!-- /map-right-->
	        </div>
	        <!-- /row-->
	    </div>
	    <!-- /container-fluid -->
	</main>
	<!--/main-->
	
	<!-- Sign In Modal -->
	<?php loginC(); ?>
	
	<!-- COMMON SCRIPTS -->
    <script src="assets/js/common_scripts.min.js"></script>
    <script src="assets/js/common_func.js"></script>
    <script src="assets/validate.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="assets/js/sticky_sidebar.min.js"></script>
    <script src="assets/js/specific_listing.js"></script>

    <!-- Map LeafLet + Mapbox-->
	<script src="assets/js/leaflet_map/leaflet.min.js"></script>
    <script src="assets/js/leaflet_map/leaflet_markercluster.min.js"></script>
    <script src="assets/js/leaflet_map/leaflet_markers.js"></script>
    <script src="assets/js/leaflet_map/leaflet_half_screen_func.js"></script>

</body>
</html>