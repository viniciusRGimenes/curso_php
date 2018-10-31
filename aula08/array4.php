<?php

    $alunos = [];

    $alunos["marcus"] = [
        'nome' => "Vinicius Rodrigues Gimenes",
        'idade' => 24,
        'sexo' => "Duas vezes por semana",

    ];
    $alunos["junior"] = 26;

    print "<pre>";
    print_r($alunos);
    print "</pre>";

    print "A idade do marcus é " . $alunos["marcus"];

?>