<?php

    require_once("cargarClases.php");

    $resultado  = $_REQUEST['agregar_admi'];
    switch ($resultado) {
        case 'Añadir':
            $nombre = $_POST['nombre_admin'];
            $apellido1 = $_POST['apellido1_admi'];
            $apellido2 = $_POST['apellido2_admi'];
            $email = $_POST['email_admi'];
            $descripcion  = $_POST['descripcion_admi'];
            $usuario = $_POST['usuario_admi'];
            $password = $_POST['password_admi'];
            

            if(!(filter_has_var(INPUT_POST, 'nombre_admin') && (strlen(filter_input(INPUT_POST, 'nombre_admin')) > 0))){
                echo "El nombre es obligatorio";
            }
            else if(!(filter_has_var(INPUT_POST, 'apellido1_admi') && (strlen(filter_input(INPUT_POST, 'apellido1_admi')) > 0))){
                echo "El apellido Paterno es obligatorio";
            }
            else if(!(filter_has_var(INPUT_POST, 'email_admi') && (strlen(filter_input(INPUT_POST, 'email_admi')) > 0))){
                echo "El email es obligatorio";
            } 
            else if(!(filter_has_var(INPUT_POST, 'descripcion_admi') && (strlen(filter_input(INPUT_POST, 'descripcion_admi')) > 0))){
                echo "La descripcion es obligatoria";
            } 
            else if(!(filter_has_var(INPUT_POST, 'usuario_admi') && (strlen(filter_input(INPUT_POST, 'usuario_admi')) > 0))){
                echo "El usuario es obligatorio";
            } 
            else if(!(filter_has_var(INPUT_POST, 'password_admi') && (strlen(filter_input(INPUT_POST, 'password_admi')) > 0))){
                echo "La contraseña es obligatoria";
            }
            else{
                
                
                $nuevo = new Administrador($descripcion, $nombre, $apellido1, $apellido2, $email, $usuario, $password);
                
                $m = new AdministradorDb(new Conexion());
                try{
                    $m->añadir($nuevo);
                }
                catch(Exception $e){
                    $e->getMessage();
                }
            }
        break;
        case 'Listar':
            $m = new AdministradorDb(new Conexion());
            $listaAdm = $m->imprimirLista();
            for ($i=0; $i < count($listaAdm); $i++) { 
                $listaAdm[$i][] = 
                        '<button type="button" class="btn btn-warning btn-lg mx-3" 
                        data-id = "'.$listaAdm[$i][0].'" 
                        data-nombre = "'.$listaAdm[$i][1].'"
                        data-paterno = "'.$listaAdm[$i][2].'"
                        data-materno = "'.$listaAdm[$i][3].'"
                        data-descripcion = "'.$listaAdm[$i][4].'"
                        data-email = "'.$listaAdm[$i][5].'"
                        data-user = "'.$listaAdm[$i][6].'"
                        data-toggle="modal" 
                        data-target="#modAdmi"><i class="fas fa-wrench"></i>
                        </button>';
                $listaAdm[$i][] = 
                        '<button type="button" class="btn btn-danger btn-lg mx-3" 
                        data-id = "'.$listaAdm[$i][0].'" 
                        data-toggle="modal" 
                        data-target="#eliAdmi"><i class="fas fa-trash"></i>
                        </button>';
            }

            $resultado = [
                "draw"=>1,
                "recordsTotal" => count($listaAdm),
                "recordsFiltered"=>count($listaAdm),
                "data"=>$listaAdm
            ];
            echo json_encode($resultado);
        break;
        case 'Modificar':
            $nombre = $_POST['nombre_admin'];
            $apellido1 = $_POST['apellido1_admi'];
            $apellido2 = $_POST['apellido2_admi'];
            $email = $_POST['email_admi'];
            $descripcion  = $_POST['descripcion_admi'];
            $usuario = $_POST['usuario_admi'];
            $id = $_POST['id_admi'];
            $nuevo = new Administrador($descripcion, $nombre, $apellido1, $apellido2, $email, $usuario, null, $id);
            $m = new AdministradorDb(new Conexion());
            var_dump($nuevo);    
            try{
                    $m->modificar($nuevo);
                }
                catch(Exception $e){
                    $e->getMessage();
                }
            
        break;
        case 'Eliminar':
            $id = $_POST['id_admi'];
            $nuevo = new Administrador(null, null, null, null, null, null, null, $id);
            $m = new AdministradorDb(new Conexion());
            $m->eliminar($nuevo);
        
        break;

}