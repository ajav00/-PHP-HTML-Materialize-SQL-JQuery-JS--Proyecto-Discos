<?php

    require_once("cargarClases.php");

    $resultado  = $_REQUEST['agregar_pedido'];
    switch ($resultado) {
        case 'Listar':
            $m = new PedidosDb(new Conexion());
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