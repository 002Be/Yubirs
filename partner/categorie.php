<?php
    require_once("../includes/sections.php");
    require_once("../includes/connection.php");
    $sorgu = $conn->prepare("SELECT * FROM categorie_P");
    $sorgu->execute();
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
                        <h1 class="h3 mb-0 text-gray-800">Kategoriler</h1>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
                            Kategori Ekle
                        </button>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Kategori Tablosu</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 100px;">#</th>
                                            <th>Kategori Adı</th>
                                            <th>Kategori Açıklaması</th>
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
                                                <td><?php echo $veri["description"]; ?></td>
                                                <?php
                                                if($veri["partnerId"] == $_SESSION["partnerId"]){ ?>
                                                    <td style="width: 400px;">
                                                        <p>Bu kategori sizin tarafınızdan eklenmiştir.</p>
                                                        <!-- <form action="../includes/transactions.php" method="POST">
                                                            <button type="submit" name="categorieDeleteP" value="<?php echo $veri["id"]; ?>" class="btn btn-outline-danger">Kategoriyi Sil</button>
                                                        </form> -->
                                                    </td> <?php
                                                }else{ ?>
                                                    <td style="width: 400px;">
                                                        <p>Bu kategori bir başkası tarafından eklenmiştir.</p>
                                                    </td> <?php
                                                } ?>
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
                    <h5 class="modal-title" id="exampleModalLabel">Kategori Ekle</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="../includes/transactions.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputText1">Kategori Adı</label>
                            <input name="name" type="text" class="form-control" id="exampleInputText1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText2">Kategori Açıklaması</label>
                            <textarea name="description" class="form-control" id="exampleInputText2" rows="3"></textarea>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1" required>Kategori ekleme koşullarını okudum onaylıyorum.</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">İptal</button>
                        <button name="categorieCreatP" class="btn btn-primary" type="submit">Ekle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Script -->
    <?php scriptP(); ?>
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/demo/datatables-demo.js"></script>
</body>
</html>