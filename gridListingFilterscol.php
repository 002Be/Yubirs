<?php
    require_once("includes/sections.php");
    require_once("includes/connection.php");
	require_once("assets/languages/tr_TR.php"); //Fonksiyon olarak eklenecek
	
	if(isset($_GET["ara"])){
		$ara = $_GET["ara"];
		$sorgu1 = $conn->prepare("SELECT * FROM partners WHERE status=1 and businessName LIKE '%$ara%'");
		$sorgu1->execute();
	}else{
		$sorgu1 = $conn->prepare("SELECT * FROM partners WHERE status=1");
		$sorgu1->execute();
	}

	// if(isset($_GET["siparis"])!="tumu"){
	// 	$siparis = "";
	// }else{$siparis = "";}
	
	// if(isset($_GET["siralama"])!="tumu"){
	// 	$siralama = "";
	// }else{$siralama = "";}
	
	// if(isset($_GET["kategori"])!="tumu"){
	// 	$kategori = "";
	// }else{$kategori = "";}
	
	// if(isset($_GET["degerlendirme"])!="tumu"){
	// 	$degerlendirme = "";
	// }else{$degerlendirme = "";}


	$sorgu2 = $conn->prepare("SELECT * FROM meal_p WHERE status=1");
	$sorgu2->execute();
	$sorgu3 = $conn->prepare("SELECT * FROM categorie_p");
	$sorgu3->execute();
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
    <link href="assets/css/listing.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">

</head>

