<?php
//var_dump($_POST); die();
if ($_SERVER['REQUEST_METHOD'] != 'POST'){
    die("Error de requisicao ");
}

if (!isset($_POST['produto'])){
  die("produto obrigatorio");
}

if ($_POST['produto'] == ''){
    die("produto sem valor");
}

//var_dump($produtos); die();
setcookie('produto',$_POST['produto']);
header('location:carrinho.php');
