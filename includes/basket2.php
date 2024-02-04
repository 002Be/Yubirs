<<<<<<< HEAD
<?php
    include("connection.php");
    include("assets/languages/tr_TR.php"); //Fonksiyon olarak eklenecek
    $sorguu1 = $conn->prepare("SELECT * FROM meal_p WHERE status=1");
    $sorguu1->execute();
    
    if(isset($_GET["sepettencikartildi"])){
        $_SESSION["sepet"] = str_replace($_GET["sepettencikartildi"], " ", $_SESSION["sepet"]);
    }
?>
<div class="modal fade" id="shoppingCart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <br><br><br>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $lang["Basket2_Sepetim"]; ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                $adres = "https://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
                $sayacSepet = 0;
                if(isset($_SESSION["sepet"])){
                    $toplamFiyat = 0;
                    while($yemek = $sorguu1->fetch(PDO::FETCH_ASSOC)){
                        $yemekler = explode("|", $_SESSION["sepet"]);
                        foreach ($yemekler as $key) {
                            if($yemek["id"]==$key){
                                $sayacSepet++;
                                $toplamFiyat += $yemek["price"]; ?>
                            <div class="card mb-3">
                                <?php
                                if(strstr($adres, "index.php")){ ?>
            <a href="index.php?sepettencikartildi=<?php echo $yemek["id"]; ?>" style="text-decoration: none; color: black;" onclick="fun()"> <?php
                                }else{ ?>
            <a href="<?php echo $adres; ?>&sepettencikartildi=<?php echo $yemek["id"]; ?>" style="text-decoration: none; color: black;" onclick="fun()"> <?php
                                }
                                ?>
                                    <div id="<?php echo $yemek["id"]; ?>" class="card-body">
                                        <h5 id="<?php echo $yemek["name"]; ?>" class="card-title"><?php echo $yemek["name"]; ?></h5>
                                        <p class="card-text"><?php echo $yemek["description"]; ?></p>
                                        <p class="card-text"><small class="text-muted"><?php echo $yemek["price"]." TL"; ?></small></p>
                                    </div>
                                </a>
                            </div> <?php
                            }
                        }
                    }
                    if($sayacSepet==0){
                        $_SESSION["sepet"] = "";
                    }
                }else{
                    // echo "Sepetiniz boş";
                } ?>
                
                <?php
                if(isset($toplamFiyat) && $toplamFiyat>0){ ?>
                    <hr>
                    <h6 style="text-align: center;"><?php echo $lang["Basket2_ToplamTutar"]; ?><?php echo $toplamFiyat; ?> TL</h6> <?php
                }else{ ?>
                    <h4 style="text-align: center;"><?php echo $lang["Basket2_SepetinizBos"]; ?></h4> <?php
                }
                ?>

                <!-- <?php echo $yemek["name"]; ?> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo $lang["Basket2_Kapat"]; ?></button>
                <?php
                if(isset($toplamFiyat) && $toplamFiyat>0){ ?>
                    <a href="order.php" type="button" class="btn btn-primary"><?php echo $lang["Basket2_SiparisiTamamla"]; ?></a> <?php
                } ?>
            </div>
        </div>
    </div>
=======
<?php
    include("connection.php");
    include("assets/languages/tr_TR.php"); //Fonksiyon olarak eklenecek
    $sorguu1 = $conn->prepare("SELECT * FROM meal_p WHERE status=1");
    $sorguu1->execute();
    
    if(isset($_GET["sepettencikartildi"])){
        $_SESSION["sepet"] = str_replace($_GET["sepettencikartildi"], " ", $_SESSION["sepet"]);
    }
?>
<div class="modal fade" id="shoppingCart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <br><br><br>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $lang["Basket2_Sepetim"]; ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                $adres = "https://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
                $sayacSepet = 0;
                if(isset($_SESSION["sepet"])){
                    $toplamFiyat = 0;
                    while($yemek = $sorguu1->fetch(PDO::FETCH_ASSOC)){
                        $yemekler = explode("|", $_SESSION["sepet"]);
                        foreach ($yemekler as $key) {
                            if($yemek["id"]==$key){
                                $sayacSepet++;
                                $toplamFiyat += $yemek["price"]; ?>
                            <div class="card mb-3">
                                <?php
                                if(strstr($adres, "index.php")){ ?>
            <a href="index.php?sepettencikartildi=<?php echo $yemek["id"]; ?>" style="text-decoration: none; color: black;" onclick="fun()"> <?php
                                }else{ ?>
            <a href="<?php echo $adres; ?>&sepettencikartildi=<?php echo $yemek["id"]; ?>" style="text-decoration: none; color: black;" onclick="fun()"> <?php
                                }
                                ?>
                                    <div id="<?php echo $yemek["id"]; ?>" class="card-body">
                                        <h5 id="<?php echo $yemek["name"]; ?>" class="card-title"><?php echo $yemek["name"]; ?></h5>
                                        <p class="card-text"><?php echo $yemek["description"]; ?></p>
                                        <p class="card-text"><small class="text-muted"><?php echo $yemek["price"]." TL"; ?></small></p>
                                    </div>
                                </a>
                            </div> <?php
                            }
                        }
                    }
                    if($sayacSepet==0){
                        $_SESSION["sepet"] = "";
                    }
                }else{
                    // echo "Sepetiniz boş";
                } ?>
                
                <?php
                if(isset($toplamFiyat) && $toplamFiyat>0){ ?>
                    <hr>
                    <h6 style="text-align: center;"><?php echo $lang["Basket2_ToplamTutar"]; ?><?php echo $toplamFiyat; ?> TL</h6> <?php
                }else{ ?>
                    <h4 style="text-align: center;"><?php echo $lang["Basket2_SepetinizBos"]; ?></h4> <?php
                }
                ?>

                <!-- <?php echo $yemek["name"]; ?> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo $lang["Basket2_Kapat"]; ?></button>
                <?php
                if(isset($toplamFiyat) && $toplamFiyat>0){ ?>
                    <a href="order.php" type="button" class="btn btn-primary"><?php echo $lang["Basket2_SiparisiTamamla"]; ?></a> <?php
                } ?>
            </div>
        </div>
    </div>
>>>>>>> cb155594332c919c0d31763cde7af1a0934c6844
</div>