<?php 
    session_start();
    if (!isset($_SESSION['Usuario_admi'])) {
        header('Location: Inicio.php');
    }
?>