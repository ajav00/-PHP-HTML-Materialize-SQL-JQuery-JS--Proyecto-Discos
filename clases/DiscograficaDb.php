<?php 
    class DiscograficaDb
    {
        private $db;
        public function __construct(Db $db)
        {
            $this->db= $db;
        }
        public function añadir(Discografica $discografica)
        {
            $con = $this->db->getconexion();
            $sql = 'INSERT INTO discografica(nombre_disc) values(:nombre_disc)';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':nombre_disc',$discografica->getNombre_Disc());
            return $sentencia->execute();
        }
        public function imprimirLista()
        {
            $con = $this->db->getconexion();
            $sql = 'SELECT id_discografica,nombre_disc FROM discografica';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }
        public function modificar(Discografica $d)
        {
            $con = $this->db->getconexion();
            $sql = 'UPDATE discografica SET nombre_disc = :nombre_disc WHERE id_discografica= :id_discografica';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':nombre_disc',$d->getNombre_Disc());
            $sentencia->bindValue(':id_discografica',$d->getId_Discografica());
            return $sentencia->execute();
        }
        public function eliminar(Discografica $d)
        {
            $con = $this->db->getconexion();
            $sql = 'DELETE FROM discografica WHERE id_discografica= :id_discografica';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_discografica',$d->getId_Discografica());
            return $sentencia->execute();
        }
        static public function listarObjetos(Db $db)
        {
            $con = $db->getConexion();
            $sql = 'SELECT * FROM discografica';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Discografica',array(null,null));
            return $sentencia->fetchAll();
        }
        static public function listarObjetoPorId(Db $db, $discografica)
        {
            $con = $db->getConexion();
            $sql = "SELECT * FROM discografica WHERE id_discografica = :id_discografica";
            $sentencia = $con->prepare($sql); 
            $sentencia->bindValue(':id_discografica', $discografica);           
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Discografica',array(null,null));
            return $sentencia->fetchAll();
        }
    }

?>