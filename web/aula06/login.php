<?php

    if($_GET['erro']==1){
        echo "Erro de autenticação";
    }

?>
<form method="post" action="autenticar.php">
    <label>E-mail</label><br/>
    <input type="text" name="email"/><br/>
    <label>Senha</label><br/>
    <input type="password" name="senha"/><br/>
    <input type="submit" name="enviar" value="OK"/><br/>

</form>