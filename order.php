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
    <link href="assets/css/order-sign_up.css" rel="stylesheet">
    <link href="assets/css/detail-page.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">

</head>

<body>
	<!-- Header -->
	<?php headerC(); ?>
	
	<main class="bg_gray">
		<?php
		if(isset($_SESSION["GirisDurumu"])){ ?>
			<div class="container margin_60_20">
				<div class="row justify-content-center">
					<div class="col-xl-6 col-lg-8">
						<!-- <div class="box_order_form">
							<div class="head">
								<div class="title">
									<h3>Kişisel bilgiler</h3>
								</div>
							</div>
							<div class="main">
								<div class="form-group">
									<label>Ad ve Soyad</label>
									<input class="form-control" placeholder="Ad ve Soyad">
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>E-Posta Adresi</label>
											<input class="form-control" placeholder="E-Posta adresi">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Telefon Numarası</label>
											<input class="form-control" placeholder="Telefon numarası">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Tam Adres</label>
									<input class="form-control" placeholder="Tam adres">
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Şehir</label>
											<input class="form-control" placeholder="Şehir">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Posta Kodu</label>
											<input class="form-control" placeholder="Posta kodu">
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- /box_order_form -->
						<div class="box_order_form">
							<div class="head">
								<div class="title">
									<h3>Ödeme Yöntemi</h3>
								</div>
							</div>
							<!-- /head -->
							<div class="main">
								<div class="payment_select">
									<label class="container_radio">Kredi Kartı
										<input type="radio" value="" checked name="payment_method">
										<span class="checkmark"></span>
									</label>
									<i class="icon_creditcard"></i>
								</div>
								<div class="form-group">
									<label>Kart Üzerindeki İsim</label>
									<input type="text" class="form-control" id="name_card_order" name="name_card_order" placeholder="Ad ve Soyad">
								</div>
								<div class="form-group">
									<label>Kard Numarası</label>
									<input type="text" id="card_number" name="card_number" class="form-control" placeholder="Kart numarası">
								</div>
								<div class="row">
									<div class="col-md-6">
										<label>Geçerelilik Tarihi</label>
										<div class="row">
											<div class="col-md-6 col-6">
												<div class="form-group">
													<input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="aa">
												</div>
											</div>
											<div class="col-md-6 col-6">
												<div class="form-group">
													<input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="yyyy">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>Güvenlik Kodu</label>
											<div class="row">
												<div class="col-md-4 col-6">
													<div class="form-group">
														<input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
													</div>
												</div>
												<div class="col-md-8 col-6">
													<img src="assets/img/icon_ccv.gif" width="50" height="29" alt="ccv"><small></small>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--End row -->
								<!-- <div class="payment_select" id="paypal">
									<label class="container_radio">Pay with Paypal
										<input type="radio" value="" name="payment_method">
										<span class="checkmark"></span>
									</label>
								</div> -->
								<div class="payment_select">
									<label class="container_radio">Kapıda Ödeme
										<input type="radio" value="" name="payment_method">
										<span class="checkmark"></span>
									</label>
									<i class="icon_wallet"></i>
								</div>
							</div>
						</div>
						<!-- /box_order_form -->
					</div>
					<!-- /col -->
					<div class="col-xl-4 col-lg-4" id="sidebar_fixed">
						<div class="box_order">
							<div class="head">
								<h3>Order Summary</h3>
								<div>Pizzeria da Alfredo</div>
							</div>
							<!-- /head -->
							<div class="main">
								<ul>
									<li>Date<span>Today 23/11/2019</span></li>
									<li>Hour<span>08.30pm</span></li>
									<li>Type<span>Delivery</span></li>
								</ul>
								<hr>
								<ul class="clearfix">
									<li><a href="#0">1x Enchiladas</a><span>11$</span></li>
									<li><a href="#0">2x Burrito</a><span>14$</span></li>
									<li><a href="#0">1x Chicken</a><span>18$</span></li>
									<li><a href="#0">2x Corona Beer</a><span>9$</span></li>
									<li><a href="#0">2x Cheese Cake</a><span>11$</span></li>
								</ul>
								
								<ul class="clearfix">
									<li>Subtotal<span>56$</span></li>
									<li>Delivery fee<span>10$</span></li>
									<li class="total">Total<span>66$</span></li>
								</ul>
								<a href="confirm.php" class="btn_1 gradient full-width mb_5">Order Now</a>
								<div class="text-center"><small>Müşteri Hizmetleri <strong>+90 850 484 32 5x</strong></small></div>
							</div>
						</div>
						<!-- /box_booking -->
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container --> <?php
		}else{ ?>
			<form action="includes/transactions.php" method="POST">
				<div class="container margin_60_20">
					<div class="row justify-content-center">
						<div class="col-xl-6 col-lg-8">
							<div class="box_order_form">
								<div class="head">
									<div class="title">
										<h3>Kişisel bilgiler</h3>
									</div>
								</div>
								<!-- /head -->
								<div class="main">
									<div class="form-group">
										<label>Ad ve Soyad</label>
										<input class="form-control" placeholder="Ad ve Soyad" name="nameSurname">
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>E-Posta Adresi</label>
												<input class="form-control" placeholder="E-Posta adresi" name="mail">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Telefon Numarası</label>
												<input class="form-control" placeholder="Telefon numarası" name="telefon">
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>İl</label>
												<input class="form-control" placeholder="İl" name="il">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>İlçe</label>
												<input class="form-control" placeholder="İlçe" name="ilce">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Mahalle</label>
												<input class="form-control" placeholder="Mahalle" name="mahalle">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Cadde/Sokak</label>
												<input class="form-control" placeholder="Cadde/Sokak" name="cadde">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Bina</label>
												<input class="form-control" placeholder="Bina" name="bina">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Daire</label>
												<input class="form-control" placeholder="Daire" name="daire">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label>Açık Adres</label>
										<textarea class="form-control" placeholder="Tam adres" name="detayliAdres" style="height:90px;"></textarea>
									</div>
									<hr>
									<div class="form-group">
										<label>Sipariş Notu</label>
										<textarea class="form-control" placeholder="Tam adres" name="not" style="height:90px;"></textarea>
									</div>
									<!-- <div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Şehir</label>
												<input class="form-control" placeholder="Şehir">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Posta Kodu</label>
												<input class="form-control" placeholder="Posta kodu">
											</div>
										</div>
									</div> -->
								</div>
							</div>
							<!-- /box_order_form -->
							<div class="box_order_form">
								<div class="head">
									<div class="title">
										<h3>Ödeme Yöntemi</h3>
									</div>
								</div>
								<!-- /head -->
								<div class="main">
									<div class="payment_select">
										<label class="container_radio">Kredi Kartı
											<input type="radio" value="" checked name="payment_method">
											<span class="checkmark"></span>
										</label>
										<i class="icon_creditcard"></i>
									</div>
									<div class="form-group">
										<label>Kart Üzerindeki İsim</label>
										<input type="text" class="form-control" id="name_card_order" name="name_card_order" placeholder="Ad ve Soyad">
									</div>
									<div class="form-group">
										<label>Kard Numarası</label>
										<input type="text" id="card_number" name="card_number" class="form-control" placeholder="Kart numarası">
									</div>
									<div class="row">
										<div class="col-md-6">
											<label>Geçerelilik Tarihi</label>
											<div class="row">
												<div class="col-md-6 col-6">
													<div class="form-group">
														<input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="aa">
													</div>
												</div>
												<div class="col-md-6 col-6">
													<div class="form-group">
														<input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="yyyy">
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<label>Güvenlik Kodu</label>
												<div class="row">
													<div class="col-md-4 col-6">
														<div class="form-group">
															<input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
														</div>
													</div>
													<div class="col-md-8 col-6">
														<img src="assets/img/icon_ccv.gif" width="50" height="29" alt="ccv"><small></small>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--End row -->
									<!-- <div class="payment_select" id="paypal">
										<label class="container_radio">Pay with Paypal
											<input type="radio" value="" name="payment_method">
											<span class="checkmark"></span>
										</label>
									</div> -->
									<div class="payment_select">
										<label class="container_radio">Kapıda Ödeme
											<input type="radio" value="" name="payment_method">
											<span class="checkmark"></span>
										</label>
										<i class="icon_wallet"></i>
									</div>
								</div>
							</div>
							<!-- /box_order_form -->
						</div>
						<!-- /col -->
						<?php include("includes/basket3.php"); ?>
						</div>
					</div>
					<!-- /row -->
				</div>
			</form>
				<!-- /container --> <?php
		} ?>
		
		
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
    <script>
    	$('#sidebar_fixed').theiaStickySidebar({
		    minWidth: 991,
		    updateSidebarHeight: false,
		    additionalMarginTop: 30
		});
    </script>

</body>
</html>