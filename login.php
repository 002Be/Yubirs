<?php
    require_once("includes/sections.php");
    require_once("assets/languages/tr_TR.php"); //Fonksiyon olarak eklenecek
?>
<!doctype html>
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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        <!-- BASE CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- SPECIFIC CSS -->
        <link href="assets/css/home.css" rel="stylesheet">

        <!-- YOUR CUSTOM CSS -->
        <link href="assets/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/CustomerRegisterPage.css"/>

        <!-- FONT AWESOME -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/><!-- Font Awesome -->
    </head>
    <body>

        <?php headerC(); ?>


    <form action="includes/transactions.php" method="POST">
        <div class="container" style="width: 1000px; height: 500px; margin-top:100px; margin-bottom:100px;">
            <div class="login">
                <div class="container">
                    <h1>Üye Girişi</h1>
                    <input name="mail" type="email" placeholder="E-Posta" required>
                    <input name="password" type="password" placeholder="Parola" required><br>
                    <a href="resetPasswordStap1.php" style="float: left; text-decoration: none;">Parolanızı mı unuttunuz?</a>
                    <a href="register.php" style="float: right; text-decoration: none;">Hesabınız yok mu?</a>
                    <button type="submit" name="loginC" class="btn btn-primary">Giriş Yap</button>
                </div>
            </div>
            <div class="register">
                <div class="container">
                    <i class="fas fa-user-plus fa-5x"></i>
                    <h2>Yubirs</h2>
                    <p>Tek adımla üye olun ve Yubirs dünyasını keşfetmeye başlayın!</p>
                    <!-- <button>Üye Ol <i class="fas fa-arrow-circle-right"></i></button> -->
                </div>
            </div>
        </div>
    </form>

        <?php footerC(); ?>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>