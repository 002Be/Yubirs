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
        <title><?php echo $lang["404_Baslik"]; ?></title>

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
        <link href="assets/css/error.css" rel="stylesheet">

        <!-- YOUR CUSTOM CSS -->
        <link href="assets/css/custom.css" rel="stylesheet">
    </head>

    <body>
        <!-- Header -->
        <?php headerC(); ?>

        <main class="bg_gray">
            <div id="error_page">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-7 col-lg-9">
                            <figure><img src="assets/img/404.svg" alt="" class="img-fluid" width="550" height="234"></figure>
                            <p><?php echo $lang["404_SayfaMevcutDegil"]; ?></p>
                            <form method="post" action="gridListingFilterscol.php">
                                    <div class="row g-0 custom-search-input">
                                        <div class="col-lg-10">
                                            <div class="form-group">
                                                <input class="form-control no_border_r" type="text" placeholder="<?php echo $lang["404_NeAriyorsun"]; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <button class="btn_1 gradient" type="submit"><?php echo $lang["404_Ara"]; ?></button>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </form>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /error -->		
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