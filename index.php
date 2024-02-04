<?php
    require_once("includes/sections.php");
    require_once("includes/connection.php");
    require_once("assets/languages/tr_TR.php"); //Fonksiyon olarak eklenecek

    $sorgu1 = $conn->prepare("SELECT * FROM partners WHERE status=1");
    $sorgu1->execute();
    $sorgu2 = $conn->prepare("SELECT * FROM partners WHERE status=1 AND score>8 ORDER BY score DESC");
    $sorgu2->execute();
    $sorgu3 = $conn->prepare("SELECT * FROM partners WHERE status=1");
    $sorgu3->execute();
    $sorgu4 = $conn->prepare("SELECT * FROM categorie_p");
    $sorgu4->execute();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FooYes - Quality delivery or takeaway food">
    <meta name="author" content="Ansonika">
    <title><?php echo $lang["Index_baslik"]; ?></title>

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
    <link href="assets/css/home.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <?php headerC(); ?>

    <main>
        <div class="hero_single version_1">
            <div class="opacity-mask">
                <div class="container">
                    <div class="row justify-content-lg-start justify-content-md-center">
                        <div class="col-xl-7 col-lg-8">
                            <h1><?php echo $lang["Index_baslik2"]; ?></h1>
                            <p><?php echo $lang["Index_TumRestoranlar"]; ?> <span class="element" style="font-weight: 500"></span></p>
                            <form action="gridListingFilterscol.php" method="GET">
                                <div class="row g-0 custom-search-input">
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <input name="ara" class="form-control no_border_r" type="text" placeholder="<?php echo $lang["Index_YemekAra"]; ?>">
                                            <!-- <input name="ara" class="form-control no_border_r" type="text" id="autocomplete" placeholder="Yemek Ara"> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <button class="btn_1 gradient" type="submit"><?php echo $lang["Index_Ara"]; ?></button>
                                    </div>
                                </div>
                                <!-- /row -->
                                <div class="search_trends">
                                    <h5><?php echo $lang["Index_Trendler"]; ?></h5>
                                    <ul>
                                        <li><a href="#0">Sushi</a></li>
                                        <li><a href="#0">Hamburger</a></li>
                                        <li><a href="#0">Pizza</a></li>
                                        <li><a href="#0">Döner</a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <div class="wave hero"></div>
        </div>
        <!-- /hero_single -->

        <div class="container margin_30_60">
            <div class="main_title center">
                <span><em></em></span>
                <h2><?php echo $lang["Index_PopulerKategoriler"]; ?></h2>
                <!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p> -->
            </div>
            <!-- /main_title -->

            <div class="owl-carousel owl-theme categories_carousel"><?php
                $sayac = 0;
                while($kategoriler = $sorgu4->fetch(PDO::FETCH_ASSOC)){ $sayac++;?>
                <div class="item_version_2">
                    <a href="gridListingFilterscol.php">
                        <figure>
                            <span><?php echo $sayac; ?></span>
                            <img src="assets/img/home_cat_placeholder.jpg" data-src="assets/img/home_cat_pizza.jpg" alt="<?php echo $kategoriler["name"]; ?>" class="owl-lazy" width="350" height="450">
                            <!-- < ?php
                            if($kategoriler["imageId"]!="Yok"){ ?>
                                <img src="assets/categorieImg/< ?php echo $kategoriler["imageId"]; ?>" alt="< ?php echo $kategoriler["name"]; ?>" class="lazy" width="350" height="450"> < ?php
                            }else{ ?>
                                <img src="assets/img/home_cat_placeholder.jpg" data-src="assets/img/home_cat_pizza.jpg" alt="< ?php echo $kategoriler["name"]; ?>" class="owl-lazy" width="350" height="450"> < ?php
                            } ?> -->
                            <div class="info">
                                <h3><?php echo $kategoriler["name"]; ?></h3>
                                <!-- <small>Avg price $40</small> -->
                            </div>
                        </figure>
                    </a>
                </div> <?php } ?>
            </div>
            <!-- /carousel -->
        </div>
        <!-- /container -->

        <div class="bg_gray">
            <div class="container margin_60_40">
                <div class="main_title">
                    <span><em></em></span>
                    <!-- <h2>En Çok Puan Alan Restoranlar</h2> -->
                    <h2><?php echo $lang["Index_IndirimliRestoranlar"]; ?></h2>
                    <!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> -->
                    <a href="gridListingFilterscol.php"><?php echo $lang["Index_TamamınıGor"]; ?> &rarr;</a>
                </div>
                <div class="row add_bottom_25"><?php
                    $sayac_tumYemekler = 0;
                    while($restoranBilgileri = $sorgu1->fetch(PDO::FETCH_ASSOC)){
                        $sayac_tumYemekler++;
                        ?>
                    <div class="col-lg-6">
                        <div class="list_home">
                            <ul>
                                <li>
                                    <a href="detailRestaurant.php?id=<?php echo $restoranBilgileri["id"]; ?>">
                                        <figure>
                                            <?php
                                            if($restoranBilgileri["imageId"]!="Yok"){ ?>
                                                <img src="assets/partnerBusinessImg/<?php echo $restoranBilgileri["imageId"]; ?>" alt="<?php echo $restoranBilgileri["businessName"]; ?>" class="lazy" width="350" height="233"> <?php
                                            }else{ ?>
                                                <img src="assets/img/location_list_placeholder.png" data-src="assets/img/location_list_6.jpg" alt="<?php echo $restoranBilgileri["businessName"]; ?>" class="lazy" width="350" height="233"> <?php
                                            } ?>
                                        </figure>
                                        <div class="score"><strong><?php echo $restoranBilgileri["score"]; ?></strong></div>
                                        <em><?php echo $restoranBilgileri["category"]; ?></em>
                                        <h3><?php echo $restoranBilgileri["businessName"]; ?></h3>
                                        <small><?php echo $restoranBilgileri["businessAddress"]; ?></small>
                                        <ul>
                                            <!-- <li><span class="ribbon off">-45%</span></li> -->
                                            <?php
                                            if($restoranBilgileri["minAmount"]==0){ ?>
                                                <li><?php echo $lang["Index_MinimumTutarUcretsizGonderim"]; ?></li> <?php
                                            }else{ ?>
                                                <li><?php echo $lang["Index_MinimumTutarUcretliGonderim"]; ?> <?php echo $restoranBilgileri["minAmount"]; ?> TL</li> <?php
                                            } ?>
                                            <!-- <li>Average price $25</li> -->
                                        </ul>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><?php
                        if($sayac_tumYemekler==4){break;}
                    } ?>
                </div>
                <!-- /row -->
                <div class="main_title">
                    <span><em></em></span>
                    <!-- <h2>En Çok Puan Alan Restoranlar</h2> -->
                    <h2><?php echo $lang["Index_PopulerRestoranlar"]; ?></h2>
                    <!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> -->
                    <a href="gridListingFilterscol.php"><?php echo $lang["Index_TamamınıGor"]; ?> &rarr;</a>
                </div>
                <div class="row add_bottom_25"><?php
                    $sayac_tumYemekler = 0;
                    while($restoranBilgileri = $sorgu2->fetch(PDO::FETCH_ASSOC)){
                        $sayac_tumYemekler++;
                        ?>
                    <div class="col-lg-6">
                        <div class="list_home">
                            <ul>
                                <li>
                                    <a href="detailRestaurant.php?id=<?php echo $restoranBilgileri["id"]; ?>">
                                        <figure>
                                            <?php
                                            if($restoranBilgileri["imageId"]!="Yok"){ ?>
                                                <img src="assets/partnerBusinessImg/<?php echo $restoranBilgileri["imageId"]; ?>" alt="<?php echo $restoranBilgileri["businessName"]; ?>" class="lazy" width="350" height="233"> <?php
                                            }else{ ?>
                                                <img src="assets/img/location_list_placeholder.png" data-src="assets/img/location_list_6.jpg" alt="<?php echo $restoranBilgileri["businessName"]; ?>" class="lazy" width="350" height="233"> <?php
                                            } ?>
                                        </figure>
                                        <div class="score"><strong><?php echo $restoranBilgileri["score"]; ?></strong></div>
                                        <em><?php echo $restoranBilgileri["category"]; ?></em>
                                        <h3><?php echo $restoranBilgileri["businessName"]; ?></h3>
                                        <small><?php echo $restoranBilgileri["businessAddress"]; ?></small>
                                        <ul>
                                            <!-- <li><span class="ribbon off">-45%</span></li> -->
                                            <?php
                                            if($restoranBilgileri["minAmount"]==0){ ?>
                                                <li><?php echo $lang["Index_MinimumTutarUcretsizGonderim"]; ?></li> <?php
                                            }else{ ?>
                                                <li><?php echo $lang["Index_MinimumTutarUcretliGonderim"]; ?> <?php echo $restoranBilgileri["minAmount"]; ?> TL</li> <?php
                                            } ?>
                                            <!-- <li>Average price $25</li> -->
                                        </ul>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><?php
                        if($sayac_tumYemekler==4){break;}
                        } ?>
                </div>
                <!-- /row -->
                <div class="main_title">
                    <span><em></em></span>
                    <!-- <h2>En Çok Puan Alan Restoranlar</h2> -->
                    <h2><?php echo $lang["Index_TumRestoranlar"]; ?></h2>
                    <!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> -->
                    <a href="gridListingFilterscol.php"><?php echo $lang["Index_TamamınıGor"]; ?> &rarr;</a>
                </div>
                <div class="row add_bottom_25"><?php
                    $sayac_tumYemekler = 0;
                    while($restoranBilgileri = $sorgu3->fetch(PDO::FETCH_ASSOC)){
                        $sayac_tumYemekler++;
                        ?>
                    <div class="col-lg-6">
                        <div class="list_home">
                            <ul>
                                <li>
                                    <a href="detailRestaurant.php?id=<?php echo $restoranBilgileri["id"]; ?>">
                                        <figure>
                                            <?php
                                            if($restoranBilgileri["imageId"]!="Yok"){ ?>
                                                <img src="assets/partnerBusinessImg/<?php echo $restoranBilgileri["imageId"]; ?>" alt="<?php echo $restoranBilgileri["businessName"]; ?>" class="lazy" width="350" height="233"> <?php
                                            }else{ ?>
                                                <img src="assets/img/location_list_placeholder.png" data-src="assets/img/location_list_6.jpg" alt="<?php echo $restoranBilgileri["businessName"]; ?>" class="lazy" width="350" height="233"> <?php
                                            } ?>
                                        </figure>
                                        <div class="score"><strong><?php echo $restoranBilgileri["score"]; ?></strong></div>
                                        <em><?php echo $restoranBilgileri["category"]; ?></em>
                                        <h3><?php echo $restoranBilgileri["businessName"]; ?></h3>
                                        <small><?php echo $restoranBilgileri["businessAddress"]; ?></small>
                                        <ul>
                                            <!-- <li><span class="ribbon off">-45%</span></li> -->
                                            <?php
                                            if($restoranBilgileri["minAmount"]==0){ ?>
                                                <li><?php echo $lang["Index_MinimumTutarUcretsizGonderim"]; ?></li> <?php
                                            }else{ ?>
                                                <li><?php echo $lang["Index_MinimumTutarUcretliGonderim"]; ?> <?php echo $restoranBilgileri["minAmount"]; ?> TL</li> <?php
                                            } ?>
                                            <!-- <li>Average price $25</li> -->
                                        </ul>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><?php
                        if($sayac_tumYemekler==4){break;}
                        } ?>
                </div>
                <!-- /row -->
                <div class="banner lazy" data-bg="url(assets/img/indexOffice.jpg)">
                    <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                        <div>
                            <small><?php echo $lang["Index_YubirsTeslimat"]; ?></small>
                            <h3><?php echo $lang["Index_OfisinizeTeslimEdiyoruz"]; ?></h3>
                            <p><?php echo $lang["Index_DakikalarIcinde"]; ?></p>
                            <a href="gridListingFilterscol.php" class="btn_1 gradient"><?php echo $lang["Index_SiparisVer"]; ?></a>
                        </div>
                    </div>
                    <!-- /wrapper -->
                </div>
                <!-- /banner -->
            </div>
        </div>
        <!-- /bg_gray -->

        <!-- <div class="shape_element_2">
            <div class="container margin_60_0">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="box_how">
                                    <figure><img src="assets/img/lazy-placeholder-100-100-white.png" data-src="assets/img/how_1.svg" alt="" width="150" height="167" class="lazy"></figure>
                                    <h3>Easly Order</h3>
                                    <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin.</p>
                                </div>
                                <div class="box_how">
                                    <figure><img src="assets/img/lazy-placeholder-100-100-white.png" data-src="assets/img/how_2.svg" alt="" width="130" height="145" class="lazy"></figure>
                                    <h3>Quick Delivery</h3>
                                    <p>Maecenas pulvinar, risus in facilisis dignissim, quam nisi hendrerit nulla, id vestibulum.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="box_how">
                                    <figure><img src="assets/img/lazy-placeholder-100-100-white.png" data-src="assets/img/how_3.svg" alt="" width="150" height="132" class="lazy"></figure>
                                    <h3>Enjoy Food</h3>
                                    <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros.</p>
                                </div>
                            </div>
                        </div>
                        <p class="text-center mt-3 d-block d-lg-none"><a href="#0" class="btn_1 medium gradient pulse_bt mt-2">Register Now!</a></p>
                    </div>
                    <div class="col-lg-5 offset-lg-1 align-self-center">
                        <div class="intro_txt">
                            <div class="main_title">
                                <span><em></em></span>
                                <h2>Şimdi Sipariş Vermeye Başlayın</h2>
                            </div>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur deserunt.</p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <p><a href="#0" class="btn_1 medium gradient pulse_bt mt-2">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- /shape_element_2 -->

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

<!-- TYPE EFFECT -->
    <script src="assets/js/typed.min.js"></script>
    <script>
        var typed = new Typed('.element', {
            strings: ["en iyi fiyata", "eşsiz yemekleri ile", "güzel konumu ile"],
            startDelay: 10,
            loop: true,
            backDelay: 2000,
            typeSpeed: 50
        });
    </script>

<!-- Autocomplete -->
<script>
function initMap() {
    var input = document.getElementById('autocomplete');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("Otomatik tamamlama döndürülen yer geometri içermiyor");
            return;
        }

        var address = '';
        if (place.address_components) {
            address = [
                (place.address_components[0] && place.address_components[0].short_name || ''),
                (place.address_components[1] && place.address_components[1].short_name || ''),
                (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
        }
    });
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initMap"></script>

</body>
</html>