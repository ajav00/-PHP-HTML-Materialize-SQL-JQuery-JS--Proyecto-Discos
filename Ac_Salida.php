<?php

    require_once("cargarClases.php");

    $resultado  = $_REQUEST['agregar_salida'];
    switch ($resultado) {
        case 'Listar':
            $m = new SalidaDb(new Conexion());
            $listaAdmin = $m->imprimirLista();
            
            $resultado = [
                "draw"=>1,
                "recordsTotal" => count($listaAdmin),
                "recordsFiltered"=>count($listaAdmin),
                "data"=>$listaAdmin
            ];
            echo json_encode($resultado);
            break;
    }


?>