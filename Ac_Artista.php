<?php

    require_once("cargarClases.php");

    $resultado  = $_REQUEST['agregar_artista'];
    switch ($resultado) {
        case 'Añadir':
            $nombre = $_POST['nombre_artista'];
            
            

            if(!(filter_has_var(INPUT_POST, 'nombre_artista') && (strlen(filter_input(INPUT_POST, 'nombre_artista')) > 0))){
                echo "El nombre es obligatorio";
            }
            
            else{
                echo $nombre;
                $nuevo = new Artista($nombre);
                $m = new ArtistaDb(new Conexion());
                try{
                    $m->añadir($nuevo);
                }
                catch(Exception $e){
                    $e->getMessage();
                }
            }
        break;
        case 'Listar':
            $m = new ArtistaDb(new Conexion());
            $listaArt = $m->imprimirLista();
            for ($i=0; $i < count($listaArt); $i++) { 
                $listaArt[$i][] = 
                        '<button type="button" class="btn btn-warning btn-lg mx-3" 
                        data-id = "'.$listaArt[$i][0].'" 
                        data-nombre = "'.$listaArt[$i][1].'"
                        data-toggle="modal" 
                        data-target="#modArtista"><i class="fas fa-wrench"></i>
                        </button>';
                $listaArt[$i][] = 
                        '<button type="button" class="btn btn-danger btn-lg mx-3" 
                        data-id = "'.$listaArt[$i][0].'" 
                        data-toggle="modal" 
                        data-target="#eliArtista"><i class="fas fa-trash"></i>
                        </button>';
            }

            $resultado = [
                "draw"=>1,
                "recordsTotal" => count($listaArt),
                "recordsFiltered"=>count($listaArt),
                "data"=>$listaArt
            ];
            echo json_encode($resultado);
        break;
        case 'Modificar':
            $nombre = $_POST['m_nombre_artista'];
            $id = $_POST['id_art'];
            $nuevo = new Artista($nombre, $id);
            $m = new ArtistaDb(new Conexion());
                try{
                    $m->modificar($nuevo);
                }
                catch(Exception $e){
                    $e->getMessage();
                }
            
        break;
        case 'Eliminar':
            $id = $_POST['id_art'];
            $nuevo = new Artista( null, $id);
            var_dump($nuevo);
            $m = new ArtistaDb(new Conexion());
            $m->eliminar($nuevo);
        
        break;
    }


?>