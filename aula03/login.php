<?php

$camposRetorno = 'nome=' . $_POST['nome'];
$camposRetorno .= '&email=' . $_POST['email'];
$camposRetorno .= '&ano_nascimento=' . $_POST['ano_nascimento'];
if ($_POST['nome'] == '') {
    header('location:index.php?error=nome+origatorio&campo=nome&' . $camposRetorno);
    exit;
}

if ($_POST['email'] == '') {
    header('location:index.php?error=email+origatorio&campo=email&'. $camposRetorno);
    exit;
}

if ($_POST['ano_nascimento'] == '') {
    header('location:index.php?error=email+origatorio&campo=ano_nascimento&'. $camposRetorno);
    exit;
}

echo $_POST['nome'] . "<br>";
echo $_POST['email'] . "<br>";
echo $_POST['ano_nascimento'] . "<br>";