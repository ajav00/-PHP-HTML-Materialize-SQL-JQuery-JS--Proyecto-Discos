<?php

    require_once("cargarClases.php");
    session_start();

    $resultado  = $_REQUEST['agregar_entrada'];
    switch ($resultado) {
        case 'Añadir':
        $cantidad = $_REQUEST['cantidad_ent'];
        $precio = $_REQUEST['precio_ent'];
        $album = $_REQUEST['nombre_Alb'];
        $prov = $_REQUEST['proveedor'];
            $nuevo = new Entrada($cantidad, $precio, date('d/m/Y'),  $_SESSION['Id_admi'], $album, $prov);
            $m = new EntradaDb(new Conexion());
            //var_dump($nuevo);
            try{
                $m->añadir($nuevo);
                $lista_inv = InventarioDb::listarObjetoPorId(new Conexion(), $album);
                foreach ($lista_inv as $obj){
                    $obj->setCantidad_entradas($obj->getCantidad_entradas()+$cantidad);
                    $obj->setCantidad_total($obj->getCantidad_total()+$cantidad);
                    $o = new InventarioDb(new Conexion());
                    $o->modificarEntradas($obj);
                }

            }
            catch(Exception $e){
                $e->getMessage();
            }
        break;
        case 'Listar':
            $m = new EntradaDb(new Conexion());
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