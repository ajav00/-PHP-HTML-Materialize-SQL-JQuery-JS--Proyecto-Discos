<?php

    require_once("cargarClases.php");

    $resultado  = $_REQUEST['agregar_discog'];
    switch ($resultado) {
        case 'Añadir':
            $nombre = $_POST['nombre_discog'];
            
            if(!(filter_has_var(INPUT_POST, 'nombre_discog') && (strlen(filter_input(INPUT_POST, 'nombre_discog')) > 0))){
                echo "El nombre es obligatorio";
            }
            else{
                $nuevo = new Discografica($nombre);
                $m = new DiscograficaDb(new Conexion());
                try{
                    $m->añadir($nuevo);
                }
                catch(Exception $e){
                    $e->getMessage();
                }
            }
        break;
        case 'Listar':
            $m = new DiscograficaDb(new Conexion());
            $listaDiscog = $m->imprimirLista();

            for ($i=0; $i < count($listaDiscog); $i++) { 
                $listaDiscog[$i][] = 
                        '<button type="button" class="btn btn-warning btn-lg mx-3" 
                        data-id = "'.$listaDiscog[$i][0].'" 
                        data-nombre = "'.$listaDiscog[$i][1].'"
                        data-toggle="modal" 
                        data-target="#modDiscog"><i class="fas fa-wrench"></i>
                        </button>';
                $listaDiscog[$i][] = 
                        '<button type="button" class="btn btn-danger btn-lg mx-3" 
                        data-id = "'.$listaDiscog[$i][0].'" 
                        data-toggle="modal" 
                        data-target="#eliDiscog"><i class="fas fa-trash"></i>
                        </button>';
            }

            $resultado = [
                "draw"=>1,
                "recordsTotal" => count($listaDiscog),
                "recordsFiltered"=>count($listaDiscog),
                "data"=>$listaDiscog
            ];
            echo json_encode($resultado);
            break;

            case 'Modificar':
                $nombre = $_POST['m_discog'];
                $id = $_POST['id_discog'];
                $nuevo = new Discografica($nombre, $id);
                var_dump($nuevo);
                $m = new DiscograficaDb(new Conexion());
                    try{
                        $m->modificar($nuevo);
                    }
                    catch(Exception $e){
                        $e->getMessage();
                    }
                
            break;
            case 'Eliminar':
                $id = $_POST['id_discog'];
                $nuevo = new Discografica( null, $id);
                var_dump($nuevo);
                $m = new DiscograficaDb(new Conexion());
                $m->eliminar($nuevo);
            
            break;
    }


?>