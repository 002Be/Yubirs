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
                    <div class="container" style="background-color: white;">
                    <br>
                        <form action="../includes/transactions.php" method="POST">
                            <div class="form-group">
                                <label>Şirket Adı</label>
                                <input name="businessName" type="text" class="form-control" required value="<?php echo $veri["businessName"]; ?>">
                            </div>
                            <div class="form-group">
                                <label>Şirket Adresi</label>
                                <input name="businessAddress" type="text" class="form-control" required value="<?php echo $veri["businessAddress"]; ?>">
                            </div>
                            <div class="form-group">
                                <label>Şirket Telefon Numarası</label>
                                <input name="businessPhone" type="text" class="form-control" required value="<?php echo $veri["businessPhone"]; ?>">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Paket Servisi</label>
                                <select name="delivery" class="form-control" id="exampleFormControlSelect1">
                                <?php
                                    if($veri["delivery"]==1){ ?>
                                    <option value="1" selected>Var</option>
                                    <option value="0">Yok</option> <?php
                                    }else{ ?>
                                    <option value="1">Var</option>
                                    <option value="0" selected>Yok</option> <?php
                                    } ?>
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Minimum Tutar</label>
                                <input name="minAmount" type="text" class="form-control" required value="<?php echo $veri["minAmount"]; ?>">
                            </div>
                            <hr>
                            <h5>Çalışma Saatleri</h5>
                            <div class="form-group">
                                <div class="container">
                                    <table>
                                        <tr>
                                            <td></td>
                                            <td>Açılış</td>
                                            <td>Kapanış</td>
                                            <td>Durum</td>
                                        </tr>
                                        <tr>
                                            <?php takeAwayP1("Pazartesi"); ?>
                                        </tr>
                                        <tr>
                                            <?php takeAwayP2("Salı"); ?>
                                        </tr>
                                        <tr>
                                            <?php takeAwayP3("Çarşamba"); ?>
                                        </tr>
                                        <tr>
                                            <?php takeAwayP4("Perşembe"); ?>
                                        </tr>
                                        <tr>
                                            <?php takeAwayP5("Cuma"); ?>
                                        </tr>
                                        <tr>
                                            <?php takeAwayP6("Cumartesi"); ?>
                                        </tr>
                                        <tr>
                                            <?php takeAwayP7("Pazar"); ?>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $veri["id"]; ?>">
                            <div class="modal-footer">
                                <a href="business.php" type="button" class="btn btn-secondary">İptal</a>
                                <!-- <button name="deletePartners" value="< ?php echo $_SESSION["partnerId"]; ? >" type="submit" class="btn btn-danger">Hesabı Kalıcı Olarak Sil</button> -->
                                <button name="updateBusinessP" type="submit" class="btn btn-primary">Kaydet</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End of Main Content -->

                <div style="margin-top: 25px;"></div>

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