<?php

    require_once("cargarClases.php");
    session_start();

    $resultado  = $_REQUEST['Accion'];
    switch ($resultado) {
        case 'Añadir':
        $nombre = $_REQUEST['album_ped'];
        $artista = $_REQUEST['artista_ped'];
        $genero = $_REQUEST['genero_ped'];

        $nuevo = new Pedidos($_SESSION['Id_cli'], $nombre, $artista, $genero);
        $m = new PedidosDb(new Conexion());
        var_dump($nuevo);
        try{
            $m->añadir($nuevo);
        }
        catch(Exception $e){
            $e->getMessage();
        } 
        header('Location:Pedidos.php');  
        break;

        
    }


?>