<?php
session_start();




if (isset($_GET['id'])){

        if(array_key_exists($_GET['id'],$_SESSION['dados'])){
            //var_dump("aqui");die;
            unset($_SESSION['dados'][$_GET['id']]);
        }

    header('location:consulta.php?msg=delete');
    }
else
    header('location:consulta.php?msg=deleteError');