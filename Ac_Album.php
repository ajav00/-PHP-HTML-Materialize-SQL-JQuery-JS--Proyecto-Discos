<?php

    require_once("cargarClases.php");

    $resultado  = $_REQUEST['agregar_album'];
    switch ($resultado) {
        case 'Añadir':
            $nombre = $_POST['nombre_album'];
            $artista = $_POST['alb_Artista'];
            $discografica = $_POST['alb_Discog'];
            $pais = $_POST['alb_Pais'];
            $idioma = $_POST['alb_Idioma'];
            $genero = $_POST['alb_Genero'];
            $fecha = $_POST['fecha_alb'];
            $duracion = $_POST['hora'].":".$_POST['minutos'].":".$_POST['segundos'];
            $canciones= $_POST['num_c_al'];
            $nombreImagen = $_FILES['img_album']['name'];
            $dir = 'Fondos/Album/'.$nombreImagen;
            if(trim($nombreImagen)!==""){
                move_uploaded_file($_FILES['img_album']['tmp_name'],$dir);
                $nuevo = new Album($nombre, $artista, $genero, $discografica, $idioma, $pais, $fecha, $duracion, $canciones, $dir, 1);
                var_dump($nuevo);
                $m = new AlbumDb(new Conexion());
                try{
                    $m->añadir($nuevo);

                    $lista_alb = AlbumDb::UltimoId(new Conexion());
                    foreach ($lista_alb as $obj){
                        $id = $obj->getId_Album();
                    }
                    $inv = new Inventario($id, 0, 0, 0, 100);
                    var_dump($inv);
                    $n = new InventarioDb(new Conexion());
                    $n->añadir($inv);
                }
                catch(Exception $e){
                    $e->getMessage();
                }
            }
        break;
        case 'Listar':
            $m = new AlbumDb(new Conexion());
            $listaAlbum = $m->imprimirLista();

            for ($i=0; $i < count($listaAlbum); $i++) { 
                $listaAlbum[$i][] = 
                        '<button type="button" class="btn btn-warning btn-lg mx-3" 
                        data-id = "'.$listaAlbum[$i][0].'" 
                        data-nombre = "'.$listaAlbum[$i][1].'"
                        data-artista = "'.$listaAlbum[$i][2].'"
                        data-discografica = "'.$listaAlbum[$i][3].'"
                        data-genero = "'.$listaAlbum[$i][4].'"
                        data-idioma = "'.$listaAlbum[$i][5].'"
                        data-pais = "'.$listaAlbum[$i][6].'"
                        data-fecha = "'.$listaAlbum[$i][13].'"
                        data-duracion = "'.$listaAlbum[$i][14].'"
                        data-canciones = "'.$listaAlbum[$i][15].'"
                        data-imagen = "'.$listaAlbum[$i][16].'"
                        data-toggle="modal" 
                        data-target="#modAlbum"><i class="fas fa-wrench"></i>
                        </button>';
                $listaAlbum[$i][] = 
                        '<button type="button" class="btn btn-danger btn-lg mx-3" 
                        data-id = "'.$listaAlbum[$i][0].'" 
                        data-toggle="modal" 
                        data-target="#eliAlbum"><i class="fas fa-trash"></i>
                        </button>';
                if ($listaAlbum[$i][7] == 1) {
                    $listaAlbum[$i][7]= '<a name="" id="" onclick="cambiar(event,this)" 
                                data-id = "'.$listaAlbum[$i][0].'" 
                                data-estado = "'.$listaAlbum[$i][7].'" 
                                class="btn btn-success" href="" role="button">Activo</a>';
                } else {
                    $listaAlbum[$i][7]= '<a name="" id="" onclick="cambiar(event,this)" 
                                data-id = "'.$listaAlbum[$i][0].'" 
                                data-estado = "'.$listaAlbum[$i][7].'" 
                                class="btn btn-danger" href="" role="button">Inactivo</a>';
                }
            }
            $resultado = [
                "draw"=>1,
                "recordsTotal" => count($listaAlbum),
                "recordsFiltered"=>count($listaAlbum),
                "data"=>$listaAlbum
            ];
            echo json_encode($resultado);
        break;


        case 'Modificar':
            $id = $_POST['id_album'];
            $nombre = $_POST['m_album'];
            $artista = $_POST['alb_Artista'];
            $discografica = $_POST['alb_Discog'];
            $pais = $_POST['alb_Pais'];
            $idioma = $_POST['alb_Idioma'];
            $genero = $_POST['alb_Genero'];
            $fecha = $_POST['fecha_alb'];
            $duracion = $_POST['hora'].":".$_POST['minutos'].":".$_POST['segundos'];
            $canciones= $_POST['num_c_al'];

            var_dump($_POST);
            if($_FILES["img_nueva"]["name"] !=""){
                $nombreImagen = $_FILES['img_nueva']['name'];
                $dir = 'Fondos/Album/'.$nombreImagen;
                move_uploaded_file($_FILES['img_nueva']['tmp_name'], $dir);
                   
            }
            else{
                $dir = $_POST["img_anti"];
                 
            }

            $nuevo = new Album($nombre, $artista, $genero, $discografica, $idioma, $pais, $fecha, $duracion, $canciones, $dir, 1, $id);
            var_dump($nuevo);
            $m = new AlbumDb(new Conexion());
            
            try{
                $m->modificar($nuevo);
            }
            catch(Exception $e){
                $e->getMessage();
            }
            
        break;
        case 'Eliminar':
            var_dump($_POST);
            $id = $_POST['id_album'];
            $nuevo = new Album(null, null, null, null, null, null, null, null, null, null, null, $id);
            $m = new AlbumDb(new Conexion());
            $m->eliminar($nuevo);
            break;

        case 'ModificarStatus':

            $prd = new Album(null,null,null,null,null,null ,null,null ,null, null, $_REQUEST['estado'], $_REQUEST['id']);
            $cdb = new AlbumDb(new Conexion());
            $cdb->modificarStatus($prd);
            
            break;





    }


?>