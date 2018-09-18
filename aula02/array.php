<?php
$array = array(
    array(
        'loja' => 'Loja1',
        'produtos' => array(
            array(
                'produto' => 'bolsa', 'qtd' => 1
            ),
            array(
                'produto' => 'bolsa 3', 'qtd' => 3
            )
        )
    ),
    array(
        'loja' => 'Loja2',
        'produtos' => array(
            array(
                'produto' => 'bolsa 2', 'qtd' => 2
            )
        )
    )
);
var_dump($array);die;
foreach ($array as $loja) {
    foreach ($loja['produtos'] as $produto) {
        echo $p = $produto['produto'] ."<br>";
        echo $q = $produto['qtd'] ."<br>";
    }
}