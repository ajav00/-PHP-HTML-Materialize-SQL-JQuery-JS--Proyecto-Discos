<?php 
    //require_once "../autoload.php";
    //require_once "Db.php";
    //require_once "Pais.php";
    class PaisDb
    {
        private $db;
        public function __construct(Db $db)
        {
            $this->db= $db;
        }
        public function añadir(Pais $pais)
        {
            $con = $this->db->getconexion();
            $sql = 'INSERT INTO pais(nombre_pais) values(:nombre_pais)';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':nombre_pais',$pais->getNombre_Pais());
            return $sentencia->execute();
        }
        public function imprimirLista()
        {
            $con = $this->db->getconexion();
            $sql = 'SELECT id_pais,nombre_pais FROM pais';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }
        public function modificar(Pais $p)
        {
            $con = $this->db->getconexion();
            $sql = 'UPDATE pais SET nombre_pais = :nombre_pais WHERE id_pais= :id_pais';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':nombre_pais',$p->getNombre_Pais());
            $sentencia->bindValue(':id_pais',$p->getId_Pais());
            return $sentencia->execute();
        }
        public function eliminar(Pais $p)
        {
            $con = $this->db->getconexion();
            $sql = 'DELETE FROM pais WHERE id_pais= :id_pais';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_pais',$p->getId_Pais());
            return $sentencia->execute();
        }
        static public function listarObjetos(Db $db)
        {
            $con = $db->getConexion();
            $sql = 'SELECT * FROM pais';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Pais',array(null,null));
            return $sentencia->fetchAll();
        }
        
        static public function listarObjetoPorId(Db $db, $pais)
        {
            $con = $db->getConexion();
            $sql = "SELECT * FROM pais WHERE id_pais = :id_pais";
            $sentencia = $con->prepare($sql); 
            $sentencia->bindValue(':id_pais', $pais);           
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Pais',array(null,null));
            return $sentencia->fetchAll();
        }
    }

?>