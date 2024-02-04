<?php
    require_once("includes/sections.php");
    require_once("includes/connection.php");

	$sorgu1 = $conn->prepare("SELECT * FROM partners WHERE status=1 AND id=?");
    $sorgu1->execute([$_GET["id"]]);
	$restoranBilgileri = $sorgu1->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FooYes - Quality delivery or takeaway food">
    <meta name="author" content="Ansonika">
    <title>Yubirs - Kaliteli teslimat veya paket yemek</title>

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
    <link href="assets/css/detail-page.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-bs-target="#secondary_nav" data-offset="75">
				
	<!-- Header -->
	<?php headerC(); ?>
	
	<main>

		<div class="hero_in detail_page background-image" data-background="url(assets/img/hero_general.jpg)">
			<div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
				
				<div class="container">
					<div class="main_info">
						<div class="row">
							<div class="col-xl-4 col-lg-5 col-md-6">
								<div class="head"><div class="score"><span>Sipariş Sayısı<em>350+</em></span><strong><?php echo $restoranBilgileri["score"]; ?></strong></div></div>
								<h1><?php echo $restoranBilgileri["businessName"]; ?></h1>
								<?php echo $restoranBilgileri["businessAddress"]; ?> - <a href="https://www.google.com/maps/dir//<?php echo $restoranBilgileri["businessAddress"]; ?>" target="blank">Haritada Gör</a>
							</div>
							<div class="col-xl-8 col-lg-7 col-md-6 position-relative">
								<div class="buttons clearfix">
									<span class="magnific-gallery">
										<a href="assets/img/detail_1.jpg" class="btn_hero" title="Photo title" data-effect="mfp-zoom-in"><i class="icon_image"></i>Resmi gör</a>
										<a href="assets/img/detail_2.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
										<a href="assets/img/detail_3.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
									</span>
									<a href="#0" class="btn_hero wishlist"><i class="icon_heart"></i>Favoriler</a>
								</div>
							</div>
						</div>
						<!-- /row -->
					</div>
					<!-- /main_info -->
				</div>
			</div>
		</div>
		<!--/hero_in-->

		<nav class="secondary_nav sticky_horizontal">
		    <div class="container">
		        <ul id="secondary_nav">
		            <li><a href="#section-1">Starters</a></li>
		            <li><a href="#section-2">Main Courses</a></li>
		            <li><a href="#section-3">Desserts</a></li>
		            <li><a href="#section-4">Drinks</a></li>
		            <li><a href="#section-5"><i class="icon_chat_alt"></i>Yorumlar</a></li>
		        </ul>
		    </div>
		    <span></span>
		</nav>
		<!-- /secondary_nav -->

		<div class="bg_gray">
		    <div class="container margin_detail">
		        <div class="row">
		            <div class="col-lg-8 list_menu">
		                <section id="section-1">
		                    <h4>Starters</h4>
		                    <div class="row">
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-1.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>1. Mexican Enchiladas</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$9.40</strong>
		                            </a>
		                        </div>
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-2.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>2. Fajitas</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$9.40</strong>
		                            </a>
		                        </div>
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-3.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>3. Royal Fajitas</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$9.40</strong>
		                            </a>
		                        </div>
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-4.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>4. Chicken Enchilada Wrap</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$9.40</strong>
		                            </a>
		                        </div>
		                    </div>
		                    <!-- /row -->
		                </section>
		                <!-- /section -->
		                <section id="section-2">
		                    <h4>Main Courses</h4>
		                    <div class="row">
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-5.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>5. Cheese Quesadilla</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$9.40</strong>
		                            </a>
		                        </div>
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-6.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>6. Chorizo & Cheese</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$9.40</strong>
		                            </a>
		                        </div>
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-7.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>7. Beef Taco</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$9.40</strong>
		                            </a>
		                        </div>
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-8.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>8. Minced Beef Double Layer</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$9.40</strong>
		                            </a>
		                        </div>
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-9.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>9. Piri Piri Chicken</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$9.40</strong>
		                            </a>
		                        </div>
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-10.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>10. Burrito Al Pastor</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$9.40</strong>
		                            </a>
		                        </div>
		                    </div>
		                    <!-- /row -->
		                </section>
		                <!-- /section -->
		                <section id="section-3">
		                    <h4>Desserts</h4>
		                    <div class="row">
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-5.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>5. Cheese Quesadilla</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$9.40</strong>
		                            </a>
		                        </div>
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-6.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>6. Chorizo & Cheese</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$9.40</strong>
		                            </a>
		                        </div>
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-7.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>7. Beef Taco</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$9.40</strong>
		                            </a>
		                        </div>
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-8.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>8. Minced Beef Double Layer</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$9.40</strong>
		                            </a>
		                        </div>
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-9.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>9. Piri Piri Chicken</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$9.40</strong>
		                            </a>
		                        </div>
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-10.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>10. Burrito Al Pastor</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$9.40</strong>
		                            </a>
		                        </div>
		                    </div>
		                    <!-- /row -->
		                </section>
		                <!-- /section -->
		                <section id="section-4">
		                    <h4>Drinks</h4>
		                    <div class="row">
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-5.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>11. Coca Cola</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$2.40</strong>
		                            </a>
		                        </div>
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-6.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>12. Corona Beer</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$9.40</strong>
		                            </a>
		                        </div>
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-7.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>13. Red Wine</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$19.40</strong>
		                            </a>
		                        </div>
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-8.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>14. White Wine</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$19.40</strong>
		                            </a>
		                        </div>
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-9.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>15. Mineral Water</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$1.40</strong>
		                            </a>
		                        </div>
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal-dialog">
		                                <figure><img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-10.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>16. Red Bull</h3>
		                                <p>Fuisset mentitum deleniti sit ea.</p>
		                                <strong>$3.40</strong>
		                            </a>
		                        </div>
		                    </div>
		                    <!-- /row -->
		                </section>
		                <!-- /section -->
		            </div>
		            <?php include("includes/basket.php"); ?>
		        </div>
		        <!-- /row -->
		    </div>
		    <!-- /container -->
		</div>
		<!-- /bg_gray -->

		<div class="container margin_30_20">
			<div class="row">
				<div class="col-lg-8 list_menu">
					<section id="section-5">
						<h4>Reviews</h4>
					    <div class="row add_bottom_30 d-flex align-items-center reviews">
					        <div class="col-md-3">
					            <div id="review_summary">
					                <strong><?php echo $restoranBilgileri["score"]; ?></strong>
					                <em>Mükemmel</em>
					                <small>4 incelemeye göre</small>
					            </div>
					        </div>
					        <div class="col-md-9 reviews_sum_details">
					            <div class="row">
					                <div class="col-md-6">
					                    <h6>Food Quality</h6>
					                    <div class="row">
					                        <div class="col-xl-10 col-lg-9 col-9">
					                            <div class="progress">
					                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
					                            </div>
					                        </div>
					                        <div class="col-xl-2 col-lg-3 col-3"><strong>9.0</strong></div>
					                    </div>
					                    <!-- /row -->
					                    <h6>Service</h6>
					                    <div class="row">
					                        <div class="col-xl-10 col-lg-9 col-9">
					                            <div class="progress">
					                                <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
					                            </div>
					                        </div>
					                        <div class="col-xl-2 col-lg-3 col-3"><strong>9.5</strong></div>
					                    </div>
					                    <!-- /row -->
					                </div>
					                <div class="col-md-6">
					                    <h6>Punctuality</h6>
					                    <div class="row">
					                        <div class="col-xl-10 col-lg-9 col-9">
					                            <div class="progress">
					                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
					                            </div>
					                        </div>
					                        <div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
					                    </div>
					                    <!-- /row -->
					                    <h6>Price</h6>
					                    <div class="row">
					                        <div class="col-xl-10 col-lg-9 col-9">
					                            <div class="progress">
					                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
					                            </div>
					                        </div>
					                        <div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
					                    </div>
					                    <!-- /row -->
					                </div>
					            </div>
					            <!-- /row -->
					        </div>
					    </div>
					    <!-- /row -->
					     <div id="reviews">
					        <div class="review_card">
					            <div class="row">
					                <div class="col-md-2 user_info">
					                    <figure><img src="assets/img/avatar4.jpg" alt=""></figure>
					                    <h5>Lukas</h5>
					                </div>
					                <div class="col-md-10 review_content">
					                    <div class="clearfix add_bottom_15">
					                        <span class="rating">8.5<small>/10</small> <strong>Rating average</strong></span>
					                        <em>Published 54 minutes ago</em>
					                    </div>
					                    <h4>"Great Location!!"</h4>
					                    <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
					                    <ul>
					                        <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
					                        <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
					                        <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
					                    </ul>
					                </div>
					            </div>
					            <!-- /row -->
					        </div>
					        <!-- /review_card -->
					        <div class="review_card">
					            <div class="row">
					                <div class="col-md-2 user_info">
					                    <figure><img src="assets/img/avatar1.jpg" alt=""></figure>
					                    <h5>Marika</h5>
					                </div>
					                <div class="col-md-10 review_content">
					                    <div class="clearfix add_bottom_15">
					                        <span class="rating">9.0<small>/10</small> <strong>Rating average</strong></span>
					                        <em>Published 11 Oct. 2019</em>
					                    </div>
					                    <h4>"Really great dinner!!"</h4>
					                    <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
					                    <ul>
					                        <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
					                        <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
					                        <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
					                    </ul>
					                </div>
					            </div>
					            <!-- /row -->
					            <div class="row reply">
					                <div class="col-md-2 user_info">
					                    <figure><img src="assets/img/avatar.jpg" alt=""></figure>
					                </div>
					                <div class="col-md-10">
					                    <div class="review_content">
					                        <strong>Reply from Foogra</strong>
					                        <em>Published 3 minutes ago</em>
					                        <p><br>Hi Monika,<br><br>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.<br><br>Thanks</p>
					                    </div>
					                </div>
					            </div>
					            <!-- /reply -->
					        </div>
					        <!-- /review_card -->
					    </div>
					    <!-- /reviews -->
					    <div class="text-end"><a href="leave-review.php" class="btn_1 gradient">İnceleme Gönder</a></div>
					</section>
					<!-- /section -->
				</div>
			</div>
		</div>
		<!-- /container -->

	</main>
	<!-- /main -->

	<footer>
		<div class="wave footer"></div>
		<div class="container margin_60_40 fix_mobile">

			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3 data-bs-target="#collapse_1">Quick Links</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_1">
						<ul>
							<li><a href="about.php">About us</a></li>
							<li><a href="submit-restaurant.php">Add your restaurant</a></li>
							<li><a href="help.php">Help</a></li>
							<li><a href="register.php">My account</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="contacts.php">Contacts</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-bs-target="#collapse_2">Categories</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_2">
						<ul>
							<li><a href="grid-listing-filterscol.php">Top Categories</a></li>
							<li><a href="grid-listing-filterscol-full-masonry.php">Best Rated</a></li>
							<li><a href="grid-listing-filterscol-full-width.php">Best Price</a></li>
							<li><a href="grid-listing-filterscol-full-masonry.php">Latest Submissions</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
						<h3 data-bs-target="#collapse_3">Contacts</h3>
					<div class="collapse dont-collapse-sm contacts" id="collapse_3">
						<ul>
							<li><i class="icon_house_alt"></i>97845 Baker st. 567<br>Los Angeles - US</li>
							<li><i class="icon_mobile"></i>+94 423-23-221</li>
							<li><i class="icon_mail_alt"></i><a href="#0">info@domain.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
						<h3 data-bs-target="#collapse_4">Keep in touch</h3>
					<div class="collapse dont-collapse-sm" id="collapse_4">
						<div id="newsletter">
							<div id="message-newsletter"></div>
							<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
								<div class="form-group">
									<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
									<button type="submit" id="submit-newsletter"><i class="arrow_carrot-right"></i></button>
								</div>
							</form>
						</div>
						<div class="follow_us">
							<h5>Follow Us</h5>
							<ul>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/img/twitter_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/img/facebook_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/img/instagram_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/img/youtube_icon.svg" alt="" class="lazy"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
			<div class="row add_bottom_25">
				<div class="col-lg-6">
					<ul class="footer-selector clearfix">
						<li>
							<div class="styled-select lang-selector">
								<select>
									<option value="English" selected>English</option>
									<option value="French">French</option>
									<option value="Spanish">Spanish</option>
									<option value="Russian">Russian</option>
								</select>
							</div>
						</li>
						<li>
							<div class="styled-select currency-selector">
								<select>
									<option value="US Dollars" selected>US Dollars</option>
									<option value="Euro">Euro</option>
								</select>
							</div>
						</li>
						<li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/img/cards_all.svg" alt="" width="230" height="35" class="lazy"></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<ul class="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
						<li><span>© FooYes</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->

	<div id="toTop" class="detail_page"></div><!-- Back to top button -->

	
