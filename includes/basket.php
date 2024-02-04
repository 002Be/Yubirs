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
            <h3><?php echo $lang["Basket_SiparisOzeti"]; ?></h3>
            <a href="#0" class="close_panel_mobile"><i class="icon_close"></i></a>
        </div>
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
                <?php
                    if(isset($toplamFiyat) && $toplamFiyat>0){ ?>
                        <!-- <li>Ara toplam<span>< ?php echo $toplamFiyat; ?>₺</span></li>
                        <li>Teslimat ücreti<span>10₺</span></li> -->
                        <li class="total"><?php echo $lang["Basket_Toplam"]; ?><span><?php echo $toplamFiyat; ?>₺</span></li>
                        <!-- <hr> --><br>
                        <div class="dropdown day">
                            <a href="#" data-bs-toggle="dropdown"><?php echo $lang["Basket_Gun"]; ?> <span id="selected_day"></span></a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-content">
                                    <!-- <h4>Ne zaman teslim edilsin?</h4> -->
                                    <div class="radio_select chose_day">
                                        <ul>
                                            <?php takwAwayCDays(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown time">
                            <a href="#" data-bs-toggle="dropdown"><?php echo $lang["Basket_Saat"]; ?> <span id="selected_time"></span></a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-content">
                                    <!-- <h4>Öğleden Önce</h4> -->
                                    <div class="radio_select add_bottom_15">
                                        <ul>
                                            <?php takwAwayCTimes(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn_1_mobile">
                            <a href="order.php" class="btn_1 gradient full-width mb_5"><?php echo $lang["Basket_SiparisiOnayla"]; ?></a>
                            <div class="text-center"><small><?php echo $lang["Basket_BuAdımdaUcretAlinmaz"]; ?></small></div>
                        </div>
                        <?php
                    }else{ ?>
                        <h4 style="text-align: center;"><?php echo $lang["Basket_SepetinizBos"]; ?></h4> <?php
                    }
                ?>
            </ul>
            <hr>
            <!-- <div class="row opt_order">
                <div class="col-6">
                    <label class="container_radio">Teslimat
                        <input type="radio" value="option1" name="opt_order" checked>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-6">
                    <label class="container_radio">Gel Al
                        <input type="radio" value="option1" name="opt_order">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div> -->
        </div>
    </div>
    <div class="btn_reserve_fixed"><a href="#0" class="btn_1 gradient full-width"><?php echo $lang["Basket_SepetiGoruntule"]; ?></a></div>
</div>