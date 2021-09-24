<?php 
    //require_once "../autoload.php";
    //require_once "Db.php";
    //require_once "Genero.php";
    class GeneroDb
    {
        private $db;
        public function __construct(Db $db)
        {
            $this->db= $db;
        }
        public function añadir(Genero $genero)
        {
            $con = $this->db->getconexion();
            $sql = 'INSERT INTO genero(nombre_gen) values(:nombre_gen)';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':nombre_gen',$genero->getNombre_Gen());
            return $sentencia->execute();
        }
        public function imprimirLista()
        {
            $con = $this->db->getconexion();
            $sql = 'SELECT id_genero,nombre_gen FROM genero';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }
        public function modificar(Genero $g)
        {
            $con = $this->db->getconexion();
            $sql = 'UPDATE genero SET nombre_gen = :nombre_gen WHERE id_genero= :id_genero';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':nombre_gen',$g->getNombre_Gen());
            $sentencia->bindValue(':id_genero',$g->getId_Genero());
            return $sentencia->execute();
        }
        public function eliminar(Genero $g)
        {
            $con = $this->db->getconexion();
            $sql = 'DELETE FROM genero WHERE id_genero= :id_genero';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_genero',$g->getId_Genero());
            return $sentencia->execute();
        }
        static public function listarObjetos(Db $db)
        {
            $con = $db->getConexion();
            $sql = 'SELECT * FROM genero';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Genero',array(null,null));
            return $sentencia->fetchAll();
        }

        static public function listarObjetoPorId(Db $db, $genero)
        {
            $con = $db->getConexion();
            $sql = "SELECT * FROM genero WHERE id_genero = :id_genero";
            $sentencia = $con->prepare($sql); 
            $sentencia->bindValue(':id_genero', $genero);           
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Genero',array(null,null));
            return $sentencia->fetchAll();
        }
    }

?>