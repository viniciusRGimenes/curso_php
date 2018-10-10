<?php

    // Definicao da classe
    class usuario{
        public $nomeCompleto;
    }

    // Instanciar classe
    $usuarioJudas = new usuario();

    // Definir valor do atributo
    $usuarioJudas->nomeCompleto = "Judas Silva";

    // Exibir valor do atributo
    echo $usuarioJudas->nomeCompleto;

