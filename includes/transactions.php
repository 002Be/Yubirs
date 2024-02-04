<!-- https://fonts.google.com/share?selection.family=Barlow%20Condensed:wght@300%7CNunito:wght@200%7CRoboto:wght@100 -->
<?php
    session_start();
    require_once("connection.php");
    require_once("functions.php");

    //Login - Customers
    if (isset($_POST["loginC"])){
        $controlQuery = $conn->prepare("SELECT * FROM customers WHERE mail=? and password=? and status=1");
        $controlQuery->execute([$_POST["mail"], $_POST["password"]]);
        $controlCounter = $controlQuery->rowCount();
        
        if($controlCounter>0){
            $_SESSION["GirisDurumu"] = true;
            $kullaniciBilgileri = $controlQuery->fetch(PDO::FETCH_ASSOC);
            $_SESSION["Customer"] = $kullaniciBilgileri["name"]." ".$kullaniciBilgileri["surname"];
            $_SESSION["CustomerID"] = $kullaniciBilgileri["id"];
            // dbLog("Giriş yaptı");
            header('Location: ../index.php');
        }else{header("Location: ../login.php?status=basarisiz");}
    }

    //Register - Customers
    if(isset($_POST["registerC"])){
        $controlQuery = $conn->prepare("SELECT * FROM customers WHERE phone=? OR mail=?");
        $controlQuery->execute([$_POST["phone"], $_POST["mail"]]);
        $controlQuery = $controlQuery->rowCount();
        if($controlQuery>0){
            header('Location: ../register.php?status=basarisiz');
        }else{
            $sorgu = $conn->prepare("INSERT INTO customers (name, surname, phone, mail, password) values (?, ?, ?, ?, ?)");
            $sorgu->execute([$_POST["name"], $_POST["surname"], $_POST["phone"], $_POST["mail"], $_POST["password"]]);
            // $sorgu = $conn->prepare("INSERT INTO customers (name, surname, phone, mail, password, campaigns, opportunities, promotions) values (?, ?, ?, ?, ?, ?, ?, ?)");
            // $sorgu->execute([$_POST["name"], $_POST["surname"], $_POST["phone"], $_POST["mail"], $_POST["password"], $_POST["campaigns"], $_POST["opportunities"], $_POST["promotions"]]);
            $KayitKontrol = $sorgu->rowCount();
            // $_SESSION["Username"] = $_POST["username"];
            if($KayitKontrol>0){
                // dbLog("Kayıt oldu");
                session_destroy();
                header('Location: ../login.php?status=basarili');
            }else{
                header('Location: ../register.php?status=basarisiz');
            }
        }
    }

    //Logout - Customer
    if(isset($_POST["logoutC"])){
        // dbLog("Çıkış yaptı");
        session_destroy();
        header('Location: ../index.php');
    }

    //Update - Customer Profile
    if(isset($_POST["updateProfileC"])){
        $sorgu = $conn->prepare("UPDATE customers SET name=?, surname=?, mail=?, phone=?, password=?, birthday=? WHERE id=?");
        $sorgu->execute([$_POST["name"], $_POST["surname"], $_POST["mail"], $_POST["phone"], $_POST["password"], $_POST["birthday"], $_SESSION["CustomerID"]]);
        $KayitKontrol = $sorgu->rowCount();
        if($KayitKontrol>0){
            header('Location: ../profile.php?durum=basarili');
        }else{
            header('Location: ../profile.php?durum=basarisiz');
        }
    }

    //Login - Partner
    if (isset($_POST["loginP"])){
        $controlQuery = $conn->prepare("SELECT * FROM partners WHERE mail=? and password=? and status=1");
        $controlQuery->execute([$_POST["mail"], $_POST["password"]]);
        $controlCounter = $controlQuery->rowCount();
        
        if($controlCounter>0){
            while($cikti = $controlQuery->fetch(PDO::FETCH_ASSOC)){
                $_SESSION["partnerId"] = $cikti["id"];
                $_SESSION["partnerName"] = $cikti["name"]." ".$cikti["surname"];
            }
            $_SESSION["GirisDurumu"] = true;
            dbLog("Giriş yaptı");
            header('Location: ../partner/index.php');
        }else{header("Location: ../partner/login.php?status=basarisiz");}
    }

    //Register - Partner
    if(isset($_POST["registerP"])){
        $controlQuery = $conn->prepare("SELECT * FROM partners WHERE phone=? OR mail=?");
        $controlQuery->execute([$_POST["phone"], $_POST["mail"]]);
        $controlQuery = $controlQuery->rowCount();
        if($controlQuery>0){
            header('Location: ../partner/register.php?status=basarisiz');
        }else{
            $sorgu = $conn->prepare("INSERT INTO partners (businessName, businessAddress, name, surname, phone, mail, password, TC) values (?, ?, ?, ?, ?, ?, ?, ?)");
            $sorgu->execute([$_POST["businessName"], $_POST["businessAddress"], $_POST["name"], $_POST["surname"], $_POST["phone"], $_POST["mail"], $_POST["password"], $_POST["TC"]]);
            $KayitKontrol = $sorgu->rowCount();
            if($KayitKontrol>0){
                dbLog("Kayıt oldu");
                session_destroy();
                header('Location: ../partner/login.php?status=basarili');
            }else{
                header('Location: ../partner/register.php?status=basarisiz');
            }
        }
    }

    //Update - Partner Profile
    if(isset($_POST["updateProfileP"])){
        $sorgu = $conn->prepare("UPDATE partners SET name=?, surname=?, mail=?, phone=?, password=? WHERE id=?");
        $sorgu->execute([$_POST["name"], $_POST["surname"], $_POST["mail"], $_POST["phone"], $_POST["password"], $_SESSION["partnerId"]]);
        $KayitKontrol = $sorgu->rowCount();
        if($KayitKontrol>0){
            dbLog("Profili düzenledi");
            header('Location: ../partner/profile.php?durum=basarili');
        }else{
            header('Location: ../partner/profile.php?durum=basarisiz');
        }
    }

    
    if(isset($_POST["updateBusinessP"])){
        $sorgu = $conn->prepare("UPDATE partners SET businessName=?, businessAddress=?, businessPhone=?, delivery=?, minAmount=?, working1=?, working2=?, working3=?, working4=?, working5=?, working6=?, working7=? WHERE id=?");
        $sorgu->execute([$_POST["businessName"], $_POST["businessAddress"], $_POST["businessPhone"], $_POST["delivery"], $_POST["minAmount"], $_POST["working1o"]."|".$_POST["working1c"]."|".$_POST["working1s"], $_POST["working2o"]."|".$_POST["working2c"]."|".$_POST["working2s"], $_POST["working3o"]."|".$_POST["working3c"]."|".$_POST["working3s"], $_POST["working4o"]."|".$_POST["working4c"]."|".$_POST["working4s"], $_POST["working5o"]."|".$_POST["working5c"]."|".$_POST["working5s"], $_POST["working6o"]."|".$_POST["working6c"]."|".$_POST["working6s"], $_POST["working7o"]."|".$_POST["working7c"]."|".$_POST["working7s"], $_SESSION["partnerId"]]);
        $KayitKontrol = $sorgu->rowCount();
        if($KayitKontrol>0){
            dbLog("İşletmeyi düzenledi");
            header('Location: ../partner/business.php?durum=basarili');
        }else{
            header('Location: ../partner/business.php?durum=basarili');
        }
    }

    // if(isset($_POST["partnerDeleteP"])){
    //     $sorgu = $conn->prepare("UPDATE staff SET status=0 WHERE id=?");
    //     $sorgu->execute([$_POST["partnerId"]]);
    //     $KayitKontrol = $sorgu->rowCount();
    //     if($KayitKontrol>0){
    //         // dbLog($_POST["deleteStaff"]." adresli personel silindi");
    //         header('Location: ../staff.php?durum=basarili_3');
    //     }else{
    //         header('Location: ../staff.php?durum=basarisiz_3');
    //     }
    // }

    //Logout - Partner
    if(isset($_POST["logoutP"])){
        dbLog("Çıkış yaptı");
        session_destroy();
        header('Location: ../partner/login.php');
    }

    //Creat Categorie - Partner
    if(isset($_POST["categorieCreatP"])){
        $controlQuery = $conn->prepare("SELECT * FROM categorie_P WHERE name=?");
        $controlQuery->execute([$_POST["name"]]);
        $controlQuery = $controlQuery->rowCount();
        if($controlQuery>0){
            header('Location: ../partner/categorie.php?status=basarisiz');
        }else{
            $sorgu = $conn->prepare("INSERT INTO categorie_P (name, description, partnerId) values (?, ?, ?)");
            $sorgu->execute([$_POST["name"], $_POST["description"], $_SESSION["partnerId"]]);
            $KayitKontrol = $sorgu->rowCount();
            // $_SESSION["Username"] = $_POST["username"];
            if($KayitKontrol>0){
                dbLog("Kategori oluşturdu : ".$_POST["name"]);
                header('Location: ../partner/categorie.php?status=basarili');
            }else{
                header('Location: ../partner/categorie.php?status=basarisiz');
            }
        }
    }

    //Delete Categorie - Partner
    if(isset($_POST["categorieDeleteP"])){
        $sorgu = $conn->prepare("UPDATE categorie_p SET status=0 WHERE id=?");
        $sorgu->execute([$_POST["categorieDeleteP"]]);
        $KayitKontrol = $sorgu->rowCount();
        if($KayitKontrol>0){
            dbLog("Kategori silindi : ".$_POST["categorieDeleteP"]);
            header('Location: ../categorie.php?durum=basarili');
        }else{
            header('Location: ../categorie.php?durum=basarisiz');
        }
    }

    //Creat Meal - Partner
    if(isset($_POST["mealCreatP"])){
        $controlQuery = $conn->prepare("SELECT * FROM meal_P WHERE name=?");
        $controlQuery->execute([$_POST["name"]]);
        $controlQuery = $controlQuery->rowCount();
        if($controlQuery>0){
            header('Location: ../partner/meal.php?status=basarisiz');
        }else{
            $sorgu = $conn->prepare("INSERT INTO meal_P (name, description, price, categorie, partnerId, time) values (?, ?, ?, ?, ?, ?)");
            $sorgu->execute([$_POST["name"], $_POST["description"], $_POST["price"], $_POST["categorie"], $_SESSION["partnerId"], date("Y-m-d H:i:s")]);
            $KayitKontrol = $sorgu->rowCount();
            if($KayitKontrol>0){
                dbLog("Yemek oluşturdu : ".$_POST["name"]);
                header('Location: ../partner/meal.php?status=basarili');
            }else{
                header('Location: ../partner/meal.php?status=basarisiz');
            }
        }
    }

    //Update Meal - Partner
    if(isset($_POST["mealUpdateP"])){
        $sorgu = $conn->prepare("UPDATE meal_P SET name=?, description=?, price=?, categorie=?, discount=? WHERE id=?");
        $sorgu->execute([$_POST["name"], $_POST["description"], $_POST["price"], $_POST["categorie"], $_POST["discount"], $_POST["mealUpdateP"]]);
        $KayitKontrol = $sorgu->rowCount();
        if($KayitKontrol>0){
            dbLog("Yemek düzenlendi : ".$_POST["mealUpdateP"]);
            header('Location: ../partner/meal.php?status=basarili');
        }else{
            header('Location: ../partner/meal.php?status=basarisiz');
        }
    }

    //Delete Meal - Partner
    if(isset($_POST["mealDeleteP"])){
        $sorgu = $conn->prepare("UPDATE meal_p SET status=0 WHERE id=?");
        $sorgu->execute([$_POST["mealDeleteP"]]);
        $KayitKontrol = $sorgu->rowCount();
        if($KayitKontrol>0){
            dbLog("Yemek silindi : ".$_POST["mealDeleteP"]);
            header('Location: ../partner/meal.php?durum=basarili');
        }else{
            header('Location: ../partner/meal.php?durum=basarisiz');
        }
    }

    //Creat Staff - Partner
    if(isset($_POST["staffCreatP"])){
        $controlQuery = $conn->prepare("SELECT * FROM staff_p WHERE code=?");
        $controlQuery->execute([$_POST["code"]]);
        $controlQuery = $controlQuery->rowCount();
        if($controlQuery>0){
            header('Location: ../partner/staff.php?status=basarisiz');
        }else{
            $sorgu = $conn->prepare("INSERT INTO staff_p (name, surname, mail, phone, code, partnerId) values (?, ?, ?, ?, ?, ?)");
            $sorgu->execute([$_POST["name"], $_POST["surname"], $_POST["mail"], $_POST["phone"], $_POST["code"], $_SESSION["partnerId"]]);
            $KayitKontrol = $sorgu->rowCount();
            if($KayitKontrol>0){
                dbLog("Personel oluşturdu : ".$_POST["name"]." ".$_POST["surname"]);
                header('Location: ../partner/staff.php?status=basarili');
            }else{
                header('Location: ../partner/staff.php?status=basarisiz');
            }
        }
    }

    //Delete Staff - Partner
    if(isset($_POST["staffDeleteP"])){
        $sorgu = $conn->prepare("UPDATE staff_p SET status=0 WHERE id=?");
        $sorgu->execute([$_POST["staffDeleteP"]]);
        $KayitKontrol = $sorgu->rowCount();
        if($KayitKontrol>0){
            dbLog("Personel silindi : ".$_POST["staffDeleteP"]);
            header('Location: ../partner/staff.php?durum=basarili');
        }else{
            header('Location: ../partner/staff.php?durum=basarisiz');
        }
    }

    if(isset($_POST["orderCreate"])){
        $sorguu1 = $conn->prepare("SELECT * FROM meal_p WHERE status=1");
        $sorguu1->execute();
        if(isset($_SESSION["sepet"])){
            while($yemek = $sorguu1->fetch(PDO::FETCH_ASSOC)){
                $yemekler = explode("|", $_SESSION["sepet"]);
                foreach ($yemekler as $key) {
                    if($yemek["id"]==$key){
                        if(isset($_SESSION["CustomerID"])){
                            $sorgu = $conn->prepare("INSERT INTO order_c (nameSurname, il, ilce, mahalle, cadde, bina, daire, detailedAddress, phone, orderNote, time, product, price, partnerId, customerId, mail) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?. ?)");
                            $sorgu->execute([$_POST["nameSurname"], $_POST["il"], $_POST["ilce"], $_POST["mahalle"], $_POST["cadde"], $_POST["bina"], $_POST["daire"], $_POST["detayliAdres"], $_POST["telefon"], $_POST["not"], date("Y-m-d H:i:s"), $yemek["id"], $yemek["price"], $yemek["partnerId"], $_SESSION["CustomerID"], $_POST["mail"]]);
                        }else{
                            $sorgu = $conn->prepare("INSERT INTO order_c (nameSurname, il, ilce, mahalle, cadde, bina, daire, detailedAddress, phone, orderNote, time, product, price, partnerId, mail) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                            $sorgu->execute([$_POST["nameSurname"], $_POST["il"], $_POST["ilce"], $_POST["mahalle"], $_POST["cadde"], $_POST["bina"], $_POST["daire"], $_POST["detayliAdres"], $_POST["telefon"], $_POST["not"], date("Y-m-d H:i:s"), $yemek["id"], $yemek["price"], $yemek["partnerId"], $_POST["mail"]]);
                        }
                    }
                }
            }
        }else{
            header("Location: ../index.php?durum=basarisiz");
        }
        // $sorgu = $conn->prepare("INSERT INTO order_c (nameSurname, il, ilce, mahalle, cadde, bina, daire, detailedAddress, phone, orderNote, time) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        // $sorgu->execute([$_POST["nameSurname"], $_POST["il"], $_POST["ilce"], $_POST["mahalle"], $_POST["cadde"], $_POST["bina"], $_POST["daire"], $_POST["detayliAdres"], $_POST["telefon"], $_POST["not"], date("Y-m-d H:i:s")]);
        // $sorgu = $conn->prepare("INSERT INTO order_c (il, ilce, mahalle, cadde, bina, daire, detailedAddress, phone, orderNote, price, product) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        // $sorgu->execute([$_POST["il"], $_POST["ilce"], $_POST["mahalle"], $_POST["cadde"], $_POST["bina"], $_POST["daire"], $_POST["detayliAdres"], $_POST["telefon"], $_POST["not"], $_POST["fiyat"], $_POST["sepet"]]);
        $KayitKontrol = $sorgu->rowCount();
        if($KayitKontrol>0){
            // dbLog("Personel silindi : ".$_POST["staffDeleteP"]);
            $_SESSION["sepet"] = "";
            $_SESSION["sepetPartner"] = "";
            header("Location: ../confirm.php?durum=basarili");
        }else{
            header("Location: ../index.php?durum=basarisiz");
        }
    }

    //İnceleme gönder
    if(isset($_POST["reviews_c"])){
        $sorgu = $conn->prepare("INSERT INTO reviews_c (partnerId, comment, pointFoodQuality, pointService, pointPunctuality, pointPrice, time) values (?, ?, ?, ?, ?, ?, ?)");
        $sorgu->execute([$_POST["partnerId"], $_POST["comment"], $_POST["pointFoodQuality"], $_POST["pointService"], $_POST["pointPunctuality"], $_POST["pointPrice"], date("Y-m-d H:i:s")]);
        $KayitKontrol = $sorgu->rowCount();
        if($KayitKontrol>0){
            // dbLog("Kayıt oldu");
            session_destroy();
            header('Location: ../index.php?status=basarili_inceleme');
        }else{
            header('Location: ../index.php?status=basarisiz_inceleme');
        }
    }

    if(isset($_FILES["resimPartnerYemek"])) {
        $hedef_klasor = '../assets/partnerMealImg/';
        $imageId = $_SESSION["partnerId"]."_".$_POST["mealId"]."_".rand(10000,99999)."_".rand(10000,99999)."_".rand(10000,99999)."_".rand(10000,99999);
        $uzantı = ".".pathinfo($_FILES['resimPartnerYemek']['name'], PATHINFO_EXTENSION);
        $hedef_dosya = $hedef_klasor . $imageId . '.' . pathinfo($_FILES['resimPartnerYemek']['name'], PATHINFO_EXTENSION);
        if(move_uploaded_file($_FILES['resimPartnerYemek']['tmp_name'], $hedef_dosya)) {
            $sorgu = $conn->prepare("UPDATE meal_P SET imageId=? WHERE id=?");
            $sorgu->execute([$imageId.$uzantı, $_POST["mealId"]]);
            dbLog("Yemek resmi değiştirildi : ".$_POST["mealId"]);
            header('Location: ../partner/meal.php?status=basarili');
        }else{
            header('Location: ../partner/meal.php?status=basarisiz');
        }
    }

    if(isset($_FILES["resimPartnerSirket"])) {
        $hedef_klasor = '../assets/partnerBusinessImg/';
        $imageId = $_SESSION["partnerId"]."_".rand(10000,99999)."_".rand(10000,99999)."_".rand(10000,99999)."_".rand(10000,99999);
        $uzantı = ".".pathinfo($_FILES['resimPartnerSirket']['name'], PATHINFO_EXTENSION);
        $hedef_dosya = $hedef_klasor . $imageId . '.' . pathinfo($_FILES['resimPartnerSirket']['name'], PATHINFO_EXTENSION);
        if(move_uploaded_file($_FILES['resimPartnerSirket']['tmp_name'], $hedef_dosya)) {
            $sorgu = $conn->prepare("UPDATE partners SET imageId=? WHERE id=?");
            $sorgu->execute([$imageId.$uzantı, $_SESSION["partnerId"]]);
            dbLog("İşletme resmi değiştirildi");
            header('Location: ../partner/settings.php?status=basarili');
        }else{
            header('Location: ../partner/settings.php?status=basarisiz');
        }
    }

    // if($_POST){
    //     header('Location: ../index.php');
    // }
?>