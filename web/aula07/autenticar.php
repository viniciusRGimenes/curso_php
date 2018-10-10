<?php

session_start();

require_once("user.php");

// Receber dados enviados
$email = $_POST["email"];
$password = $_POST["senha"];

$user = new User();
$user = $user->autenticar_usuario($email, $password); 

if(!$user){
    header("location:login.php?erro=1");
}else{
    $_SESSION["user"] = $user;
    header("location:home.php");
}

