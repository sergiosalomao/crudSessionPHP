<?php

ini_set('display_errors',true);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

$nome = 'Sergio';
$sobrenome = 'Salomao';
$idade = 36;
$nomeCompleto = $nome . ' ' . $sobrenome;
$nomeCompleto2 = "$nome $sobrenome";
echo $nomeCompleto;
echo '<br>';
echo $nomeCompleto2;


