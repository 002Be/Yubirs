<?php
    require_once("../includes/sections.php");
    require_once("../includes/connection.php");
    $sorgu2 = $conn->prepare("SELECT * FROM order_c WHERE partnerId=? ORDER BY time DESC");
    $sorgu2->execute([$_SESSION["partnerId"]]);
    $toplamKazanc = 0;
    $sil = 0;
    while($veri1 = $sorgu2->fetch(PDO::FETCH_ASSOC)){ $toplamKazanc += $veri1["price"]; $sil++; }
    $sorgu1 = $conn->prepare("SELECT working1, working2, working3, working4, working5, working6, working7 FROM partners");
    $sorgu1->execute();
    $veri = $sorgu1->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php headP(); ?>
    </head>
    <body id="page-top">
        <div id="wrapper">
            <?php sidebarP(); ?>
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <?php topbarP(); ?>

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Panel</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i> PDF Olarak Kaydet</a>
                        </div>

                        <!-- Content Row -->
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Kazanç (Aylık)</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $toplamKazanc; ?>₺</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Kazanç (Tüm Zamanlar)</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $toplamKazanc; ?>₺</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                    Restoran Durumu (Anlık)
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto"><?php
                                                    $day = date("l");
                                                    switch ($day) {
                                                        case "Monday":
                                                            $dayn = 1;
                                                            break;
                                                        case "Tuesday":
                                                            $dayn = 2;
                                                            break;
                                                        case "Wednesday":
                                                            $dayn = 3;
                                                            break;
                                                        case "Thursday":
                                                            $dayn = 4;
                                                            break;
                                                        case "Friday":
                                                            $dayn = 5;
                                                            break;
                                                        case "Saturday":
                                                            $dayn = 6;
                                                            break;
                                                        default:
                                                            $dayn = 7;
                                                    }

                                                    if(substr($veri["working".$dayn], -1)==1){ ?>
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><label style="color: forestgreen;">Açık</label></div> <?php
                                                    }else{ ?>
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><label style="color: red;">Kapalı</label></div> <?php
                                                    } ?>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    Sipariş Adeti (Aylık)
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $sil; ?></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Row -->

                        <div class="row">

                            <!-- Area Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Kazanç Geçmişi</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuLink">
                                                <div class="dropdown-header">Dropdown Header:</div>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <canvas id="myAreaChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pie Chart -->
                            <div class="col-xl-4 col-lg-5">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuLink">
                                                <div class="dropdown-header">Dropdown Header:</div>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-pie pt-4 pb-2">
                                            <canvas id="myPieChart"></canvas>
                                        </div>
                                        <div class="mt-4 text-center small">
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-primary"></i> Gelir
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-success"></i> Gider
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-info"></i> Kar
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Row -->
                        <div class="row">

                            <!-- Content Column -->
                            <div class="col-lg-6 mb-4">

                                <!-- Project Card Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Menüler</h6>
                                        Tüm yemeklerin aylık satış oranları burada gözükecek
                                    </div>
                                    <div class="card-body">
                                        <h4 class="small font-weight-bold">Server Migration <span
                                                class="float-right">20%</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Sales Tracking <span
                                                class="float-right">40%</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Customer Database <span
                                                class="float-right">60%</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar" role="progressbar" style="width: 60%"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Payout Details <span
                                                class="float-right">80%</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Account Setup <span
                                                class="float-right">Complete!</span></h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-4">

                                <!-- Illustrations -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Destek</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="assets/img/undraw_posting_photo.svg" alt="...">
                                        </div>
                                        <p>Bir sorunla karşılaşırsanız veya bize sormak istediğiniz bir şey varsa,</p>
                                        <a target="_blank" rel="nofollow" href="https://undraw.co/">Buradan bizimle iletişim kurabilirsiniz &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php footerP(); ?>
            </div>
        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <?php logoutP(); ?>

        <!-- Script -->
        <?php scriptP(); ?>
        <script src="assets/vendor/chart.js/Chart.min.js"></script>
        <script src="assets/js/demo/chart-area-demo.js"></script>
        <script src="assets/js/demo/chart-pie-demo.js"></script>
    </body>
</html>