<body>
	<!-- Header -->
	<?php headerC(); ?>
	
	<main>
		<form action="gridListingFilterscol.php" method="GET">
			<div class="page_header element_to_stick">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 col-lg-7 col-md-7 d-none d-md-block">
							<h1>145 restaurants in Convent Street 2983</h1>
							<a href="#0">Adresini değiştir</a>
						</div>
						<div class="col-xl-4 col-lg-5 col-md-5">
							<div class="search_bar_list">
								<input type="text" name="ara" class="form-control" placeholder="Restoran ara...">
								<button type="submit"><i class="icon_search"></i></button>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
		</form>
		<!-- /page_header -->

		<form action="gridListingFilterscol.php" method="GET">
			<div class="container margin_30_20">
				<div class="row">
					<aside class="col-lg-3" id="sidebar_fixed">
						<div class="type_delivery">
							<ul class="clearfix">
								<li>
									<label class="container_radio">Tümü
										<input type="radio" name="siparis" value="tumu" checked>
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Eve Sipariş
										<input type="radio" name="siparis" value="eve">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Gel Al
										<input type="radio" name="siparis" value="gelAl">
										<span class="checkmark"></span>
									</label>
								</li>
							</ul>
						</div>
						<!-- /type_delivery -->
					
						<a href="#0" class="open_filters btn_filters"><i class="icon_adjust-vert"></i><span>Filters</span></a>
					
						<div class="filter_col">
							<div class="inner_bt clearfix">Filters<a href="#" class="open_filters"><i class="icon_close"></i></a></div>
							<div class="filter_type">
								<h4><a href="#filter_1" data-bs-toggle="collapse" class="opened">Sıralama</a></h4>
								<div class="collapse show" id="filter_1">
									<ul>
										<li>
											<label class="container_radio">Tüm Restoranlar
												<input type="radio" name="siralama" value="tumu" checked>
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_radio">En çok oy alanlar
												<input type="radio" name="siralama" value="oy">
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_radio">Fiyat: düşükten yükseğe
												<input type="radio" name="siralama" value="dusuk">
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_radio">Fiyat: yüksekten düşüğe
												<input type="radio" name="siralama" value="yuksek">
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_radio">İndirimliler
												<input type="radio" name="siralama" value="indirim">
												<span class="checkmark"></span>
											</label>
										</li>
									</ul>
								</div>
							</div>
							<!-- /filter_type -->
							<div class="filter_type">
								<h4><a href="#filter_2" data-bs-toggle="collapse" class="closed">Kategoriler</a></h4>
								<div class="collapse" id="filter_2">
									<ul>
										<li>
											<label class="container_check">Tümü<small>12</small>
											<input type="checkbox" name="kategori" value="tumu" checked>
											<span class="checkmark"></span>
											</label>
										</li> 
										<?php
										while($kategoriler = $sorgu3->fetch(PDO::FETCH_ASSOC)){ ?>
										<li><!-- 12 yazan yerde o kategoriden kaç adet ürün bulunduğunu yazacak -->
										<label class="container_check"><?php echo $kategoriler["name"]; ?> <small>12</small>
										<input type="checkbox" name="kategori" value="<?php echo $kategoriler["id"]; ?>">
										<span class="checkmark"></span>
										</label>
										</li> <?php } ?>
											
									</ul>
								</div>
							</div>
							<!-- /filter_type -->
							<!-- <div class="filter_type">
								<h4><a href="#filter_3" data-bs-toggle="collapse" class="closed">Distance</a></h4>
								<div class="collapse" id="filter_3">
									<div class="distance">Radius around selected destination <span></span> km</div>
									<div class="add_bottom_25"><input type="range" min="10" max="50" step="5" value="20" data-orientation="horizontal"></div>
								</div>
							</div> -->
							<!-- /filter_type -->
							<div class="filter_type last">
								<h4><a href="#filter_4" data-bs-toggle="collapse" class="closed">Değerlendirme</a></h4>
								<div class="collapse" id="filter_4">
									<ul>
										<li>
											<label class="container_check">Tümü<small>78</small>
												<input type="checkbox" name="degerlendirme" value="tumu" checked>
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">Mükemmel 9+ <small>06</small>
												<input type="checkbox" name="degerlendirme" value="9">
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">Çok İyi 8+ <small>12</small>
												<input type="checkbox" name="degerlendirme" value="8">
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">Güzel 7+ <small>17</small>
												<input type="checkbox" name="degerlendirme" value="7">
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">Hoş 6+ <small>43</small>
												<input type="checkbox" name="degerlendirme" value="6">
												<span class="checkmark"></span>
											</label>
										</li>
									</ul>
								</div>
							</div>
							<!-- /filter_type -->
							<p><button type="submit" class="btn_1 outline full-width">Filtrele</button></p>
						</div>
					</aside>

					<div class="col-lg-9">
						<div class="row">
							<div class="col-12">
								<h2 class="title_small">Popüler Kategoriler</h2>
								<div class="owl-carousel owl-theme categories_carousel_in listing"> <?php
								while($kategoriler = $sorgu3->fetch(PDO::FETCH_ASSOC)){ ?>
									<div class="item">
										<figure>
											<img src="assets/img/cat_listing_placeholder.png" data-src="assets/img/cat_listing_1.jpg" alt="" class="owl-lazy"></a>
											<a href="#0"><h3><?php echo $kategoriler["name"]; ?></h3></a>
										</figure>
									</div> <?php } ?>
								</div>
								<!-- /carousel -->
							</div>
						</div>
						<!-- /row -->

						<div class="promo">
							<h3>İlk 3 Siparişinize Özel %10 İndirim Fırsatı!</h3>
							<p>Sadece telefon ve e-postasını onaylatmış ve bilgilerinin eksiksiz doldurmuş kullanıcılar için geçerlidir.</p>
							<i class="icon-food_icon_delivery"></i>
						</div>
						<!-- /promo -->
						
						<div class="row">
							<div class="col-12"><h2 class="title_small">Restoranlar</h2></div> <?php
							while($restoranlar = $sorgu1->fetch(PDO::FETCH_ASSOC)){ 
								$konum = trim(strip_tags($restoranlar["businessAddress"]));
								$yeniKonum = substr($konum ,'0','40')."..";
								?>
							<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
								<div class="strip">
									<figure>
									<!-- < ?php
									if($restoranlar["discount"] > 0){ ?>
										<span class="ribbon off">%< ?php echo $restoranlar["discount"]; ?></span> < ?php
									} ?> -->
									<?php
									if($restoranlar["imageId"]!="Yok"){ ?>
										<img src="assets/partnerBusinessImg/<?php echo $restoranlar["imageId"]; ?>" class="img-fluid lazy" alt="<?php echo $restoranlar["businessName"]; ?>"> <?php
									}else{ ?>
										<img src="assets/img/lazy-placeholder.png" data-src="assets/img/location_1.jpg" class="img-fluid lazy" alt="<?php echo $restoranlar["businessName"]; ?>"> <?php
									} ?>
									<!-- <img src="assets/img/lazy-placeholder.png" data-src="assets/img/location_1.jpg" class="img-fluid lazy" alt=""> -->
										<a href="detailRestaurant.php?id=<?php echo $restoranlar["id"]; ?>" class="strip_info">
											<small>Pizza</small>
											<div class="item_title">
												<h3><?php echo $restoranlar["businessName"]; ?></h3>
												<small><?php echo $yeniKonum; ?></small>
											</div>
										</a>
									</figure>
									<ul> <?php
										if($restoranlar["delivery"] == 1){
											$durum1 = "yes";
										}else{
											$durum1 = "no";
										}

										if($restoranlar["minAmount"]==0){
											$durum2 = "Ücretsiz";
										}else{
											$durum2 = $restoranlar["minAmount"]."TL";
										} ?>

										<li><span class="take yes"><?php echo $durum2; ?></span> <span class="deliv <?php echo $durum1; ?>">Eve Sipariş</span></li>
										<li>
											<div class="score"><strong><?php echo $restoranlar["score"]; ?></strong></div>
										</li>
									</ul>
								</div>
							</div> <?php } ?>
						</div>
						<!-- /row -->
						<!-- <div class="pagination_fg">
							<a href="#">&laquo;</a>
							<a href="#" class="active">1</a>
							<a href="#">2</a>
							<a href="#">3</a>
							<a href="#">4</a>
							<a href="#">5</a>
							<a href="#">&raquo;</a>
						</div> -->
					</div>
					<!-- /col -->
				</div>		
			</div>
		</form>
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

</body>
</html>