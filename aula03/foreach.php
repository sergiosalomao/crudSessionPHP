<?php
$array = [

    0 => [
        'nome' => 'sergio',
        'email' => 'sa@maol.com',
        'idade' => 12,
    ],

    1 => [
        'nome' => 'salomao',
        'email' => 'sa@mail22.com',
        'idade' => 18,
    ],

    2 => [
        'nome' => 'Manoel',
        'email' => 'sa@maieeeel22.com',
        'idade' => 20,
        'cidade' => 'fortaleza',
    ],

];
/*
foreach ($array as $key => $item):
    echo 'Posicao ' .  $key . "<br>";
    echo 'Nome ' . $item['nome'] . "<br> ";
    echo 'Email ' . $item['email'] . "<br> ";
    echo 'Idade ' . $item['idade'] . "<br> ";

endforeach;*/

$papudins = [];

foreach ($array as $posicao => $item):
    echo "Matricula: " . $posicao . "<br>";

    foreach ($item as $campo => $valor):
        echo "$campo: $valor <br>";
    endforeach;

    $permissao = 'Nao pode';
    if ($item['idade'] >= 18) {
        $permissao = 'Pode beber';
        $papudins[] = $item['nome'];
    }
    echo $permissao;
    echo "<br>-------------------------------------";

    echo "<br>";



endforeach;