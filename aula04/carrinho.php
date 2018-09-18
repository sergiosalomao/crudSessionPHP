<?php
echo "Bem vindo ao carrinho" . "<br>";

echo '<a href="index2.php">Continuar Comprando</a>';

$produtos = explode('|',$_COOKIE['produto']);

echo '<table border="1">';
echo '<tr>';
echo    '<th>Produto</th>';

echo '</tr>';


if (isset($_COOKIE['produto'])){
    $produtos.= '|' . $_COOKIE['produto'];
}

//var_dump($produtos);die;
foreach ($produtos as $produto){
    echo '<tr>';
    echo    '<td>'. $produto . '</td>';
    echo '</tr>';
    echo '</table>';
}

