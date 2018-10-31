<?php

	$alunos = [];
	
	if(isset($_POST["alunos"])){
		$alunos = unserialize(base64_decode($_POST["alunos"]));
	}

	if(isset($_POST['nome'])){
		$alunos[] = $_POST['nome'];

		print "<pre>";
		print_r($alunos);
		print "</pre>";
	}

?>


<form action="array3.php" method="post">
	<label>Nome</label>
	<input type="text" name="nome">
	<input type="submit" value="Adicionar">
	<input type="hidden" name="alunos" value="<?php print base64_encode(serialize($alunos)) ?>"/>
</form>