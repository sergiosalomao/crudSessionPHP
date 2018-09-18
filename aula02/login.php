<?php

$dados = [
    'email'=>'salomao@hotmail.com',
    'senha'=>'123'
    ];

$email = 'salomao@hotmail.coml';
$senha = '123';

//var_dump($dados);
if (($email == $dados['email']) && ($senha == $dados['senha'])){
    echo 'Bem vindo Usuario';
    exit;
}
if ($email == $dados['email']){
    echo 'senha incorreta';
    exit;
}

echo 'usuario nao encontrado';


