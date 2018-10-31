<?php
    session_start();

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $db_servidor = "curso_php_db_1";
    $db_usuario = "root";
    $db_senha = "phprs";
    $db_banco = "academia";

    $conn = new mysqli($db_servidor, $db_usuario, $db_senha, $db_banco);
    if($conn->connect_error){
        die("Ocorreu um erro ao tentar conectar ao servidor de banco de dados: " . $conn->connec_error);
    }

    $sql = "SELECT * FROM users WHERE email = '".$usuario."' AND senha = '".$senha."'";
    $result = $conn->query($sql);

    if(!$result){
        die('Ocorreu um erro ao tentar autenticar o usuário'. mysqli_error($conn));
    }

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        $_SESSION['user'] = $row;

    }

