<?php
    session_start();
    require_once("functions.php");

    function headerC(){
        if(isset($_SESSION["GirisDurumu"])){
            headerCL();
        }else{
            headerCR();
        }
    }

    function title(){
        echo "Yubirs";
    }

    function headerCL(){ ?>
        <header class="header_in clearfix">
            <div class="container">
                <div id="logo">
                    <a href="index.php">
                        <!-- <img src="assets/../assets/img/logo_sticky.svg" width="140" height="35" alt=""> -->
                        <h3>YUBIRS</h3>
                    </a>
                </div>
                <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
                <!-- <ul id="top_menu">
                    <li><a href="#" class="wishlist_bt_top" title="Your wishlist">İstek Listen</a></li>
                </ul> -->
                <!-- /top_menu -->
                <a href="#0" class="open_close">
                    <i class="icon_menu"></i><span>Menu</span>
                </a>
                <nav class="main-menu">
                    <div id="header_menu">
                        <a href="#0" class="open_close">
                            <i class="icon_close"></i><span>Menu</span>
                        </a>
                        <a href="index.php"><img src="assets/img/logo.svg" width="162" height="35" alt=""></a>
                    </div>
                    <ul>
                        <li class="third-level"><a href="index.php" class="show-submenu">Ana Sayfa</a></li>
                        <li class="third-level"><a href="gridListingFilterscol.php" class="show-submenu">Restoranlar</a></li>
                        <li class="third-level"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#shoppingCart">Sepetim</a></li>
                        <li class="submenu">
                            <a href="#" class="show-submenu">Profilim</a>
                            <ul style="width:50px;">
                                <li><a href="profile.php">Hesabım</a></li>
                                <li><a href="favoriteRestaurant.php">Favorilerim</a></li>
                                <li><a href="previousOrders.php">Önceki Siparişlerim</a></li>
                                <hr style="margin-top:-1px;margin-bottom:-1px;">
                                <li><a href="settings.php">Ayarlar</a></li>
                                <li><a href="exit.php" data-toggle="modal" data-target="#logoutModal">Çıkış Yap</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header> <?php
        include("basket2.php");
    }

    function headerCR(){ ?>
        <header class="header_in clearfix">
            <div class="container">
                <div id="logo">
                    <a href="index.php">
                        <!-- <img src="assets/../assets/img/logo_sticky.svg" width="140" height="35" alt=""> -->
                        <h3>YUBIRS</h3>
                    </a>
                </div>
                <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
                <ul id="top_menu">
                    <li><a href="#sign-in-dialog" id="sign-in" class="login">Giriş Yap</a></li>
                    <li><a href="#0" class="wishlist_bt_top" title="Your wishlist">İstek Listen</a></li>
                </ul>
                <!-- /top_menu -->
                <a href="#0" class="open_close">
                    <i class="icon_menu"></i><span>Menu</span>
                </a>
                <nav class="main-menu">
                    <div id="header_menu">
                        <a href="#0" class="open_close">
                            <i class="icon_close"></i><span>Menu</span>
                        </a>
                        <a href="index.php"><img src="../assets/img/logo.svg" width="162" height="35" alt=""></a>
                    </div>
                    <ul>
                        <li class="third-level"><a href="index.php" class="show-submenu">Ana Sayfa</a></li>
                        <li class="third-level"><a href="gridListingFilterscol.php" class="show-submenu">Restoranlar</a></li>
                        <li class="third-level"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#shoppingCart">Sepetim</a></li>
                        <!-- <li class="submenu">
                            <a href="#0" class="show-submenu">Listeler</a>
                            <ul>
                                <li class="third-level"><a href="#0">List pages</a>
                                    <ul>
                                        <li><a href="gridListingFilterscol.php">List default</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </header> <?php
        include("basket2.php");
    }

    function footerC(){ ?>
        <!-- <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <br><br><br>
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>
                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.,
                    < ?php include("includes/basket2.php"); ?>
                </div>
            </div>
        </div> -->

        <!-- <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasScrollingLabel">
            <br><br><br>
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">YUBIRS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                < ?php include("includes/basket2.php"); ?>
            </div>
        </div> -->

        <footer>
        <div class="wave gray footer"></div>
        <div class="container margin_60_40 fix_mobile">

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3 data-bs-target="#collapse_1">Hızlı Lİnkler</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_1">
                        <ul>
                            <!-- <li><a href="about.php">Hakkımızda</a></li> -->
                            <li><a href="submitRestaurant.php">İşletmenizi ekleyin</a></li>
                            <li><a href="help.php">Destek</a></li>
                            <li><a href="register.php">Profilim</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="contacts.php">İletişim</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-bs-target="#collapse_2">Kategorİler</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_2">
                        <ul>
                            <li><a href="gridListingFilterscol.php">En iyi kategoriler</a></li>
                            <li><a href="grid-listing-filterscol-full-masonry.php">En çok oy alanlar</a></li>
                            <li><a href="grid-listing-filterscol-full-width.php">En iyi fiyat</a></li>
                            <li><a href="grid-listing-filterscol-full-masonry.php">Son eklenenler</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                        <h3 data-bs-target="#collapse_3">iLETİŞİM</h3>
                    <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                        <ul>
                            <li><i class="icon_house_alt"></i>GÖLHİSAR/BURDUR<br>Konak Mah. Mehmet Akif Ersoy Bulvarı</li>
                            <li><i class="icon_mobile"></i>+90 850 484 32 5x</li>
                            <li><i class="icon_mail_alt"></i>info@yubirs.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                        <h3 data-bs-target="#collapse_4">İletİşİmİ Koparma</h3>
                    <div class="collapse dont-collapse-sm" id="collapse_4">
                        <div id="newsletter">
                            <div id="message-newsletter"></div>
                            <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                                <div class="form-group">
                                    <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="E-Posta adresiniz">
                                    <button type="submit" id="submit-newsletter"><i class="arrow_carrot-right"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="follow_us">
                            <h5>Bizi Sosyal Medyada Takip Edin</h5>
                            <ul>
                                <li><a href="https://www.linkedin.com/in/0berke0ozdemir0/"><img alt="Linkedin" src="assets/img/linkedin.png" class="lazy"></a></li>
                                <li><a href="https://www.linkedin.com/in/melike-bektaş-10b08718b/"><img alt="Linkedin" src="assets/img/linkedin.png" class="lazy"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row-->
            <hr>
            <div class="row add_bottom_25">
                <div class="col-lg-6">
                    <ul class="footer-selector clearfix">
                        <li>
                            <div class="styled-select lang-selector">
                                <select>
                                    <option value="Turkce" selected>Türkçe</option>
                                    <option value="Ingilizce">English</option>
                                    <option value="Rusca">Русский</option>
                                    <option value="Cince">中国人</option>
                                    <option value="Japonca">日本</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="styled-select currency-selector">
                                <select>
                                    <option value="US Dollars" selected>Türk Lirası</option>
                                    <option value="US Dollars">US Dollars</option>
                                    <option value="Euro">Euro</option>
                                </select>
                            </div>
                        </li>
                        <li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/img/cards_all.svg" alt="" width="230" height="35" class="lazy"></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="additional_links">
                        <li><a href="#0">Şartlar ve Koşullar</a></li>
                        <li><a href="#0">Gizlilik</a></li>
                        <li><span>© Yubirs</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> <?php
    }

    function loginC(){ ?>
    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="modal_header">
			<h3>Giriş Yap</h3>
		</div>
		<form action="includes/transactions.php" method="POST">
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Facebook ile Giriş Yap</a>
				<a href="#0" class="social_bt google">Google ile Giriş Yap</a>
				<div class="divider"><span>Ya da</span></div>
				<div class="form-group">
					<label>E-Posta</label>
					<input type="email" class="form-control" name="mail" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Parola</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-start">
						<label class="container_check">Beni hatırla
                            <input type="checkbox">
                            <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-end"><a id="forgot" href="javascript:void(0);">Şifreni mi unuttun?</a></div>
				</div>
				<div class="text-center">
					<input type="submit" name="loginC" value="Giriş Yap" class="btn_1 full-width mb_5">
					Hala bir hesabın yok mu? <a href="register.php">Üye Ol</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Lütfen aşağıdaki e-postanızı onaylayın</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>Parolanızı yeni bir tercih edilen parolayla sıfırlamanıza izin veren bir bağlantı içeren bir e-posta alacaksınız.</p>
					<div class="text-center"><input type="submit" value="Parolamı Sıfırla" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div> <?php
    }

    function scriptP(){ ?>
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="assets/js/sb-admin-2.min.js"></script> <?php
    }

    //Partner yan menü başlığı
    function headP(){ ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Yubirs Partner</title>
        <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="assets/css/sb-admin-2.min.css" rel="stylesheet"> <?php
    }

    function navbar3($baslik){ ?>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="position: fixed; top: 0; width: 100%; color: white;">
            <div class="container">
                <a class="navbar-brand" href="index.php">Yubirs</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-flex" id="navbarNavDropdown">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <span style="color: black;"><?php echo $baslik; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </nav><?php
    }

    function sidebarP(){
        loginControlP(); ?>
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text mx-3">Yubirs Partner</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Panel</span></a>
            </li>

            <!--  -->
            <hr class="sidebar-divider d-none d-md-block">
            <div class="sidebar-heading">
                Listeler
            </div>
            <li class="nav-item">
                <a class="nav-link" href="categorie.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Kategoriler</span>
                </a>
            </li>
            <li class="nav-item" style="margin-top: -20px;">
                <a class="nav-link" href="meal.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Yemekler</span>
                </a>
            </li>

            <!--  -->
            <hr class="sidebar-divider d-none d-md-block">
            <div class="sidebar-heading">
                Listeler
            </div>
            <li class="nav-item">
                <a class="nav-link" href="staff.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Personel Listesi</span>
                </a>
            </li>
            <li class="nav-item" style="margin-top: -20px;">
                <a class="nav-link" href="earning.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Kazanç Listesi</span>
                </a>
            </li>

            <!--  -->
            <hr class="sidebar-divider d-none d-md-block">
            <div class="sidebar-heading">
                Tablolar
            </div>
            <li class="nav-item">
                <a class="nav-link" href="order.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Sipariş Geçmişi</span>
                </a>
            </li>
            <li class="nav-item" style="margin-top: -20px;">
                <a class="nav-link" href="log.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>İşlem Geçmişi</span>
                </a>
            </li>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider d-none d-md-block"> -->

            <!-- Sidebar Toggler (Sidebar) -->
            <!-- <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> -->

        </ul>
        <!-- End of Sidebar --> <?php
    }

    //Partner footerı
    function footerP(){ ?>
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                © 2023 Telif hakkı sahibi
                <a style="text-decoration: none; color: rgb(71, 71, 71)" href="index.php">www.Yubirs.com</a>
                | Tüm hakları Saklıdır
                </div>
            </div>
        </footer><?php
    }

    function topbarP(){ ?>
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <form class="form-inline">
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                            placeholder="Search for..." aria-label="Search"
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">1+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Bildirimler
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-file-alt text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">13.03.2023</div>
                        <span class="font-weight-bold">Aylık rapor indirilmeye hazır!</span>
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Daha Fazla Bildirim Göster</a>
            </div>
        </li>

        <!-- Nav Item - Messages -->
        <!-- <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                < !-- Mesaj Sayacı -- >
                <span class="badge badge-danger badge-counter">7</span>
            </a>
            < !-- Mesajlar -- >
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                    Mesajlar
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                            alt="...">
                        <div class="status-indicator bg-warning"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Last months report looks great, I am very happy with
                            the progress so far, keep up the good work!</div>
                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Daha Fazla Mesaj Göster</a>
            </div>
        </li> -->

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["partnerName"]; ?></span>
                <img class="img-profile rounded-circle"
                    src="../partner/assets/img/undraw_profile.svg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile.php">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profil
                </a>
                <a class="dropdown-item" href="business.php">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    İşletme
                </a>
                <a class="dropdown-item" href="settings.php">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Ayarlar
                </a>
                <a class="dropdown-item" href="log.php">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    İşlem Geçmişi
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Çıkış Yap
                </a>
            </div>
        </li>
    </ul>
    </nav> <?php
    }

    //Partner çıkış ekranı
    function logoutP(){ ?>
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Çıkış yapmaya hazır mısın?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Geçerli oturumunuzu sonlandırmaya hazırsanız aşağıdan "Çıkış"ı seçin.</div>
                    <div class="modal-footer">
                        <form action="../includes/transactions.php" method="POST">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">İptal</button>
                            <button class="btn btn-primary" type="submit" name="logoutP">Çıkış</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> <?php
    }

    function takwAwayCTimes(){  ?>
        <!-- <li>
            <input type="radio" id="time_1" name="time" value="08.30pm">
            <label for="time_1">12.30<em>-40%</em></label>
        </li> -->
        <!-- <h4>Şiparişi Anında Ver</h4> -->
        <li><input type="radio" id="time_0" name="time" value="Simdi"><label for="time_0">Şimdi</label></li>
        <hr>
        <h4>Sİparİş Planla</h4>
        <li><input type="radio" id="time_1" name="time" value="00:00"><label for="time_1">00:00</label></li>
        <li><input type="radio" id="time_2" name="time" value="00:30"><label for="time_2">00:30</label></li>
        <li><input type="radio" id="time_3" name="time" value="01:00"><label for="time_3">01:00</label></li>
        <li><input type="radio" id="time_4" name="time" value="01:30"><label for="time_4">01:30</label></li>
        <li><input type="radio" id="time_5" name="time" value="02:00"><label for="time_5">02:00</label></li>
        <li><input type="radio" id="time_6" name="time" value="02:30"><label for="time_6">02:30</label></li>
        <li><input type="radio" id="time_7" name="time" value="03:00"><label for="time_7">03:00</label></li>
        <li><input type="radio" id="time_8" name="time" value="03:30"><label for="time_8">03:30</label></li>
        <li><input type="radio" id="time_9" name="time" value="04:00"><label for="time_9">04:00</label></li>
        <li><input type="radio" id="time_10" name="time" value="04:30"><label for="time_10">04:30</label></li>
        <li><input type="radio" id="time_11" name="time" value="05:00"><label for="time_11">05:00</label></li>
        <li><input type="radio" id="time_12" name="time" value="05:30"><label for="time_12">05:30</label></li>
        <li><input type="radio" id="time_13" name="time" value="06:00"><label for="time_13">06:00</label></li>
        <li><input type="radio" id="time_14" name="time" value="06:30"><label for="time_14">06:30</label></li>
        <li><input type="radio" id="time_15" name="time" value="07:00"><label for="time_15">07:00</label></li>
        <li><input type="radio" id="time_16" name="time" value="07:30"><label for="time_16">07:30</label></li>
        <li><input type="radio" id="time_17" name="time" value="08:00"><label for="time_17">08:00</label></li>
        <li><input type="radio" id="time_18" name="time" value="08:30"><label for="time_18">08:30</label></li>
        <li><input type="radio" id="time_19" name="time" value="09:00"><label for="time_19">09:00</label></li>
        <li><input type="radio" id="time_20" name="time" value="09:30"><label for="time_20">09:30</label></li>
        <li><input type="radio" id="time_21" name="time" value="10:00"><label for="time_21">10:00</label></li>
        <li><input type="radio" id="time_22" name="time" value="10:30"><label for="time_22">10:30</label></li>
        <li><input type="radio" id="time_23" name="time" value="11:00"><label for="time_23">11:00</label></li>
        <li><input type="radio" id="time_24" name="time" value="11:30"><label for="time_24">11:30</label></li>
        <li><input type="radio" id="time_25" name="time" value="12:00"><label for="time_25">12:00</label></li>
        <li><input type="radio" id="time_26" name="time" value="12:30"><label for="time_26">12:30</label></li>
        <li><input type="radio" id="time_27" name="time" value="13:00"><label for="time_27">13:00</label></li>
        <li><input type="radio" id="time_28" name="time" value="13:30"><label for="time_28">13:30</label></li>
        <li><input type="radio" id="time_29" name="time" value="14:00"><label for="time_29">14:00</label></li>
        <li><input type="radio" id="time_30" name="time" value="14:30"><label for="time_30">14:30</label></li>
        <li><input type="radio" id="time_31" name="time" value="15:00"><label for="time_31">15:00</label></li>
        <li><input type="radio" id="time_32" name="time" value="15:30"><label for="time_32">15:30</label></li>
        <li><input type="radio" id="time_33" name="time" value="16:00"><label for="time_33">16:00</label></li>
        <li><input type="radio" id="time_34" name="time" value="16:30"><label for="time_34">16:30</label></li>
        <li><input type="radio" id="time_35" name="time" value="17:00"><label for="time_35">17:00</label></li>
        <li><input type="radio" id="time_36" name="time" value="17:30"><label for="time_36">17:30</label></li>
        <li><input type="radio" id="time_37" name="time" value="18:00"><label for="time_37">18:00</label></li>
        <li><input type="radio" id="time_38" name="time" value="18:30"><label for="time_38">18:30</label></li>
        <li><input type="radio" id="time_39" name="time" value="19:00"><label for="time_39">19:00</label></li>
        <li><input type="radio" id="time_40" name="time" value="19:30"><label for="time_40">19:30</label></li>
        <li><input type="radio" id="time_41" name="time" value="20:00"><label for="time_41">20:00</label></li>
        <li><input type="radio" id="time_42" name="time" value="20:30"><label for="time_42">20:30</label></li>
        <li><input type="radio" id="time_43" name="time" value="21:00"><label for="time_43">21:00</label></li>
        <li><input type="radio" id="time_44" name="time" value="21:30"><label for="time_44">21:30</label></li>
        <li><input type="radio" id="time_45" name="time" value="22:00"><label for="time_45">22:00</label></li>
        <li><input type="radio" id="time_46" name="time" value="22:30"><label for="time_46">22:30</label></li>
        <li><input type="radio" id="time_47" name="time" value="23:00"><label for="time_47">23:00</label></li>
        <li><input type="radio" id="time_48" name="time" value="23:30"><label for="time_48">23:30</label></li>
        <?php
    }

    function takwAwayCDays(){  ?>
        <!-- <li>
            <input type="radio" id="day_1" name="day" value="Bugün">
            <label for="day_1">Bugün</label>
        </li> -->
        <li><input type="radio" id="day_0" name="day" value="Şimdi"><label for="day_0">Şimdi</label></li>
        <hr>
        <h4>Sİparİş Planla</h4>
        <li><input type="radio" id="day_1" name="day" value="Pazartesi"><label for="day_1">Pazartesi</label></li>
        <li><input type="radio" id="day_2" name="day" value="Salı"><label for="day_2">Salı</label></li>
        <li><input type="radio" id="day_3" name="day" value="Çarşamba"><label for="day_3">Çarşamba</label></li>
        <li><input type="radio" id="day_4" name="day" value="Perşembe"><label for="day_4">Perşembe</label></li>
        <li><input type="radio" id="day_5" name="day" value="Cuma"><label for="day_5">Cuma</label></li>
        <li><input type="radio" id="day_6" name="day" value="Cumartesi"><label for="day_6">Cumartesi</label></li>
        <li><input type="radio" id="day_7" name="day" value="Pazar"><label for="day_7">Pazar</label></li>
        <?php
    }

    function takwAwayPTimes(){  ?>
        <option value="00:00">00:00</option>
        <option value="00:30">00:30</option>
        <option value="01:00">01:00</option>
        <option value="01:30">01:30</option>
        <option value="02:00">02:00</option>
        <option value="02:30">02:30</option>
        <option value="03:00">03:00</option>
        <option value="03:30">03:30</option>
        <option value="04:00">04:00</option>
        <option value="04:30">04:30</option>
        <option value="05:00">05:00</option>
        <option value="05:30">05:30</option>
        <option value="06:00">06:00</option>
        <option value="06:30">06:30</option>
        <option value="07:00">07:00</option>
        <option value="07:30">07:30</option>
        <option value="08:00">08:00</option>
        <option value="08:30">08:30</option>
        <option value="09:00">09:00</option>
        <option value="09:30">09:30</option>
        <option value="10:00">10:00</option>
        <option value="10:30">10:30</option>
        <option value="11:00">11:00</option>
        <option value="11:30">11:30</option>
        <option value="12:00">12:00</option>
        <option value="12:30">12:30</option>
        <option value="13:00">13:00</option>
        <option value="13:30">13:30</option>
        <option value="14:00">14:00</option>
        <option value="14:30">14:30</option>
        <option value="15:00">15:00</option>
        <option value="15:30">15:30</option>
        <option value="16:00">16:00</option>
        <option value="16:30">16:30</option>
        <option value="17:00">17:00</option>
        <option value="17:30">17:30</option>
        <option value="18:00">18:00</option>
        <option value="18:30">18:30</option>
        <option value="19:00">19:00</option>
        <option value="19:30">19:30</option>
        <option value="20:00">20:00</option>
        <option value="20:30">20:30</option>
        <option value="21:00">21:00</option>
        <option value="21:30">21:30</option>
        <option value="22:00">22:00</option>
        <option value="22:30">22:30</option>
        <option value="23:00">23:00</option>
        <option value="23:30">23:30</option>
        <option value="24:00">24:00</option><?php
    }

    //Partner çalışma saatleri
    function takeAwayP1($day){
        include("connection.php");
        $sorgu1 = $conn->prepare("SELECT working1 FROM partners");
        $sorgu1->execute();
        $veri = $sorgu1->fetch(PDO::FETCH_ASSOC);?>
        <tr>
            <td><label style="width: 100px; margin-right: 50px;"><?php echo $day; ?></label></td>
            <td>
                <select name="working1o" class="form-control" id="exampleFormControlSelect1" style="width: 150px; margin-right: 50px;">
                    <option value="<?php echo substr($veri["working1"], 0, 5); ?>"><?php echo substr($veri["working1"], 0, 5); ?></option>
                    <?php takwAwayPTimes(); ?>
                </select>
            </td>
            <td>
                <select name="working1c" class="form-control" id="exampleFormControlSelect1" style="width: 150px; margin-right: 50px;">
                    <option value="<?php echo substr($veri["working1"], 6, 5); ?>"><?php echo substr($veri["working1"], 6, 5); ?></option>
                    <?php takwAwayPTimes(); ?>
                </select>
            </td>
            <td>
                <select name="working1s" class="form-control" id="exampleFormControlSelect1" style="width: 150px;"><?php
                if(substr($veri["working1"], -1)==1){ ?>
                    <option selected value="1">Açık</option>
                    <option value="0">Kapalı</option> <?php
                }else{ ?>
                    <option value="1">Açık</option>
                    <option selected value="0">Kapalı</option> <?php
                } ?>
                </select>
            </td>
        </tr> <?php
    }
    function takeAwayP2($day){
        include("connection.php");
        $sorgu1 = $conn->prepare("SELECT working2 FROM partners");
        $sorgu1->execute();
        $veri = $sorgu1->fetch(PDO::FETCH_ASSOC);?>
        <tr>
            <td><label style="width: 100px; margin-right: 50px;"><?php echo $day; ?></label></td>
            <td>
                <select name="working2o" class="form-control" id="exampleFormControlSelect1" style="width: 150px; margin-right: 50px;">
                    <option value="<?php echo substr($veri["working2"], 0, 5); ?>"><?php echo substr($veri["working2"], 0, 5); ?></option>
                    <?php takwAwayPTimes(); ?>
                </select>
            </td>
            <td>
                <select name="working2c" class="form-control" id="exampleFormControlSelect1" style="width: 150px; margin-right: 50px;">
                    <option value="<?php echo substr($veri["working2"], 6, 5); ?>"><?php echo substr($veri["working2"], 6, 5); ?></option>
                    <?php takwAwayPTimes(); ?>
                </select>
            </td>
            <td>
                <select name="working2s" class="form-control" id="exampleFormControlSelect1" style="width: 150px;"><?php
                if(substr($veri["working2"], -1)==1){ ?>
                    <option selected value="1">Açık</option>
                    <option value="0">Kapalı</option> <?php
                }else{ ?>
                    <option value="1">Açık</option>
                    <option selected value="0">Kapalı</option> <?php
                } ?>
                </select>
            </td>
        </tr> <?php
    }
    function takeAwayP3($day){
        include("connection.php");
        $sorgu1 = $conn->prepare("SELECT working3 FROM partners");
        $sorgu1->execute();
        $veri = $sorgu1->fetch(PDO::FETCH_ASSOC);?>
        <tr>
            <td><label style="width: 100px; margin-right: 50px;"><?php echo $day; ?></label></td>
            <td>
                <select name="working3o" class="form-control" id="exampleFormControlSelect1" style="width: 150px; margin-right: 50px;">
                    <option value="<?php echo substr($veri["working3"], 0, 5); ?>"><?php echo substr($veri["working3"], 0, 5); ?></option>
                    <?php takwAwayPTimes(); ?>
                </select>
            </td>
            <td>
                <select name="working3c" class="form-control" id="exampleFormControlSelect1" style="width: 150px; margin-right: 50px;">
                    <option value="<?php echo substr($veri["working3"], 6, 5); ?>"><?php echo substr($veri["working3"], 6, 5); ?></option>
                    <?php takwAwayPTimes(); ?>
                </select>
            </td>
            <td>
                <select name="working3s" class="form-control" id="exampleFormControlSelect1" style="width: 150px;"><?php
                if(substr($veri["working3"], -1)==1){ ?>
                    <option selected value="1">Açık</option>
                    <option value="0">Kapalı</option> <?php
                }else{ ?>
                    <option value="1">Açık</option>
                    <option selected value="0">Kapalı</option> <?php
                } ?>
                </select>
            </td>
        </tr> <?php
    }
    function takeAwayP4($day){
        include("connection.php");
        $sorgu1 = $conn->prepare("SELECT working4 FROM partners");
        $sorgu1->execute();
        $veri = $sorgu1->fetch(PDO::FETCH_ASSOC);?>
        <tr>
            <td><label style="width: 100px; margin-right: 50px;"><?php echo $day; ?></label></td>
            <td>
                <select name="working4o" class="form-control" id="exampleFormControlSelect1" style="width: 150px; margin-right: 50px;">
                    <option value="<?php echo substr($veri["working4"], 0, 5); ?>"><?php echo substr($veri["working4"], 0, 5); ?></option>
                    <?php takwAwayPTimes(); ?>
                </select>
            </td>
            <td>
                <select name="working4c" class="form-control" id="exampleFormControlSelect1" style="width: 150px; margin-right: 50px;">
                    <option value="<?php echo substr($veri["working4"], 6, 5); ?>"><?php echo substr($veri["working4"], 6, 5); ?></option>
                    <?php takwAwayPTimes(); ?>
                </select>
            </td>
            <td>
                <select name="working4s" class="form-control" id="exampleFormControlSelect1" style="width: 150px;"><?php
                if(substr($veri["working4"], -1)==1){ ?>
                    <option selected value="1">Açık</option>
                    <option value="0">Kapalı</option> <?php
                }else{ ?>
                    <option value="1">Açık</option>
                    <option selected value="0">Kapalı</option> <?php
                } ?>
                </select>
            </td>
        </tr> <?php
    }
    function takeAwayP5($day){
        include("connection.php");
        $sorgu1 = $conn->prepare("SELECT working5 FROM partners");
        $sorgu1->execute();
        $veri = $sorgu1->fetch(PDO::FETCH_ASSOC);?>
        <tr>
            <td><label style="width: 100px; margin-right: 50px;"><?php echo $day; ?></label></td>
            <td>
                <select name="working5o" class="form-control" id="exampleFormControlSelect1" style="width: 150px; margin-right: 50px;">
                    <option value="<?php echo substr($veri["working5"], 0, 5); ?>"><?php echo substr($veri["working5"], 0, 5); ?></option>
                    <?php takwAwayPTimes(); ?>
                </select>
            </td>
            <td>
                <select name="working5c" class="form-control" id="exampleFormControlSelect1" style="width: 150px; margin-right: 50px;">
                    <option value="<?php echo substr($veri["working5"], 6, 5); ?>"><?php echo substr($veri["working5"], 6, 5); ?></option>
                    <?php takwAwayPTimes(); ?>
                </select>
            </td>
            <td>
                <select name="working5s" class="form-control" id="exampleFormControlSelect1" style="width: 150px;"><?php
                if(substr($veri["working5"], -1)==1){ ?>
                    <option selected value="1">Açık</option>
                    <option value="0">Kapalı</option> <?php
                }else{ ?>
                    <option value="1">Açık</option>
                    <option selected value="0">Kapalı</option> <?php
                } ?>
                </select>
            </td>
        </tr> <?php
    }
    function takeAwayP6($day){
        include("connection.php");
        $sorgu1 = $conn->prepare("SELECT working6 FROM partners");
        $sorgu1->execute();
        $veri = $sorgu1->fetch(PDO::FETCH_ASSOC);?>
        <tr>
            <td><label style="width: 100px; margin-right: 50px;"><?php echo $day; ?></label></td>
            <td>
                <select name="working6o" class="form-control" id="exampleFormControlSelect1" style="width: 150px; margin-right: 50px;">
                    <option value="<?php echo substr($veri["working6"], 0, 5); ?>"><?php echo substr($veri["working6"], 0, 5); ?></option>
                    <?php takwAwayPTimes(); ?>
                </select>
            </td>
            <td>
                <select name="working6c" class="form-control" id="exampleFormControlSelect1" style="width: 150px; margin-right: 50px;">
                    <option value="<?php echo substr($veri["working6"], 6, 5); ?>"><?php echo substr($veri["working6"], 6, 5); ?></option>
                    <?php takwAwayPTimes(); ?>
                </select>
            </td>
            <td>
                <select name="working6s" class="form-control" id="exampleFormControlSelect1" style="width: 150px;"><?php
                if(substr($veri["working6"], -1)==1){ ?>
                    <option selected value="1">Açık</option>
                    <option value="0">Kapalı</option> <?php
                }else{ ?>
                    <option value="1">Açık</option>
                    <option selected value="0">Kapalı</option> <?php
                } ?>
                </select>
            </td>
        </tr> <?php
    }
    function takeAwayP7($day){
        include("connection.php");
        $sorgu1 = $conn->prepare("SELECT working7 FROM partners");
        $sorgu1->execute();
        $veri = $sorgu1->fetch(PDO::FETCH_ASSOC);?>
        <tr>
            <td><label style="width: 100px; margin-right: 50px;"><?php echo $day; ?></label></td>
            <td>
                <select name="working7o" class="form-control" id="exampleFormControlSelect1" style="width: 150px; margin-right: 50px;">
                    <option value="<?php echo substr($veri["working7"], 0, 5); ?>"><?php echo substr($veri["working7"], 0, 5); ?></option>
                    <?php takwAwayPTimes(); ?>
                </select>
            </td>
            <td>
                <select name="working7c" class="form-control" id="exampleFormControlSelect1" style="width: 150px; margin-right: 50px;">
                    <option value="<?php echo substr($veri["working7"], 6, 5); ?>"><?php echo substr($veri["working7"], 6, 5); ?></option>
                    <?php takwAwayPTimes(); ?>
                </select>
            </td>
            <td>
                <select name="working7s" class="form-control" id="exampleFormControlSelect1" style="width: 150px;"> <?php
                if(substr($veri["working7"], -1)==1){ ?>
                    <option selected value="1">Açık</option>
                    <option value="0">Kapalı</option> <?php
                }else{ ?>
                    <option value="1">Açık</option>
                    <option selected value="0">Kapalı</option> <?php
                } ?>
                </select>
            </td>
        </tr> <?php
    }
?>