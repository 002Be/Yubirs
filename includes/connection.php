<?php
    try{
        $conn = new PDO("mysql: host=localhost; dbname=yubirs; charset=utf8", "root", "");
    }catch(PDOException $err){
        // Hata mesajı veri tabanına kaydedilecek
        // $err->getMessage();
    }
    date_default_timezone_set('Europe/Istanbul');
?>