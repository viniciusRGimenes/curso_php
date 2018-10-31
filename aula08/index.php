<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

        <form action="index.php" method="post">
        <label for="">Nome Completo</label>
        <input name="nome" type="text" value="" required/>
        <input type="submit" value="Adicionar">
        <input type="hidden" name="alunos" value="<? =(base64_encode(serialize($alunos))?>"/>
        </form>

<?php
        $alunos = [];

        if(isset($_POST['alunos'])){
            $alunos = unserialize(base64_decode($_POST['alunos']));
        }


        if(isset($_POST['nome'])){
            $alunos[] = $_POST['nome'];

            print "<pre>";
            print_r($alunos);
            print "</pre>";
        }


    ?>
    <br>





</body>
</html>

