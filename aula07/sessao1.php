<?php

    session_start();

    if(isset($_SESSION["contador"])){
        $_SESSION["contador"] += 1;
    }else{
        $_SESSION["contador"] += 1;
    }


    if($_SESSION["contador"] > 30){
        session_destroy();
        header("location:sessao1.php");
        exit;
    }


    echo $_SESSION["contador"];


?>