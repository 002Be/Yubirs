<?php
    require_once("../includes/sections.php");
    require_once("../includes/connection.php");
    $sorgu = $conn->prepare("SELECT * FROM staff_P WHERE partnerId=? AND status=1");
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
                        <h1 class="h3 mb-0 text-gray-800">Personeller</h1>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
                            Personel Ekle
                        </button>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Personel Tablosu</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 100px;">#</th>
                                            <th>Adı</th>
                                            <th>Soyadı</th>
                                            <th>E-Posta</th>
                                            <th>Telefon Numarası</th>
                                            <th>Giriş Kodu</th>
                                            <th>İşlem</th>
                                        </tr>
                                    </thead>
                                    <tbody> <?php
                                        $sayac = 0;
                                        while($veri = $sorgu->fetch(PDO::FETCH_ASSOC)){ 
                                            $sayac++; ?>
                                            <tr>
                                                <td><?php echo $sayac; ?></td>
                                                <td><?php echo $veri["name"]; ?></td>
                                                <td><?php echo $veri["surname"]; ?></td>
                                                <td><?php echo $veri["mail"]; ?></td>
                                                <td><?php echo $veri["phone"]; ?></td>
                                                <td><?php echo $veri["code"]; ?></td>
                                                <td style="width: 40px;">
                                                    <form action="../includes/transactions.php" method="POST">
                                                        <button type="submit" name="staffDeleteP" value="<?php echo $veri["id"]; ?>" class="btn btn-outline-danger">Sil</button>
                                                    </form>
                                                </td>
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

    <!-- Create Modal-->
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Personel Ekle</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="../includes/transactions.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputText1">Adı</label>
                            <input name="name" type="text" class="form-control" id="exampleInputText1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText2">Soyadı</label>
                            <input name="surname" type="text" class="form-control" id="exampleInputText2" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-Posta</label>
                            <input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText3">Telefon Numarası</label>
                            <input name="phone" type="text" class="form-control" id="exampleInputText3" value="">
                        </div>
                        <label for="exampleInputText4">Kod Üret</label>
                        <input name="code" type="hidden" id="exampleInputText5">
                        <div class="form-group input-group">
                            <input type="text" id="exampleInputText4" class="form-control" aria-describedby="button-addon2" disabled>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" onclick="parolaOlustur()" id="button-addon2">Üret</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">İptal</button>
                        <button name="staffCreatP" class="btn btn-primary" type="submit">Ekle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" language="javascript">
        function parolaOlustur(){
            var chars = "0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            var passwordLength = 40;
            var password = "";
            for (var i = 0; i <= passwordLength; i++) {
                var randomNumber = Math.floor(Math.random() * chars.length);
                password += chars.substring(randomNumber, randomNumber +1);
            }
            document.getElementById("exampleInputText4").value = password;
            document.getElementById("exampleInputText5").value = password;
        }
    </script>

    <!-- Script -->
    <?php scriptP(); ?>
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/demo/datatables-demo.js"></script>
</body>
</html>