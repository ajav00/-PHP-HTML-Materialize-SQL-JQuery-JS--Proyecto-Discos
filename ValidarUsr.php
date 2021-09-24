<?php 
    require_once("cargarClases.php");

    if (isset($_POST['usuario_usr']) && isset($_POST['password_usr']) ) {
        $obj =  ClienteDb::getUsuarioEmail(new Conexion(), $_POST['usuario_usr']);
        if (($obj)&&(password_verify($_POST['password_usr'], $obj->getPassword_cli()))) {
            session_start();
            $_SESSION['Usuario_cli'] = $obj->getNom_usuario_cli();
            $_SESSION['Nombre_cli'] = $obj->getNombres_cli();
            $_SESSION['Apellido_cli'] = $obj->getApellido1_cli();
            $_SESSION['Correo_cli'] = $obj->getCorreo_cli();
            $_SESSION['Celular_cli'] = $obj->getCelular();
            $_SESSION['Direccion_cli'] = $obj->getDireccion();
            $_SESSION['Id_cli'] = $obj->getId_cliente();
            echo $_SESSION['Usuario_cli'];
            var_dump($_SESSION);
            header('Location: Inicio.php');

        } else {
            header('Location: Inicio.php');
        }
    }else {
        header('Location: Inicio.php');
    }
?>



