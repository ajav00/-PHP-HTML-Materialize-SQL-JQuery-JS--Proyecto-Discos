<?php

    require_once("cargarClases.php");

    $resultado  = $_REQUEST['agregar_cancion'];
    switch ($resultado) {
        case 'Añadir':
        $nombre = $_POST['nombre_can'];
        $artista = $_POST['alb_Artista'];
        $album = $_POST['nombre_Alb'];
        $num = $_POST['num_track'];
            $nuevo = new Cancion($nombre, $artista, $album, $num);

            $m = new CancionDb(new Conexion());
            try{
                $m->añadir($nuevo);
            }
            catch(Exception $e){
                $e->getMessage();
            }
        break;
        case 'Listar':
            $m = new CancionDb(new Conexion());
            $listaCancion = $m->imprimirLista();
            for ($i=0; $i < count($listaCancion); $i++) { 
                $listaCancion[$i][] = 
                        '<button type="button" class="btn btn-warning btn-lg mx-3" 
                        data-id = "'.$listaCancion[$i][0].'" 
                        data-nombre = "'.$listaCancion[$i][1].'"
                        data-artista = "'.$listaCancion[$i][2].'"
                        data-album = "'.$listaCancion[$i][3].'"
                        data-track = "'.$listaCancion[$i][6].'"
                        data-toggle="modal" 
                        data-target="#modCancion"><i class="fas fa-wrench"></i>
                        </button>';
                $listaCancion[$i][] = 
                        '<button type="button" class="btn btn-danger btn-lg mx-3" 
                        data-id = "'.$listaCancion[$i][0].'" 
                        data-toggle="modal" 
                        data-target="#eliCancion"><i class="fas fa-trash"></i>
                        </button>';
            }

            $resultado = [
                "draw"=>1,
                "recordsTotal" => count($listaCancion),
                "recordsFiltered"=>count($listaCancion),
                "data"=>$listaCancion
            ];
            echo json_encode($resultado);
        break;
        case 'Modificar':
            $nombre = $_POST['nombre_mcan'];
            $id = $_POST['id_can'];
            $artista = $_POST['alb_mArtista'];
            $album = $_POST['nombre_mAlb'];
            $num = $_POST['num_mtrack'];
            $nuevo = new Cancion($nombre, $artista, $album, $num, $id);
            $m = new CancionDb(new Conexion());
                try{
                    $m->modificar($nuevo);
                }
                catch(Exception $e){
                    $e->getMessage();
                }
            
        break;
        case 'Eliminar':
            $id = $_POST['id_can'];
            echo $id;
            $nuevo = new Cancion( null, null, null, null, $id);
            var_dump($nuevo);
            $m = new CancionDb(new Conexion());
            $m->eliminar($nuevo);
        
        break;
    }


?>




