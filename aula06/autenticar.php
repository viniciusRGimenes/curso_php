<?php

require_once("user.php");

// Receber dados enviados
$email = $_POST["email"];
$password = $_POST["senha"];

$user = new User();
$usuario_valido = $user->autenticar_usuario($email, $password); 
if($usuario_valido){
    header("location:home.php");
}else{
    header("location:login.php?erro=1");
}

