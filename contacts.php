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
    <link href="assets/css/contacts.css" rel="stylesheet">

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
						<div class="col-xl-9 col-lg-10 col-md-8">
							<h1>İletişim</h1>
							<p>Başarılı bir restoran deneyimi</p>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
			<div class="wave gray hero"></div>
		</div>
		<!-- /hero_single -->

		<div class="bg_gray">
		    <div class="container margin_60_40">
		        <div class="row justify-content-center">
		            <div class="col-lg-4">
		                <div class="box_contacts">
		                    <i class="icon_lifesaver"></i>
		                    <h2>Yardım Merkezi</h2>
		                    <a href="#0">+90 850 443 23 2x</a> - <a href="#0">destek@yubirs.com</a>
		                    <small>Pzt-Cuma 09:00-21:00 | Hafta Sonları 10:00-20:00</small>
		                </div>
		            </div>
		            <div class="col-lg-4">
		                <div class="box_contacts">
		                    <i class="icon_pin_alt"></i>
		                    <h2>Adres</h2>
		                    <div>6.Sokak, Burdur - 10001 Gölhisar</div>
		                    <small>Pzt-Cuma 09:00-21:00 | Hafta Sonları 10:00-20:00</small>
		                </div>
		            </div>
		            <div class="col-lg-4">
		                <div class="box_contacts">
		                    <i class="icon_cloud-upload_alt"></i>
		                    <h2>Gönderimler</h2>
		                    <a href="#0">+90 850 443 23 1x</a> - <a href="#0">siparis@yubirs.com</a>
		                    <small>Pzt-Cuma 09:00-21:00 | Hafta Sonları 10:00-20:00</small>
		                </div>
		            </div>
		        </div>
		        <!-- /row -->
		    </div>
		    <!-- /container -->
		</div>
		<!-- /bg_gray -->

		<div class="container margin_60_20">
		    <h5 class="mb_5">Bize Yazın</h5>
		    <div class="row">
		        <div class="col-lg-4 col-md-6 add_bottom_25">
		            <div id="message-contact"></div>
			            <form method="post" action="assets/contact.php" id="contactform" autocomplete="off">
			                <div class="form-group">
			                    <input class="form-control" type="text" placeholder="Ad Soyad" id="name_contact" name="name_contact">
			                </div>
			                <div class="form-group">
			                    <input class="form-control" type="email" placeholder="E-Posta" id="email_contact" name="email_contact">
			                </div>
			                <div class="form-group">
			                    <textarea class="form-control" style="height: 150px;" placeholder="Mesajınız" id="message_contact" name="message_contact"></textarea>
			                </div>
			                <div class="form-group">
			                    <input class="form-control" type="text" id="verify_contact" name="verify_contact" placeholder="Robot kontrol  3 + 1 = ?">
			                </div>
			                <div class="form-group">
			                    <input class="btn_1 gradient full-width" type="submit" value="Gönder" id="submit-contact">
			                </div>
			            </form>
		        	</div>
		            <div class="col-lg-8 col-md-6 add_bottom_25">
		                <iframe class="map_contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39714.47749917409!2d-0.13662037019554393!3d51.52871971170425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondra%2C+Regno+Unito!5e0!3m2!1sit!2ses!4v1557824540343!5m2!1sit!2ses" allowfullscreen></iframe>
		            </div>
		        </div>
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
    <script src="js/common_scripts.min.js"></script>
    <script src="js/common_func.js"></script>
    <script src="assets/validate.js"></script>

</body>
</html>