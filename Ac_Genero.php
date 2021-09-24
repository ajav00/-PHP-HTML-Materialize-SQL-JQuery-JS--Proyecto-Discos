<?php

    require_once("cargarClases.php");

    $resultado  = $_REQUEST['agregar_genero'];
    switch ($resultado) {
        case 'Añadir':
        $nombre = $_POST['nombre_genero'];
            
        if(!(filter_has_var(INPUT_POST, 'nombre_genero') && (strlen(filter_input(INPUT_POST, 'nombre_genero')) > 0))){
            echo "El nombre es obligatorio";
        }
        else{
            $nuevo = new Genero($nombre);
            $m = new GeneroDb(new Conexion());
            try{
                $m->añadir($nuevo);
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
        break;
        case 'Listar':
            $m = new GeneroDb(new Conexion());
            $listaGenero = $m->imprimirLista();

            for ($i=0; $i < count($listaGenero); $i++) { 
                $listaGenero[$i][] = 
                        '<button type="button" class="btn btn-warning btn-lg mx-3" 
                        data-id = "'.$listaGenero[$i][0].'" 
                        data-nombre = "'.$listaGenero[$i][1].'"
                        data-toggle="modal" 
                        data-target="#modGenero"><i class="fas fa-wrench"></i>
                        </button>';
                $listaGenero[$i][] = 
                        '<button type="button" class="btn btn-danger btn-lg mx-3" 
                        data-id = "'.$listaGenero[$i][0].'" 
                        data-toggle="modal" 
                        data-target="#eliGenero"><i class="fas fa-trash"></i>
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
                $nombre = $_POST['m_genero'];
                $id = $_POST['id_gen'];
                $nuevo = new Genero($nombre, $id);
                $m = new GeneroDb(new Conexion());
                    try{
                        $m->modificar($nuevo);
                    }
                    catch(Exception $e){
                        $e->getMessage();
                    }
                
            break;
            case 'Eliminar':
                $id = $_POST['id_gen'];
                $nuevo = new Genero( null, $id);
                var_dump($nuevo);
                $m = new GeneroDb(new Conexion());
                $m->eliminar($nuevo);
            
            break;
    }


?>