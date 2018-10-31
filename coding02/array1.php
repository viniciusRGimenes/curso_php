<?php

$alunos = array(
    "Ane",              // 0
    "Fran",             // 1
    "Junior",           // 2
    "Danilo", 
    "Vinicius", 
    "Marcus", 
    "Rodrigo", 
    "Thiago"            // 7
);

/*
print "<pre>";
print_r($alunos);
print "</pre>";


echo $alunos[3]."<br>";

array_push($alunos, "Andre");

print "<pre>";
print_r($alunos);
print "</pre>";
*/

echo count($alunos);

echo "<h1>Imprimindo com while</h1>";

$i = 0;
while ($i < count($alunos)) {
    echo $alunos[$i] . "<br>";
    $i++;
}

echo "<h1>Imprimindo com do...while</h1>";
$i = 0;
do {
    echo $alunos[$i] . "<br>";
    $i++;
} while ($i < count($alunos));

echo "<h1>Imprimindo com for</h1>";
for ($i = 0; $i < count($alunos); $i++) {
    echo $alunos[$i] . "<br>";
}

echo "<h1>Imprimindo com foreach</h1>";
foreach ($alunos as $aluno) {
    echo $aluno . "<br>";
}

