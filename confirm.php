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
    <link href="assets/css/order-sign_up.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">

</head>

<body>
	<!-- Header -->
	<?php headerC(); ?>
	
	<main class="bg_gray">
		
		<div class="container margin_60_40">
		    <div class="row justify-content-center">
		        <div class="col-lg-4">
		        	<div class="box_order_form">
		                <div class="head text-center">
		                    <h3>Pizzeria da Alfredo</h3>
		                    27 Old Gloucester St, 4530 - <a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="blank">Haritada Gör</a>
		                </div>
		                <!-- /head -->
		                <div class="main">
		                	<div id="confirm">
								<div class="icon icon--order-success svg add_bottom_15">
									<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
										<g fill="none" stroke="#8EC343" stroke-width="2">
											<circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
											<path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
										</g>
									</svg>
								</div>
								<h3>Siparişiniz Onaylandı!</h3>
								<!-- <p>Sit an meis aliquam, cetero inermis.</p> -->
								<p>Sipariş Detayı Burada Bulunacak</p>
								<a href="index.php" class="btn_1 gradient full-width mb_5">Ana Sayfaya Dön</a>
							</div>
		                </div>
		            </div>
		            <!-- /box_booking -->
		        </div>
		        <!-- /col -->
		    </div>
		    <!-- /row -->
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