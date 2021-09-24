

<?php

require_once("cargarClases.php");

$resultado  = $_REQUEST['agregar_cliente'];

switch ($resultado) {
    case 'Añadir':
        $nombre = $_POST['nombre_cli'];
        $apellido1 = $_POST['apellido_pat_cli'];
        $apellido2 = $_POST['apellido_mat_cli'];
        $direccion = $_POST['direccion_cli'];
        $email = $_POST['email_cli'];
        $celular = $_POST['celular_cli'];
        $usuario = $_POST['usuario_cli'];
        $password = $_POST['contraseña_cli'];
        $nuevo = new Cliente($nombre, $apellido1, $apellido2, $usuario, $email, $direccion, $celular, $password, 1);
        $m = new ClienteDb(new Conexion());
        try{
            $m->añadir($nuevo);
        }
        catch(Exception $e){
            $e->getMessage();
        }
        
    break;
    case 'Listar':
        $m = new ClienteDb(new Conexion());
        $listaAdmin = $m->imprimirLista();
        
        $resultado = [
            "draw"=>1,
            "recordsTotal" => count($listaAdmin),
            "recordsFiltered"=>count($listaAdmin),
            "data"=>$listaAdmin
        ];
        echo json_encode($resultado);
        break;
        /*for ($i=0; $i < count($listaCliente); $i++) { 
            $listaCliente[$i][] = 
                    '<button type="button" class="btn btn-warning btn-lg mx-3" 
                    data-id = "'.$listaCliente[$i][0].'" 
                    data-nombre = "'.$listaCliente[$i][1].'"
                    data-apellido1 = "'.$listaCliente[$i][2].'"
                    data-apellido2 = "'.$listaCliente[$i][3].'"
                    data-direccion = "'.$listaCliente[$i][4].'"
                    data-celular = "'.$listaCliente[$i][5].'"
                    data-email = "'.$listaCliente[$i][6].'"
                    data-usuario = "'.$listaCliente[$i][7].'"
                    data-toggle="modal" 
                    data-target="#modCliente">
                    </button>';
            $listaCliente[$i][] = 
                    '<button type="button" class="btn btn-danger btn-lg mx-3" 
                    data-id = "'.$listaCliente[$i][0].'" 
                    data-toggle="modal" 
                    data-target="#eliCliente">
                    </button>';
        }
    break;*/
    case 'Verificar':
        $usr = ClienteDb::getUsuarioEmail(new Conexion(), $_REQUEST['usuario_cli']);
        
        if ($_REQUEST['usuario_cli']=="") {
            echo'<div class="red-text">Campo vacio</div>';
        }
        else {
            echo $usr?'<div class="red-text">Ya existe</div>':'<div class="green-text">Esta bien</div>';
        }
        
        break;


    
}


?>

