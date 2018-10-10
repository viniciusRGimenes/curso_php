<?php

$email = $_POST["email"];
$password = $_POST["senha"];

$db_server = "curso_php_db_1";
$db_user = "root";
$db_password = "phprs";
$db_database = "academia";

$conn = new mysqli($db_server, $db_user, $db_password, $db_database);
if($conn->connect_error){
    die("Erro ao tentar conectar no banco de dados: ". $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE email = '".$email."' AND senha = '".$password."'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    header("location:home.php");
}else{
    header("location:login.php?erro=1");
}