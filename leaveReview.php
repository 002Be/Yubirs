<?php
    require_once("includes/sections.php");
    require_once("includes/connection.php");
	require_once("assets/languages/tr_TR.php"); //Fonksiyon olarak eklenecek

	$sorgu = $conn->prepare("SELECT businessName FROM partners WHERE status=1 and id=?");
    $sorgu->execute([$_POST["partnerId"]]);
	$restoran = $sorgu->fetch(PDO::FETCH_ASSOC);
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
    <link href="assets/css/review.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">

</head>

<body>
	<!-- Header -->
	<?php headerC(); ?>
	
	<main class="bg_gray">
		<form action="includes/transactions.php" method="POST">
			<div class="container margin_60_20">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="box_general write_review">
							<h1 class="add_bottom_15"><?php echo $restoran["businessName"]; ?> için bir inceleme yazın</h1>
							<label class="d-block add_bottom_15">Genel Değerlendirme</label>
							<div class="row">
								<div class="col-md-3 add_bottom_25">
									<div class="add_bottom_15">Yemek Kalitesi <strong class="food_quality_val"></strong></div>
									<input name="pointFoodQuality" type="range" min="1" max="10" step="1" value="0" data-orientation="horizontal" id="food_quality" name="food_quality">
								</div>
								<div class="col-md-3 add_bottom_25">
									<div class="add_bottom_15">Servis <strong class="service_val"></strong></div>
									<input name="pointService" type="range" min="1" max="10" step="1" value="0" data-orientation="horizontal" id="service" name="service">
								</div>
								<div class="col-md-3 add_bottom_25">
									<div class="add_bottom_15">Dakiklik <strong class="location_val"></strong></div>
									<input name="pointPunctuality" type="range" min="1" max="10" step="1" value="0" data-orientation="horizontal" id="location" name="location">
								</div>
								<div class="col-md-3 add_bottom_25">
									<div class="add_bottom_15">Fiyat <strong class="price_val"></strong></div>
									<input name="pointPrice" type="range" min="1" max="10" step="1" value="0" data-orientation="horizontal" id="price" name="price">
								</div>
							</div>
							<!-- <div class="form-group">
								<label>İncelemenizin başlığı</label>
								<input class="form-control" type="text" placeholder="Tek bir cümle ile söyleyebilseydin ne derdin?">
							</div> -->
							<div class="form-group">
								<label>Yorumun</label>
								<textarea name="comment" class="form-control" style="height: 180px;" placeholder="Başkalarının bu işletme hakkında bilgi edinmesine yardımcı olmak için yorumunuzu yazın"></textarea>
							</div>
							<div class="form-group">
								<label>Fotoğrafını ekleyin (isteğe bağlıdır)</label>
								<div class="fileupload"><input type="file" name="fileupload" accept="image/*"></div>
							</div>
							<div class="form-group">
								<div class="checkboxes float-start add_bottom_15 add_top_15">
									<!-- <label class="container_check">Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. -->
									<label class="container_check">İnceleme kurallarını okuduğum ve kabul ediyorum.
										<input type="checkbox" required>
										<span class="checkmark"></span>
									</label>
								</div>
							</div><br><br>
							<input type="hidden" name="partnerId" value="<?php echo $_POST["partnerId"]; ?>">
							<button href="confirm.php" type="submit" name="reviews_c" class="btn_1">İncelemeyi gönder</button>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
		<!-- /container -->
		</form>
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
    <script src="assets/js/specific_review.js"></script>

</body>
</html>