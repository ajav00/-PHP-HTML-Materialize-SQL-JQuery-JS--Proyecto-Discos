<?php

    require_once("cargarClases.php");

    $resultado  = $_REQUEST['agregar_pais'];
    switch ($resultado) {
        case 'Añadir':
        $nombre = $_POST['nombre_pais'];
            
        if(!(filter_has_var(INPUT_POST, 'nombre_pais') && (strlen(filter_input(INPUT_POST, 'nombre_pais')) > 0))){
            echo "El nombre es obligatorio";
        }
        else{
            echo $nombre;
            $nuevo = new Pais($nombre);
            $m = new PaisDb(new Conexion());
            try{
                $m->añadir($nuevo);
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
        break;
        case 'Listar':
            $m = new PaisDb(new Conexion());
            $listaPais = $m->imprimirLista();

            for ($i=0; $i < count($listaPais); $i++) { 
                $listaPais[$i][] = 
                        '<button type="button" class="btn btn-warning btn-lg mx-3" 
                        data-id = "'.$listaPais[$i][0].'" 
                        data-nombre = "'.$listaPais[$i][1].'"
                        data-toggle="modal" 
                        data-target="#modPais"><i class="fas fa-wrench"></i>
                        </button>';
                $listaPais[$i][] = 
                        '<button type="button" class="btn btn-danger btn-lg mx-3" 
                        data-id = "'.$listaPais[$i][0].'" 
                        data-toggle="modal" 
                        data-target="#eliPais"><i class="fas fa-trash"></i>
                        </button>';
            }
            $resultado = [
                "draw"=>1,
                "recordsTotal" => count($listaPais),
                "recordsFiltered"=>count($listaPais),
                "data"=>$listaPais
            ];
            echo json_encode($resultado);
            break;
            case 'Modificar':
                $nombre = $_POST['m_pais'];
                $id = $_POST['id_pais'];
                $nuevo = new Pais($nombre, $id);
                $m = new PaisDb(new Conexion());
                    try{
                        $m->modificar($nuevo);
                    }
                    catch(Exception $e){
                        $e->getMessage();
                    }
                
            break;
            case 'Eliminar':
                $id = $_POST['id_pais'];
                $nuevo = new Pais( null, $id);
                var_dump($nuevo);
                $m = new PaisDb(new Conexion());
                $m->eliminar($nuevo);
            
            break;
    }


?>