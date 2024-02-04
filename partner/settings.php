<?php
    require_once("../includes/sections.php");
    require_once("../includes/connection.php");
    $sorgu = $conn->prepare("SELECT * FROM partners WHERE id=?");
    $sorgu->execute([$_SESSION["partnerId"]]);
    $veri = $sorgu->fetch(PDO::FETCH_ASSOC);
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

                    <!-- Sayfa İçeriği -->
                    <div class="container" style="background-color: white; margin-top: 120px">
                    <br>
                        <div class="form-group">
                            <label>İşletme Resmi</label>
                            <br>
                            <form action="../includes/transactions.php" method="POST" enctype="multipart/form-data">
                                <input type="file" name="resimPartnerSirket" accept="image/*">
                                <br><br>
                                <div class="modal-footer">
                                    <a href="settings.php" type="button" class="btn btn-secondary">İptal</a>
                                    <button name="settingsBusinessImageP" type="submit" class="btn btn-primary">Kaydet</button>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="form-group">
                            <label>Soyadı</label>
                            <input name="surname" type="text" class="form-control" required value="< ?php echo $veri["surname"]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Mail Adresi</label>
                            <input name="mail" type="email" class="form-control" required value="< ?php echo $veri["mail"]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Telefon Numarası</label>
                            <input name="phone" type="text" class="form-control" required value="< ?php echo $veri["phone"]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Parola</label>
                            <input name="password" type="text" class="form-control" value="< ?php echo $veri["password"]; ?>">
                        </div>
                        <div class="modal-footer">
                            <a href="profile.php" type="button" class="btn btn-secondary">İptal</a>
                            <button name="updateProfileP" value="< ?php echo $veri["id"]; ?>" type="submit" class="btn btn-primary">Kaydet</button>
                        </div> -->
                    </div>
                </div>
                <!-- End of Main Content -->

                <?php footerP(); ?>
            </div>
        </div>

        <!-- Kaydırma Düğmesi-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Çıkış Yap -->
        <?php logoutP(); ?>

        <!-- Script -->
        <?php scriptP(); ?>
    </body>
</html>