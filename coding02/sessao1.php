<?php
session_start();

$_SESSION["nome"] = "Pedro II";

?>
<h1>sessao1.php</h1>
<?php

echo $_SESSION["nome"];
echo "<br><br>";

?>
<a href="sessao2.php">Próxima</a>



