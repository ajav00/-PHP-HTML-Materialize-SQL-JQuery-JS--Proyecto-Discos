<?php
session_start();
$mensaje= "";
var_dump($_REQUEST);
var_dump($_POST);

if(isset($_POST['btnAccion'])){

    switch($_POST['btnAccion']){
        case 'Agregar':
            if(is_numeric($_POST['id'])){
                $Id = $_POST['id'];
            }
            
            if(is_string($_POST['nombre'])){
                $Nombre = $_POST['nombre'];
            }
            
            if(is_numeric(trim($_POST['precio']))){
                $Precio = trim($_POST['precio']);
            }
            if(is_numeric(trim($_POST['cantidadTot']))){
                $Total = trim($_POST['cantidadTot']);
            }
            if(is_numeric($_POST['cantidad'])){
                $Cantidad = $_POST['cantidad'];
            }

            if(!isset($_SESSION['CARRITO'])){
                $producto = array(
                    'Id' => $Id,
                    'Nombre' => $Nombre,
                    'Precio' => $Precio,
                    'Total' => $Total,
                    'Cantidad' => $Cantidad                
                );
                $_SESSION['CARRITO'][0] = $producto;
            }
            else{
                $id_productos = array_column($_SESSION['CARRITO'], 'Id');
                if(in_array($Id, $id_productos)){;
                    foreach($_SESSION['CARRITO'] as $indice => $producto){
                        if($producto['Id']== $Id){
                            if($_SESSION['CARRITO'][$indice]['Cantidad']<$_SESSION['CARRITO'][$indice]['Total']){
                                $_SESSION['CARRITO'][$indice]['Cantidad']+=1;
                            }
                            else{
                                echo "<script>alert('Tu pedido supera las unidades disponibles');</script>";
                            }
                            
                        }
                    }
                }
                else{
                        $NumProd= count($_SESSION['CARRITO']);
                        $producto =array(
                        'Id' => $Id,
                        'Nombre' => $Nombre,
                        'Precio' => $Precio,
                        'Total' => $Total,
                        'Cantidad' => $Cantidad                
                    );
                    $_SESSION['CARRITO'][$NumProd] = $producto;
                }
            }
        
        header('Location:Ad_Carrito.php');
        break;
        case 'Eliminar':
            if(is_numeric($_POST['id'])){
                $Id = $_POST['id'];
                foreach($_SESSION['CARRITO'] as $indice => $producto){
                    if($producto['Id']== $Id){
                        unset($_SESSION['CARRITO'][$indice]);
                    }
                }

            }
        header('Location:Ad_Carrito.php');
        break;

    }
}


if(isset($_REQUEST['btnAccion'])){

    switch($_REQUEST['btnAccion']){
        case 'Vaciar':

            foreach($_SESSION['CARRITO'] as $indice => $producto){
                unset($_SESSION['CARRITO'][$indice]);
            }

            
        header('Location: Inicio.php');
        break;
    }



}



?>





