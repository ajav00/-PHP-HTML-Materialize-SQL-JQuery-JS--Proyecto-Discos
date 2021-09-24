<?php

    require_once("cargarClases.php");

    $resultado  = $_REQUEST['agregar_idioma'];
    switch ($resultado) {
        case 'Añadir':
        $nombre = $_POST['nombre_idioma'];
            
        if(!(filter_has_var(INPUT_POST, 'nombre_idioma') && (strlen(filter_input(INPUT_POST, 'nombre_idioma')) > 0))){
            echo "El nombre es obligatorio";
        }
        else{
            $nuevo = new Idioma($nombre);
            $m = new IdiomaDb(new Conexion());
            try{
                $m->añadir($nuevo);
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
        break;
        case 'Listar':
            $m = new IdiomaDb(new Conexion());
            $listaIdioma = $m->imprimirLista();

            for ($i=0; $i < count($listaIdioma); $i++) { 
                $listaIdioma[$i][] = 
                        '<button type="button" class="btn btn-warning btn-lg mx-3" 
                        data-id = "'.$listaIdioma[$i][0].'" 
                        data-nombre = "'.$listaIdioma[$i][1].'"
                        data-toggle="modal" 
                        data-target="#modIdioma"><i class="fas fa-wrench"></i>
                        </button>';
                $listaIdioma[$i][] = 
                        '<button type="button" class="btn btn-danger btn-lg mx-3" 
                        data-id = "'.$listaIdioma[$i][0].'" 
                        data-toggle="modal" 
                        data-target="#eliIdioma"><i class="fas fa-trash"></i>
                        </button>';
            }

            $resultado = [
                "draw"=>1,
                "recordsTotal" => count($listaIdioma),
                "recordsFiltered"=>count($listaIdioma),
                "data"=>$listaIdioma
            ];
            echo json_encode($resultado);
            break;

            case 'Modificar':
                $nombre = $_POST['m_idioma'];
                $id = $_POST['id_idi'];
                $nuevo = new Idioma($nombre, $id);
                $m = new IdiomaDb(new Conexion());
                    try{
                        $m->modificar($nuevo);
                    }
                    catch(Exception $e){
                        $e->getMessage();
                    }
                
            break;
            case 'Eliminar':
                $id = $_POST['id_idi'];
                $nuevo = new Idioma( null, $id);
                var_dump($nuevo);
                $m = new IdiomaDb(new Conexion());
                $m->eliminar($nuevo);
            break;
    }


?>