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
			<div class="container margin_30_20"></div>
				<div class="main_title center">
					<span><em></em></span>
					<h2>Sipariş Geçmişi</h2>
					<!-- <p>Dijitalleşen bir dünyada rekabet avantajı elde etmek için Yubirs Partner Kaydı olunmalıdır.</p> -->
				</div>


				


				<div class="container margin_60_20" id="submit">
					<div class="row justify-content-center">
						<div class="col-lg-5">
							<div class="text-center add_bottom_15">
								<!-- <h4>Sipariş Vermeye Devam Et</h4> -->
								<!-- <p>Restoran sektörü rekabetçi bir alandır ve restoran uygulamaları, restoranlara diğer rakiplerinden bir adım öne geçme şansı sunar. Müşteriler, restoran uygulamalarında olmayan restoranları keşfetme olasılığının daha düşük olduğunu düşünürler.</p> -->
								<a href="gridListingFilterscol.php" class="btn_1 gradient btn_scroll">Sipariş Vermeye Devam Et</a>
							</div>
						</div>
					</div>
				</div>
		</main>

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