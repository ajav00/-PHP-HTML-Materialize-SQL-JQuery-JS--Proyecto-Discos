<?php 
    //require_once "../autoload.php";
    //require_once "Db.php";
    //require_once "Idioma.php";
    class IdiomaDb
    {
        private $db;
        public function __construct(Db $db)
        {
            $this->db= $db;
        }
        public function añadir(Idioma $idioma)
        {
            $con = $this->db->getconexion();
            $sql = 'INSERT INTO idioma(nombre_idi) values(:nombre_idi)';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':nombre_idi',$idioma->getNombre_Idi());
            return $sentencia->execute();
        }
        public function imprimirLista()
        {
            $con = $this->db->getconexion();
            $sql = 'SELECT id_idioma,nombre_idi FROM idioma';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }
        public function modificar(Idioma $i)
        {
            $con = $this->db->getconexion();
            $sql = 'UPDATE idioma SET nombre_idi = :nombre_idi WHERE id_idioma= :id_idioma';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':nombre_idi',$i->getNombre_Idi());
            $sentencia->bindValue(':id_idioma',$i->getId_Idioma());
            return $sentencia->execute();
        }
        public function eliminar(Idioma $i)
        {
            $con = $this->db->getconexion();
            $sql = 'DELETE FROM idioma WHERE id_idioma= :id_idioma';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_idioma',$i->getId_Idioma());
            return $sentencia->execute();
        }
        static public function listarObjetos(Db $db)
        {
            $con = $db->getConexion();
            $sql = 'SELECT * FROM idioma';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Idioma',array(null,null));
            return $sentencia->fetchAll();
        }

        static public function listarObjetoPorId(Db $db, $idioma)
        {
            $con = $db->getConexion();
            $sql = "SELECT * FROM idioma WHERE id_idioma = :id_idioma";
            $sentencia = $con->prepare($sql); 
            $sentencia->bindValue(':id_idioma', $idioma);           
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Idioma',array(null,null));
            return $sentencia->fetchAll();
        }
    }

?>