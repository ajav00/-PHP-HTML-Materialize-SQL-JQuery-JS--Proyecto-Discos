<?php 
    session_start();
    if (isset($_SESSION['Usuario_cli'])) {
        header('Location: Inicio.php');
    }
?>