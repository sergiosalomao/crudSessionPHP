<?php
$loja = [
    'loja1'=>'Loja 01',
    [
        'categorias'=>'categoria shorts',
        [
            'p1'=>'short curto ',
            'p2'=>'short longo ',
        ],

        'categorias'=>'categoria saias',
        [
            'p1'=>'saias curto ',
            'p2'=>'saias longo ',


            [
                's1'=>'saias curto bordada ',
                's2'=>'saias longo bordada',
            ],



        ],



    ]

];

echo "<pre>";
var_dump($loja);
echo "</pre>";

echo $loja[0][1][0]['s1'];