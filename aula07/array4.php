<?php

    $pessoas = [];

    if(isset($_POST['pessoas'])){
        $pessoas = unserialize(base64_decode($_POST['pessoas']));
    }

    if(isset($_POST['nome'])){
        $pessoas[] = $_POST['nome'];
    }

    ?>
    <table><tr><th>Nomes</th></tr>
    <?php
    foreach($pessoas as $pessoa){
        echo "<tr><td>";
        echo $pessoa;
        echo "</td></tr>";
    }
    ?>
    </table>
    <?php    

?>    

    <form action="array4.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome"/>
        <input type="submit" value="Gravar"/>
        <input type="hidden" name="pessoas" value="<?php print base64_encode(serialize($pessoas)) ?>"/>
    </form>