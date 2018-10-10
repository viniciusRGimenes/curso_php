<?php
    session_start();

    if(!isset($_SESSION['user'])){
        header("location:login.php");
    }

?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Home sweet home</title>
        </head>
    <body>

    <h1>Home</h1>
    <p>Home sweet home.</p>
    <p>Olá <?=$_SESSION['user']['email']?>!</p>
    <p>Quero <a href="login.php">sair</a>!</p>



    </body>
</html>