<?php
session_start();

if (isset($_GET['id'])){

    if(array_key_exists($_GET['id'],$_SESSION['dados'])){

        var_dump($_SESSION['dados']); die();
       // $_SESSION['dados'][$_GET['id']] = ;

    }


}
else
    header('location:consulta.php?msg=editado');