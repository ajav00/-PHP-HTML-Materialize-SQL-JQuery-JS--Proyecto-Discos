<?php 
    //require_once "../autoload.php";
    //require_once "Db.php";
    //require_once "Artista.php";
    class ArtistaDb
    {
        private $db;
        public function __construct(Db $db)
        {
            $this->db= $db;
        }
        public function añadir(Artista $artista)
        {
            $con = $this->db->getconexion();
            $sql = 'INSERT INTO artista(nombre_art) values(:nombre_art)';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':nombre_art',$artista->getNombre_Art());
            return $sentencia->execute();
        }
        public function imprimirLista()
        {
            $con = $this->db->getconexion();
            $sql = 'SELECT id_artista,nombre_art FROM artista';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }
        public function modificar(Artista $a)
        {
            $con = $this->db->getconexion();
            $sql = 'UPDATE artista SET nombre_art = :nombre_art WHERE id_artista= :id_artista';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':nombre_art',$a->getNombre_Art());
            $sentencia->bindValue(':id_artista',$a->getId_Artista());
            return $sentencia->execute();
        }
        public function eliminar(Artista $a)
        {
            $con = $this->db->getconexion();
            $sql = 'DELETE FROM artista WHERE id_artista= :id_artista';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_artista',$a->getId_Artista());
            return $sentencia->execute();
        }

        static public function listarObjetos(Db $db)
        {
            $con = $db->getConexion();
            $sql = 'SELECT * FROM artista';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Artista',array(null,null));
            return $sentencia->fetchAll();
        }

        static public function listarObjetoPorId(Db $db, $artista)
        {
            $con = $db->getConexion();
            $sql = "SELECT * FROM artista WHERE id_artista = :id_artista";
            $sentencia = $con->prepare($sql); 
            $sentencia->bindValue(':id_artista', $artista);           
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Artista',array(null,null));
            return $sentencia->fetchAll();
        }
    }

?>