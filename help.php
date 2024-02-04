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
    <link href="assets/css/help.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">

</head>

<body>
    <!-- Header -->
    <?php headerC(); ?>
	
	<main>
		<div class="hero_single inner_pages background-image" data-background="url(assets/img/indexOffice.jpg)">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-8 col-lg-10 col-md-8">
							<h1>Yardım ve destek</h1>
							<p>Yardım almak istediğiniz konuyu yazın</p>
							<!-- <form method="post" action="gridListingFilterscol.php"> -->
                                <div class="row g-0 custom-search-input">
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <input class="form-control no_border_r" type="text" placeholder="Hangi konuda yardıma ihtiyacınız var?">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <button class="btn_1 gradient" type="submit">Ara</button>
                                    </div>
                                </div>
                                <!-- /row -->
                            <!-- </form> -->
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
			<div class="wave hero gray"></div>
		</div>
		<!-- /hero_single -->

		<div class="bg_gray">
			<div class="container margin_30_40">
				<div class="main_title center">
				    <span><em></em></span>
				    <h2>Bir konu seç</h2>
				    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6">
						<a class="box_topic" href="#0">
							<span><i class="icon_wallet"></i></span>
							<h3>Ödemeler</h3>
							<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris.</p>
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a class="box_topic" href="#0">
							<i class="icon_cloud-upload_alt"></i>
							<h3>Teslim</h3>
							<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris.</p>
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a class="box_topic" href="#0">
							<i class="icon_lifesaver"></i>
							<h3>Genel Yardım</h3>
							<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris.</p>
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a class="box_topic" href="#0">
							<i class="icon_globe-2"></i>
							<h3>Uluslararası</h3>
							<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris.</p>
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a class="box_topic" href="#0">
							<i class="icon_document_alt"></i>
							<h3>Anlaşma İptali</h3>
							<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris.</p>
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a class="box_topic" href="#0">
							<i class="icon_comment_alt"></i>
							<h3>Yorumlar</h3>
							<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris.</p>
						</a>
					</div>
				</div>
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_gray -->
		<div class="container margin_60_40">
				<div class="main_title version_2">
					<span><em></em></span>
					<h2>Popüler Makaleler</h2>
					<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				</div>
				<div class="list_articles clearfix">
					<ul>
					<li><a href="#"><i class="icon_documents_alt"></i>Etkileyici görseller</a></li>
					<li><a href="#"><i class="icon_documents_alt"></i>Reklam</a></li>
					<li><a href="#"><i class="icon_documents_alt"></i>Önceden ses çıkarma</a></li>
					<li><a href="#"><i class="icon_documents_alt"></i>İkili cihaza sahip olmak</a></li>
					<li><a href="#"><i class="icon_documents_alt"></i>Dönüşüme engel ol</a></li>
					<li><a href="#"><i class="icon_documents_alt"></i>Her yerde bulunamaz</a></li>
					<li><a href="#"><i class="icon_documents_alt"></i>Yönlendirmenin kolaylaşması</a></li>
					<li><a href="#"><i class="icon_documents_alt"></i>Yanıltıcı görseller</a></li>
					</ul>
				</div>
				<!-- /list_articles -->
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