<!-- Sign In Modal -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="modal_header">
        <h3>Sign In</h3>
    </div>
    <form>
        <div class="sign-in-wrapper">
            <a href="#0" class="social_bt facebook">Login with Facebook</a>
            <a href="#0" class="social_bt google">Login with Google</a>
            <div class="divider"><span>Or</span></div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" value="">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-start">
                    <label class="container_check">Remember me
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="float-end"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
            </div>
            <div class="text-center">
                <input type="submit" value="Log In" class="btn_1 full-width mb_5">
                Don’t have an account? <a href="register.php">Sign up</a>
            </div>
            <div id="forgot_pw">
                <div class="form-group">
                    <label>Please confirm login email below</label>
                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                    <i class="icon_mail_alt"></i>
                </div>
                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Modal -->

<!-- Modal item order -->
<div id="modal-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        <h3>Cheese Quesadilla</h3>
    </div>
    <div class="content">
        <h5>Quantity</h5>
        <div class="numbers-row">
            <input type="text" value="1" id="qty_1" class="qty2 form-control" name="quantity">
        </div>
        <h5>Size</h5>
        <ul class="clearfix">
            <li>
                <label class="container_radio">Medium<span>+ $3.30</span>
                    <input type="radio" value="option1" name="options_1">
                    <span class="checkmark"></span>
                </label>
            </li>
            <li>
                <label class="container_radio">Large<span>+ $5.30</span>
                    <input type="radio" value="option2" name="options_1">
                    <span class="checkmark"></span>
                </label>
            </li>
            <li>
                <label class="container_radio">Extra Large<span>+ $8.30</span>
                    <input type="radio" value="option3" name="options_1">
                    <span class="checkmark"></span>
                </label>
            </li>
        </ul>
        <h5>Extra Ingredients</h5>
        <ul class="clearfix">
            <li>
                <label class="container_check">Extra Tomato<span>+ $4.30</span>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
            </li>
            <li>
                <label class="container_check">Extra Peppers<span>+ $2.50</span>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
            </li>
            <li>
                <label class="container_check">Extra Ham<span>+ $4.30</span>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
            </li>
        </ul>
    </div>
    <div class="footer">
        <div class="row small-gutters">
            <div class="col-md-4">
                <button type="reset" class="btn_1 outline full-width mb-mobile">Cancel</button>
            </div>
            <div class="col-md-8">
                <button type="reset" class="btn_1 full-width">Add to cart</button>
            </div>
        </div>
        <!-- /Row -->
    </div>
    </div>
    <!-- /Modal item order -->
	
	<!-- COMMON SCRIPTS -->
    <script src="assets/js/common_scripts.min.js"></script>
    <script src="assets/js/common_func.js"></script>
    <script src="assets/validate.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="assets/js/sticky_sidebar.min.js"></script>
    <script src="assets/js/sticky-kit.min.js"></script>
    <script src="assets/js/specific_detail.js"></script>

</body>
</html>