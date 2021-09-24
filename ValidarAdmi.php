<?php 
    require_once("cargarClases.php");

    if (isset($_POST['usuario_admi']) && isset($_POST['password_admi']) ) {
        $obj =  AdministradorDb::getAdmiEmail(new Conexion(), $_POST['usuario_admi']);
        if (($obj)&&(password_verify($_POST['password_admi'], $obj->getPassword_admi()))) {
            session_start();
            
            var_dump($obj);
            $_SESSION['Usuario_admi'] = $obj->getUsuario_Admi();
            $_SESSION['Id_admi'] = $obj->getId_administrador();
            $_SESSION['Nombre_admi'] = $obj->getNombres_Admin2();
            echo $_SESSION['Usuario_admi'];
            var_dump($_SESSION);
            header('Location: Ad_Album.php');

        } else {
            header('Location: Inicio.php');
        }
    }else {
        header('Location: Inicio.php');
    }
?>