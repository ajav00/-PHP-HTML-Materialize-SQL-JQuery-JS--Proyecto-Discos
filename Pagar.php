<?php
    include_once("Ac_Carrito.php");
    require_once("cargarClases.php");
    //session_start();


    if(isset($_REQUEST['btn']))
    {
        $total = 0;
        $fecha = date('d/m/Y');

        foreach($_SESSION['CARRITO'] as $indice => $producto){
            $total=$total+($producto['Cantidad']*$producto['Precio']);
        }
        $nuevoFac = new Factura($_SESSION['Id_cli'], $fecha, $total);
        $m = new FacturaDb(new Conexion());
        var_dump($nuevoFac);
        $m->añadir($nuevoFac);
        $lista_fac = FacturaDb::obtenerUltima(new Conexion());
        foreach ($lista_fac as $obj){
            $id_fact = $obj->getId_Factura();
        }

        foreach($_SESSION['CARRITO'] as $indice => $producto){
            $nuevoSal = new Salida($producto['Cantidad'], $id_fact, $producto['Id']);
            $n = new SalidaDb(new Conexion());
            $n->añadir($nuevoSal);
            $lista_inv = InventarioDb::listarObjetoPorId(new Conexion(), $producto['Id']);
            foreach ($lista_inv as $obj){
                $obj->setCantidad_salidas($obj->getCantidad_salidas()+$producto['Cantidad']);
                $obj->setCantidad_total($obj->getCantidad_total()-$producto['Cantidad']);
                $o = new InventarioDb(new Conexion());
                
                $o->modificarSalidas($obj);
            }

        }

        
        header('Location:Compra_Realizada.php');

    }

?>
