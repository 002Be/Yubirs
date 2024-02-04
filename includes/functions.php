<?php
    function dbLog($process){
        include("connection.php");
        $sorgu = $conn->prepare("INSERT INTO log_p (partnerId, time, process) values (?, ?, ?)");
        $sorgu->execute([$_SESSION["partnerId"], date("Y-m-d H:i:s"), $process]);
    }

    //Partner giriş kontrolü
    function loginControlP(){
        if(empty($_SESSION["partnerId"])){
            header("Location: login.php");
        }
    }

    // function language(){
        // if(isset($_SESSION["language"])){
        //     if($_SESSION["language"]=="en"){
        //         require_once("assets/languages/en.php");
        //     }elseif($_SESSION["language"]==""){
        //         require_once("assets/languages/en.php");
        //     }elseif($_SESSION["language"]==""){
        //         require_once("assets/languages/en.php");
        //     }else{
        //         require_once("assets/languages/tr_TR.php");
        //     }
        // }else{
        //     require_once("assets/languages/tr_TR.php");
        // }
        // include("assets/languages/tr_TR.php");
    // }
?>
