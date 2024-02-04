<?php
    require_once("includes/sections.php");
    require_once("includes/connection.php");

	$sorgu1 = $conn->prepare("SELECT * FROM partners WHERE status=1 AND id=?");
    $sorgu1->execute([$_GET["id"]]);
	$restoranBilgileri = $sorgu1->fetch(PDO::FETCH_ASSOC);
	$sorgu2 = $conn->prepare("SELECT * FROM meal_p WHERE status=1 AND partnerId=?");
    $sorgu2->execute([$_GET["id"]]);
	$sorgu3 = $conn->prepare("SELECT * FROM reviews_c WHERE partnerId=?");
    $sorgu3->execute([$_GET["id"]]);
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
		<?php
			if(isset($_GET["sepeteeklendi"])){
				if(isset($_SESSION["sepet"])==null){
					$_SESSION["sepet"] = $_GET["sepeteeklendi"];
				}else{
					if(!strstr($_SESSION["sepet"], $_GET["sepeteeklendi"])){
						$_SESSION["sepet"] = $_SESSION["sepet"]."|".$_GET["sepeteeklendi"];
					}
				}
			}
		?>
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
								<h4>Kategori Adı</h4>
								<div class="row">
									<?php while($menuler = $sorgu2->fetch(PDO::FETCH_ASSOC)){
										$fiyat = $menuler["price"]-($menuler["price"]*($menuler["discount"]/100))."₺";
										$aciklama = trim(strip_tags($menuler["description"]));
										$yeniAciklama = substr($aciklama ,'0','50').".."; ?>
									<div class="col-md-6" id="<?php echo $menuler["id"]; ?>">
										<a class="menu_item" href="detail-restaurant.php?id=<?php echo $_GET["id"]; ?>&sepeteeklendi=<?php echo $menuler["id"]; ?>#<?php echo $menuler["id"]; ?>" style="text-decoration: none;">
										<!-- <a class="menu_item modal_dialog" href="#modal-dialog" title="<?php echo $menuler["description"]; ?>"> -->
											<?php if($menuler["discount"]!=0){ ?> <span class="ribbon off">%<?php echo $menuler["discount"]; ?></span> <?php } ?>
											<figure>
												<img src="assets/img/menu-thumb-placeholder.jpg" data-src="assets/img/menu-thumb-1.jpg" alt="thumb" class="lazy">
											</figure>
											<h3><?php echo $menuler["name"]; ?></h3>
											<p><?php echo $yeniAciklama; ?></p>
											<strong>
												<?php
													if($menuler["discount"]!=0){
														?>
														<del style="color:firebrick;"><?php echo $menuler["price"]."₺"; ?></del>
														<?php
														echo $fiyat;
													}else{
														echo $menuler["price"]."₺";
													}
												?>
											</strong>
										</a>
									</div>
									<?php } ?>
								</div>
							</section>
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
							<h4>Yorumlar</h4>
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
											<h6>Yemek Kalitesi</h6>
											<div class="row">
												<div class="col-xl-10 col-lg-9 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-xl-2 col-lg-3 col-3"><strong>9.0</strong></div>
											</div>
											<!-- /row -->
											<h6>Servis</h6>
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
											<h6>Bekleme Süresi</h6>
											<div class="row">
												<div class="col-xl-10 col-lg-9 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
											</div>
											<!-- /row -->
											<h6>Fiyat</h6>
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

							<?php 
							$toplamOrtalama = 0;
							$incelemeSayisi = 0;
							while($incelemeler = $sorgu3->fetch(PDO::FETCH_ASSOC)){
								$ortalama = ($incelemeler["pointFoodQuality"]+$incelemeler["pointService"]+$incelemeler["pointPunctuality"]+$incelemeler["pointPrice"])/4;
								$toplamOrtalama += $ortalama;
								$incelemeSayisi++; ?>
								<div class="review_card">
									<div class="row">
										<div class="col-md-2 user_info">
											<figure><img src="assets/img/yubirsLogo.png" alt="Yubirs"  style="width:90px; height:90px;"></figure>
											<h5>Kullanıcı Adı</h5>
										</div>
										<div class="col-md-10 review_content">
											<div class="clearfix add_bottom_15">
												<span class="rating"><?php echo $ortalama; ?><small>/10</small> <strong>inceleme ortalaması</strong></span>
												<em>54 dakika önce yayınlandı</em>
											</div>
											<!-- <h4>"Great Location!!"</h4> -->
											<p><?php echo $incelemeler["comment"]; ?></p>
											<!-- <ul>
												<li><a href="#0"><i class="icon_like"></i><span>Yararlı</span></a></li>
												<li><a href="#0"><i class="icon_dislike"></i><span>Yararlı Değil</span></a></li>
												<li><a href="#0"><i class="arrow_back"></i> <span>Yanıtla</span></a></li>
											</ul> -->
										</div>
									</div>
								</div>
							<?php } ?>

								<!-- /review_card -->
								<!-- <div class="review_card">
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
									</div> -->
									<!-- /row -->
									<!-- <div class="row reply">
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
									</div> -->
									<!-- /reply -->
								<!-- </div> -->
								<!-- /review_card -->
							</div>
							<!-- /reviews -->
							<!-- <form action="leave-review.php" method="POST">
								<input type="hidden" name="partnerId" value="< ?php echo $_GET["id"]; ?>">
								<div class="text-end"><button type="submit" class="btn_1 gradient">İnceleme Gönder</butoon></div>
							</form> -->
						</section>
						<!-- /section -->
					</div>
				</div>
			</div>
			<!-- /container -->

		</main>
		<!-- /main -->

		<!-- Footer -->
		<?php footerC(); ?>

		<div id="toTop" class="detail_page"></div><!-- Back to top button -->

		<!-- Sign In Modal -->
		<?php loginC(); ?>

		<!-- Modal item order -->
		<div id="modal-dialog" class="zoom-anim-dialog mfp-hide">
			<div class="small-dialog-header">
				<h3>Ürün Adı</h3>
			</div>
			<div class="content">
				<h5>Adet</h5>
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
						<button type="reset" class="btn_1 outline full-width mb-mobile">İptal</button>
					</div>
					<div class="col-md-8">
						<button type="reset" class="btn_1 full-width">Sepete Ekle</button>
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