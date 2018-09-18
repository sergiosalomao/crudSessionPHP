<?php
session_start();

function validacao()
{
    if (isset($_POST['nome']) && ($_POST['nome'] == '')) {
        header('location:cadastro.php?msg=nome');
        exit;
    }

    if (isset($_POST['email']) && ($_POST['email'] == '')) {
        header('location:cadastro.php?msg=email');
        exit;
    }

    if (isset($_POST['tel']) && ($_POST['tel'] == '')) {
        header('location:cadastro.php?msg=tel');
        exit;
    }
}

$_SESSION['nome'] = $_POST['nome'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['tel'] = $_POST['tel'];


if (isset($_GET['acao'])) {
    validacao();
#verifica se edita ou salva novo
    if ($_GET['acao'] == 'create') {
        #cria novo registro
        array_push($_SESSION['dados'], $_POST);
    }

    if ($_GET['acao'] == 'edit') {
        validacao();
        if (array_key_exists($_GET['id'], $_SESSION['dados'])) {
            unset($_SESSION['dados'][$_GET['id']]);
            $_SESSION['dados'][$_GET['id']]['nome'] = $_POST['nome'];
            $_SESSION['dados'][$_GET['id']]['email'] = $_POST['email'];
            $_SESSION['dados'][$_GET['id']]['tel'] = $_POST['tel'];
        }
        sort($_SESSION['dados']);
    }

    header('location:consulta.php?msg=sucesso');
};