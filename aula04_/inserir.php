<?php
session_start();
$_SESSION['alunos']= $_SESSION['alunos'] ?? [];

array_push($_SESSION['aluno'],$_POST);

header('location:index.php');