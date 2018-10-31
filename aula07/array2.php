<?php

    $pessoas = [
        "Pedro",
        "João",
        "Mateus",
        "Thiago",
        "Bernardo"
    ];

    print "<pre>";
    print_r($pessoas);
    print "</pre>";


    $pessoas = [     
        "aluno" => [
            "nome" => "Andre Pereira Silva",
            "idade" => "25",
        ],
        "aluno" => [
            "nome" => "Maria Albuquerque",
            "idade" => "18",
        ],
    ];

    $pessoas["marcos"] = ["nome" => "Marcos", "idade" => "19"];

    print "<pre>";
    print_r($pessoas);
    print "</pre>";

    unset($pessoas["marcos"]);

    print "<pre>";
    print_r($pessoas);
    print "</pre>";


    print "<pre>";
    print_r($pessoas["andre"]);
    print "</pre>";
