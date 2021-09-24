<?php

    require_once("cargarClases.php");

    $resultado  = $_REQUEST['agregar_inventario'];
    switch ($resultado) {
        case 'Listar':
            $m = new InventarioDb(new Conexion());
            $listaGenero = $m->imprimirLista();

            for ($i=0; $i < count($listaGenero); $i++) { 
                $listaGenero[$i][] = 
                        '<button type="button" class="btn btn-warning btn-lg mx-3" 
                        data-id = "'.$listaGenero[$i][0].'" 
                        data-precio = "'.$listaGenero[$i][5].'"
                        data-toggle="modal" 
                        data-target="#modInv">
                        </button>';
            }

            $resultado = [
                "draw"=>1,
                "recordsTotal" => count($listaGenero),
                "recordsFiltered"=>count($listaGenero),
                "data"=>$listaGenero
            ];
            echo json_encode($resultado);
            break;

            case 'Modificar':
                $precio = $_POST['m_precio'];
                $id = $_POST['id_inv'];
                $nuevo = new Inventario(null, null, null, null, $precio, $id);
                $m = new InventarioDb(new Conexion());
                    try{
                        $m->modificar($nuevo);
                    }
                    catch(Exception $e){
                        $e->getMessage();
                    }
                
            break;
    }


?>