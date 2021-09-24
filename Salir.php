<?php   
    require_once("Seguridad.php");
    session_unset();
    unset($_SESSION);
    //var_dump($_SESSION);
    header('Location: Inicio.php');
?>