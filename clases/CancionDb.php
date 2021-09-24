<?php 
    //require_once "../autoload.php";
    //require_once "Db.php";
    //require_once "Cancion.php";
    class CancionDb
    {
        private $db;
        public function __construct(Db $db)
        {
            $this->db= $db;
        }
        public function añadir(Cancion $cancion)
        {
            $con = $this->db->getconexion();
            $sql = 'INSERT INTO cancion(nombre_can,id_artista,id_album,num_track) values(:nombre, :id_artista, :id_album, :num_track)';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':nombre',$cancion->getNombre());
            $sentencia->bindValue(':id_artista',$cancion->getId_Artista());
            $sentencia->bindValue(':id_album',$cancion->getId_Album());
            $sentencia->bindValue(':num_track',$cancion->getId_Num_Track());
            return $sentencia->execute();
        }
        public function imprimirLista()
        {
            $con = $this->db->getconexion();
            $sql = "SELECT  
                        cancion.id_cancion AS 'id',
                        cancion.nombre_can AS 'Nombre',
                        cancion.id_artista AS 'Id Art',
                        cancion.id_album AS 'Id Alb',
                        artista.nombre_art AS 'Artista',
                        album.nombre_alb AS 'Album',
                        cancion.num_track AS 'Track' 
                    FROM 
                        cancion JOIN album JOIN artista
                    ON
                        cancion.id_artista = artista.id_artista
                    AND
                        cancion.id_album = album.id_album; ";
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }
        public function modificar(Cancion $c)
        {
            $con = $this->db->getconexion();
            $sql = 'UPDATE cancion SET nombre_can= :nombre_can, id_artista= :id_artista,id_album = :id_album, num_track =:num_track WHERE id_cancion = :id_cancion';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':nombre_can',$c->getNombre());
            $sentencia->bindValue(':id_cancion',$c->getId_Cancion());
            $sentencia->bindValue(':id_artista',$c->getId_Artista());
            $sentencia->bindValue(':id_album',$c->getId_Album());
            $sentencia->bindValue(':num_track',$c->getId_Num_Track());
            return $sentencia->execute();
        }
        public function eliminar(Cancion $c)
        {
            $con = $this->db->getconexion();
            $sql = 'DELETE FROM cancion WHERE id_cancion= :id_cancion';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_cancion',$c->getId_Cancion());

            return $sentencia->execute();
        }

        static public function listarObjeto(Db $db, $album)
        {
            $con = $db->getConexion();
            $sql = "SELECT * FROM cancion WHERE id_album = :id_album";
            $sentencia = $con->prepare($sql); 
            $sentencia->bindValue(':id_album', $album);           
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Cancion',array(null,null,null,null,null));
            return $sentencia->fetchAll();
        }

    }

?>



