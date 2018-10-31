<?php

    session_start();

    // verificar se tem um usuario conectado
    if(isset($_SESSION['user'])){
        echo 'Usuario conectado!';
    }else{
        header('location:login.php');
    }
