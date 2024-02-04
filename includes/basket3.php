<<<<<<< HEAD
<?php
    include("connection.php");
    $sorguu1 = $conn->prepare("SELECT * FROM meal_p WHERE status=1");
    $sorguu1->execute();
    
    if(isset($_GET["sepettencikartildi"])){
        $_SESSION["sepet"] = str_replace($_GET["sepettencikartildi"], " ", $_SESSION["sepet"]);
        $_SESSION["sepetPartner"] = str_replace($_GET["sepettencikart"], " ", $_SESSION["sepetPartner"]);
    }
?>
<div class="col-lg-4" id="sidebar_fixed">
    <div class="box_order mobile_fixed">
        <div class="head">
            <h3><?php echo $lang["Basket3_SiparisOzeti"]; ?></h3>
            <a href="#0" class="close_panel_mobile"><i class="icon_close"></i></a>
        </div>
        <!-- /head -->
        <div class="main">
            <?php
                $adres = "https://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
                $sayacSepet = 0;
                if(isset($_SESSION["sepet"])){
                    $toplamFiyat = 0;
                    ?> <ul class="clearfix"> <?php
                    while($yemek = $sorguu1->fetch(PDO::FETCH_ASSOC)){
                        $yemekler = explode("|", $_SESSION["sepet"]);
                        foreach ($yemekler as $key) {
                            if($yemek["id"]==$key){
                                $sayacSepet++;
                                $toplamFiyat += $yemek["price"]; ?>
                            <div class="card mb-3">
                                <?php
                                if(strstr($adres, "index.php")){ ?>
            <a href="index.php?sepettencikartildi=<?php echo $yemek["id"]; ?>&sepettencikart=<?php echo $yemek["partnerId"]; ?>" style="text-decoration: none; color: black;" onclick="fun()"> <?php
                                }else{ ?>
            <a href="<?php echo $adres; ?>&sepettencikartildi=<?php echo $yemek["id"]; ?>&sepettencikart=<?php echo $yemek["id"]; ?>" style="text-decoration: none; color: black;" onclick="fun()"> <?php
                                }
                                ?>
                                <li>
                                    <?php echo $yemek["name"]; ?></a><span><?php echo $yemek["price"]." ₺"; ?></span>
                                </li>
                            </div> <?php
                            }
                        }
                    }
                    ?></ul><?php
                    if($sayacSepet==0){
                        $_SESSION["sepet"] = "";
                        $_SESSION["sepetPartner"] = "";
                    }
                }else{
                    // echo "Sepetiniz boş";
                } ?>
            <hr>
            <ul class="clearfix">
                <!-- <li>Ara toplam<span>< ?php echo $toplamFiyat; ?>₺</span></li>
                <li>Teslimat ücreti<span>10₺</span></li> -->
                <li class="total"><?php echo $lang["Basket3_Toplam"]; ?><span><?php echo $toplamFiyat; ?>₺</span></li>
                <!-- <hr> --><br>
                <div class="dropdown">
                <?php echo $lang["Basket3_Tarih"]; ?>Şimdi
                    <br>
                    <?php echo $lang["Basket3_Saat"]; ?>Şimdi
                    <br>
                    <?php echo $lang["Basket3_Adres"]; ?>GÖLHİSAR/BURDUR
                </div>
            </ul>
            <button type="submit" name="orderCreate" class="btn_1 gradient full-width mb_5"><?php echo $lang["Basket3_SiparisiVer"]; ?></button>
            <div class="text-center"><small><?php echo $lang["Basket3_MusteriHizmetleri"]; ?><strong><?php echo $lang["Basket3_Telefon"]; ?></strong></small></div>
        </div>
    </div>
=======
<?php
    include("connection.php");
    $sorguu1 = $conn->prepare("SELECT * FROM meal_p WHERE status=1");
    $sorguu1->execute();
    
    if(isset($_GET["sepettencikartildi"])){
        $_SESSION["sepet"] = str_replace($_GET["sepettencikartildi"], " ", $_SESSION["sepet"]);
        $_SESSION["sepetPartner"] = str_replace($_GET["sepettencikart"], " ", $_SESSION["sepetPartner"]);
    }
?>
<div class="col-lg-4" id="sidebar_fixed">
    <div class="box_order mobile_fixed">
        <div class="head">
            <h3><?php echo $lang["Basket3_SiparisOzeti"]; ?></h3>
            <a href="#0" class="close_panel_mobile"><i class="icon_close"></i></a>
        </div>
        <!-- /head -->
        <div class="main">
            <?php
                $adres = "https://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
                $sayacSepet = 0;
                if(isset($_SESSION["sepet"])){
                    $toplamFiyat = 0;
                    ?> <ul class="clearfix"> <?php
                    while($yemek = $sorguu1->fetch(PDO::FETCH_ASSOC)){
                        $yemekler = explode("|", $_SESSION["sepet"]);
                        foreach ($yemekler as $key) {
                            if($yemek["id"]==$key){
                                $sayacSepet++;
                                $toplamFiyat += $yemek["price"]; ?>
                            <div class="card mb-3">
                                <?php
                                if(strstr($adres, "index.php")){ ?>
            <a href="index.php?sepettencikartildi=<?php echo $yemek["id"]; ?>&sepettencikart=<?php echo $yemek["partnerId"]; ?>" style="text-decoration: none; color: black;" onclick="fun()"> <?php
                                }else{ ?>
            <a href="<?php echo $adres; ?>&sepettencikartildi=<?php echo $yemek["id"]; ?>&sepettencikart=<?php echo $yemek["id"]; ?>" style="text-decoration: none; color: black;" onclick="fun()"> <?php
                                }
                                ?>
                                <li>
                                    <?php echo $yemek["name"]; ?></a><span><?php echo $yemek["price"]." ₺"; ?></span>
                                </li>
                            </div> <?php
                            }
                        }
                    }
                    ?></ul><?php
                    if($sayacSepet==0){
                        $_SESSION["sepet"] = "";
                        $_SESSION["sepetPartner"] = "";
                    }
                }else{
                    // echo "Sepetiniz boş";
                } ?>
            <hr>
            <ul class="clearfix">
                <!-- <li>Ara toplam<span>< ?php echo $toplamFiyat; ?>₺</span></li>
                <li>Teslimat ücreti<span>10₺</span></li> -->
                <li class="total"><?php echo $lang["Basket3_Toplam"]; ?><span><?php echo $toplamFiyat; ?>₺</span></li>
                <!-- <hr> --><br>
                <div class="dropdown">
                <?php echo $lang["Basket3_Tarih"]; ?>Şimdi
                    <br>
                    <?php echo $lang["Basket3_Saat"]; ?>Şimdi
                    <br>
                    <?php echo $lang["Basket3_Adres"]; ?>GÖLHİSAR/BURDUR
                </div>
            </ul>
            <button type="submit" name="orderCreate" class="btn_1 gradient full-width mb_5"><?php echo $lang["Basket3_SiparisiVer"]; ?></button>
            <div class="text-center"><small><?php echo $lang["Basket3_MusteriHizmetleri"]; ?><strong><?php echo $lang["Basket3_Telefon"]; ?></strong></small></div>
        </div>
    </div>
>>>>>>> cb155594332c919c0d31763cde7af1a0934c6844
</div>