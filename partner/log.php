<?php
    require_once("../includes/sections.php");
    require_once("../includes/connection.php");
    $sorgu = $conn->prepare("SELECT * FROM log_P WHERE partnerId=? ORDER BY time DESC");
    $sorgu->execute([$_SESSION["partnerId"]]);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php headP(); ?>
    </head>
    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <?php sidebarP(); ?>

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <?php topbarP(); ?>

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">İşlem Geçmişi</h1>
                        </div>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">İşlem Geçmişi Tablosu</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>İşlem</th>
                                                <th>İşlem Tarihi</th>
                                            </tr>
                                        </thead>
                                        <tbody> <?php
                                            $sayac = 0;
                                            while($veri1 = $sorgu->fetch(PDO::FETCH_ASSOC)){ 
                                                $sayac++; ?>
                                                <tr>
                                                    <td><?php echo $sayac; ?></td>
                                                    <td><?php echo $veri1["process"]; ?></td>
                                                    <td><?php echo $veri1["time"]; ?></td>
                                                </tr>
                                                <?php
                                                } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <?php footerP(); ?>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <?php logoutP(); ?>

        <?php scriptP(); ?>

        <!-- Page level plugins -->
        <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="assets/js/demo/datatables-demo.js"></script>
    </body>
</html>