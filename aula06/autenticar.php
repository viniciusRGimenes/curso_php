<?php

require_once("user.php");

// Receber dados enviados
$email = $_POST["email"];
$password = $_POST["senha"];

$user = new User();
$usuario_valido = $user->autenticar_usuario($email, $password); 
if($usuario_valido){
    $_SESSION ['email'] = $email;
    $_SESSION ['senha'] = $password;
    header("location:home.php");
}else{
    $_SESSION ['email'];
    $_SESSION ['senha'];
    header("location:login.php?erro=1");
}

