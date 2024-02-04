<?php
    require_once("includes/sections.php");
    require_once("includes/connection.php");
	require_once("assets/languages/tr_TR.php"); //Fonksiyon olarak eklenecek
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Yubirs">
    <meta name="author" content="Ansonika">
    <title>Yubirs</title>

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
    <link href="assets/css/submit.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body>
	<!-- Header -->
	<?php headerC(); ?>
	
	<main>
		<div class="hero_single inner_pages background-image" data-background="url(assets/img/indexOffice.jpg)">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<h1>Yeni Müşteriler Çekin</h1>
							<p>Pazarlama, Tanıtım, Verimli Sipariş ve Daha Fazlası</p>
							<a href="partner/register.php" class="btn_1 gradient btn_scroll">Partner Ol</a>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
			<div class="wave hero"></div>
		</div>
		<!-- /hero_single -->

			<div class="container margin_30_20">
			<div class="main_title center">
				<span><em></em></span>
				<h2>Neden Yubirs Partneri olmalıyım</h2>
				<p>Dijitalleşen bir dünyada rekabet avantajı elde etmek için Yubirs Partner Kaydı olunmalıdır.</p>
			</div>

			<div class="row justify-content-center align-items-center add_bottom_15">
					<div class="col-lg-6">
						<div class="box_about">
							<h3>Geniş Müşteri Tabanına Ulaşma</h3>
							<!-- <p class="lead">Est falli invenire interpretaris id, magna libris sensibus mel id.</p> -->
							<p>Restoran uygulamaları, kullanıcıların yakındaki restoranları keşfetmelerini, menülerini görüntülemelerini ve sipariş vermelerini sağlar. Bu uygulamalara kaydolarak restoranlar, yerel müşterilerin yanı sıra turistler ve yeni müşterilerin dikkatini çekme fırsatı elde eder. Bu da restoranın potansiyel müşteri tabanını genişletir.</p>
							<img src="assets/img/arrow_about.png" alt="" class="arrow_1">
						</div>
					</div>
					<div class="col-lg-6 text-center d-none d-lg-block">
							<img src="assets/img/about_1.svg" alt="" class="img-fluid" width="250" height="250">
					</div>
				</div>
				<!-- /row -->
				<div class="row justify-content-center align-items-center add_bottom_15">
					<div class="col-lg-6 text-center d-none d-lg-block">
							<img src="assets/img/about_2.svg" alt="" class="img-fluid" width="250" height="250">
					</div>
					<div class="col-lg-6">
						<div class="box_about">
							<h3>Rezervasyon ve Sipariş Kolaylığı</h3>
							<!-- <p class="lead">Est falli invenire interpretaris id, magna libris sensibus mel id.</p> -->
							<p>Restoran uygulamaları, müşterilere rezervasyon yapma ve online sipariş verme imkanı sunar. Bu, müşterilere restoranınıza kolayca erişebilmelerini ve hızlı bir şekilde hizmet alabilmelerini sağlar. Ayrıca, restoran uygulamaları, müşterilerin önceden sipariş vermesine ve böylece bekleme sürelerini azaltmasına olanak tanır.</p>
							<img src="assets/img/arrow_about.png" alt="" class="arrow_2">
						</div>
					</div>
				</div>
				<!-- /row -->
				<div class="row justify-content-center align-items-center">
					<div class="col-lg-6">
						<div class="box_about">
							<h3>Pazarlama ve Tanıtım Fırsatları</h3>
							<!-- <p class="lead">Est falli invenire interpretaris id, magna libris sensibus mel id.</p> -->
							<p>Restoran uygulamaları, restoranların menülerini, özel tekliflerini, promosyonlarını ve etkinliklerini yayınlamalarına olanak sağlar. Bu, restoranın pazarlama ve tanıtım faaliyetlerini artırır ve müşterilere kendilerini farklılaştırma şansı verir. Ayrıca, müşterilerden gelen geri bildirimleri almak ve restoranın hizmet kalitesini iyileştirmek için değerli bir kanal sağlar.</p>
						</div>

					</div>
					<div class="col-lg-6 text-center d-none d-lg-block">
							<img src="assets/img/about_3.svg" alt="" class="img-fluid" width="250" height="250">
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->

	<!-- <div class="bg_gray">
		<div class="container margin_60_40">			
			<div class="main_title center">
				<span><em></em></span>
				<h2>Our Pricing Plans</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
			</div>
				 <div class="row plans">
                <div class="plan col-md-4">
                	<div class="plan-title">
	                    <h3>1 Month</h3>
	                    <p>Free of charge one standard listing</p>
                	</div>
                    <p class="plan-price">Free</p>
                    <ul class="plan-features">
                        <li><strong>Check and go</strong> included</li>
                        <li><strong>1 month</strong> valid</li>
                        <li><strong>Unsubscribe</strong> anytime</li>
                    </ul>
                    <a href="#submit" class="btn_1 gray btn_scroll">Submit</a>
                </div>
                
                <div class="plan plan-tall col-md-4">
                	<div class="plan-title">
	                    <h3>6 Months</h3>
	                    <p>One time fee for one listing, highlighted in search results</p>
                	</div>
                    <p class="plan-price">$199</p>
                    <ul class="plan-features">
                    	<li><strong>Premium</strong> support</li>
                        <li><strong>Check and go</strong> included</li>
                         <li><strong>APP</strong> included</li>
                        <li><strong>6 months</strong> valid</li>
                        <li><strong>Unsubscribe</strong> anytime</li>
                    </ul>
                    <a href="#submit" class="btn_1 gradient btn_scroll">Submit</a>
                </div>
                
                <div class="plan col-md-4">
                   <div class="plan-title">
	                    <h3>12 Months</h3>
	                    <p>Monthly subscription for unlimited listings</p>
                	</div>
                    <p class="plan-price">$299</p>
                    <ul class="plan-features">
                    	<li><strong>Premium</strong> support</li>
                        <li><strong>Check and go</strong> included</li>
                        <li><strong>12 months</strong> valid</li>
                        <li><strong>Unsubscribe</strong> anytime</li>
                    </ul>
                    <a href="#submit" class="btn_1 gray btn_scroll">Submit</a>
                </div>
            </div>
		</div>

	</div> -->

			<div class="container margin_60_20" id="submit">
				<div class="row justify-content-center">
					<div class="col-lg-5">
						<div class="text-center add_bottom_15">
							<h4>Rekabet Avantajı</h4>
							<p>Restoran sektörü rekabetçi bir alandır ve restoran uygulamaları, restoranlara diğer rakiplerinden bir adım öne geçme şansı sunar. Müşteriler, restoran uygulamalarında olmayan restoranları keşfetme olasılığının daha düşük olduğunu düşünürler.</p>
							<a href="partner/register.php" class="btn_1 gradient btn_scroll">Partner Ol</a>
						</div>
					</div>
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

</body>
</html>