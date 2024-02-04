<?php
    require_once("../includes/sections.php");
    require_once("../includes/connection.php");
    $sorgu = $conn->prepare("SELECT * FROM meal_P WHERE partnerId=? AND status=1");
    $sorgu->execute([$_SESSION["partnerId"]]);
    $sorgu2 = $conn->prepare("SELECT * FROM categorie_P");
    $sorgu2->execute();
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
                        <h1 class="h3 mb-0 text-gray-800">Yemekler</h1>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
                            Yemek Ekle
                        </button>
                    </div>

                    <?php
                    if(isset($_GET["id"])){ 
                        $sorgu3 = $conn->prepare("SELECT * FROM meal_P WHERE id=?");
                        $sorgu3->execute([$_GET["id"]]);
                        $veri3 = $sorgu3->fetch(PDO::FETCH_ASSOC);
                        ?>
                    <div class="container" style="width: 600px;">
                        <form action="../includes/transactions.php" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputText1">Yemek Adı</label>
                                    <input name="name" value="<?php echo $veri3["name"]; ?>" type="text" class="form-control" id="exampleInputText1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputText2">Yemek Açıklaması</label>
                                    <textarea name="description" class="form-control" id="exampleInputText2" rows="3"><?php echo $veri3["description"]; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputText3">Yemek Fiyatı</label>
                                    <input name="price" value="<?php echo $veri3["price"]; ?>" type="text" class="form-control" id="exampleInputText3">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputText3">İndirim Uygula</label>
                                    <input name="discount" value="<?php echo $veri3["discount"]; ?>" type="text" class="form-control" id="exampleInputText3">
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="categorie" class="custom-select custom-select mb-3"><?php
                                        while($veri2 = $sorgu2->fetch(PDO::FETCH_ASSOC)){
                                            if($veri2["id"]==$veri3["categorie"]){?>
                                            <option selected value="<?php echo $veri2["id"] ?>"><?php echo $veri2["name"] ?></option> <?php
                                            } ?>
                                        <option value="<?php echo $veri2["id"] ?>"><?php echo $veri2["name"] ?></option><?php
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                    <label class="form-check-label" for="exampleCheck1" required>Yemek ekleme koşullarını okudum onaylıyorum.</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-secondary" type="button" href="meal.php">İptal</a>
                                <button name="mealUpdateP" value="<?php echo $_GET["id"]; ?>" class="btn btn-primary" type="submit">Kaydet</button>
                            </div>
                        </form>
                    </div>
                    <?php } ?>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Yemek Tablosu</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Adı</th>
                                            <th>Açıklaması</th>
                                            <th>Fiyatı</th>
                                            <th>İndirim</th>
                                            <th>Kategori</th>
                                            <th>Resim</th>
                                            <th>İşlem</th>
                                        </tr>
                                    </thead>
                                    <tbody> <?php
                                        $sayac = 0;
                                        while($veri1 = $sorgu->fetch(PDO::FETCH_ASSOC)){
                                            $sayac++; ?>
                                            <tr>
                                                <td><?php echo $sayac; ?></td>
                                                <td><?php echo $veri1["name"]; ?></td>
                                                <td><?php echo $veri1["description"]; ?></td>
                                                <td><?php echo $veri1["price"]; ?></td>
                                                <td><?php
                                                if($veri1["discount"]==0){echo "Yok";}
                                                else{echo "%".$veri1["discount"]; }
                                                ?></td>
                                                <td><?php echo $veri1["categorie"]; ?></td>
                                                <td>
                                                    <form action="../includes/transactions.php" method="POST" enctype="multipart/form-data" style="width: 250px;">
                                                        <input type="file" name="resimPartnerYemek" accept="image/*" >
                                                        <input type="submit" value="Resim Yükle" class="btn btn-outline-secondary">
                                                        <input type="hidden" name="mealId" value="<?php echo $veri1["id"]; ?>">
                                                    </form>
                                                </td>
                                                <td style="width: 150px;">
                                                    <form action="../includes/transactions.php" method="POST">
                                                        <a href="?id=<?php echo $veri1["id"]; ?>" class="btn btn-outline-secondary">Düzenle</a>
                                                        <button type="submit" name="mealDeleteP" value="<?php echo $veri1["id"]; ?>" class="btn btn-outline-danger">X</button>
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
                    <h5 class="modal-title" id="exampleModalLabel">Yemek Ekle</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="../includes/transactions.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputText1">Yemek Adı</label>
                            <input name="name" type="text" class="form-control" id="exampleInputText1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText2">Yemek Açıklaması</label>
                            <textarea name="description" class="form-control" id="exampleInputText2" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText3">Yemek Fiyatı</label>
                            <input name="price" type="text" class="form-control" id="exampleInputText3">
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="categorie" class="custom-select custom-select mb-3">
                                <option selected disabled>Kategori seçiniz</option> <?php
                                while($veri2 = $sorgu2->fetch(PDO::FETCH_ASSOC)){ ?>
                                <option value="<?php echo $veri2["id"] ?>"><?php echo $veri2["name"] ?></option><?php
                                } ?>
                            </select>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1" required>Yemek ekleme koşullarını okudum onaylıyorum.</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">İptal</button>
                        <button name="mealCreatP" class="btn btn-primary" type="submit">Ekle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php scriptP(); ?>

    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>
</body>
</html>