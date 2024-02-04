<<<<<<< HEAD
<?php
    require_once("connection.php");
    $sorguu1 = $conn->prepare("SELECT * FROM meal_p WHERE status=1");
    $sorguu1->execute();
    
    if(isset($_GET["sepettencikartildi"])){
        $_SESSION["sepet"] = str_replace($_GET["sepettencikartildi"], " ", $_SESSION["sepet"]);
    }
?>
<div class="modal fade" id="shoppingCart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Sepetim</h1>
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
                    <h6 style="text-align: center;">Toplam Tutar : <?php echo $toplamFiyat; ?> TL</h6> <?php
                }else{ ?>
                    <h4 style="text-align: center;">Sepetiniz Boş</h4> <?php
                }
                ?>

                <!-- <?php echo $yemek["name"]; ?> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                <?php
                if(isset($toplamFiyat) && $toplamFiyat>0){ ?>
                    <a href="order.php" type="button" class="btn btn-primary">Siparişi Tamamla</a> <?php
                } ?>
            </div>
        </div>
    </div>
=======
<?php
    require_once("connection.php");
    $sorguu1 = $conn->prepare("SELECT * FROM meal_p WHERE status=1");
    $sorguu1->execute();
    
    if(isset($_GET["sepettencikartildi"])){
        $_SESSION["sepet"] = str_replace($_GET["sepettencikartildi"], " ", $_SESSION["sepet"]);
    }
?>
<div class="modal fade" id="shoppingCart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Sepetim</h1>
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
                    <h6 style="text-align: center;">Toplam Tutar : <?php echo $toplamFiyat; ?> TL</h6> <?php
                }else{ ?>
                    <h4 style="text-align: center;">Sepetiniz Boş</h4> <?php
                }
                ?>

                <!-- <?php echo $yemek["name"]; ?> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                <?php
                if(isset($toplamFiyat) && $toplamFiyat>0){ ?>
                    <a href="order.php" type="button" class="btn btn-primary">Siparişi Tamamla</a> <?php
                } ?>
            </div>
        </div>
    </div>
>>>>>>> cb155594332c919c0d31763cde7af1a0934c6844
</div>