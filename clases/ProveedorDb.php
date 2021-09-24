<?php 
    //require_once "../autoload.php";
    //require_once "Db.php";
    //require_once "Proveedor.php";
    class ProveedorDb
    {
        private $db;
        public function __construct(Db $db)
        {
            $this->db= $db;
        }
        public function añadir(Proveedor $proveedor)
        {
            $con = $this->db->getconexion();
            $sql = 'INSERT INTO artista(celular_prov, nombre_prov) values(:celular_prov, :nombre_prov)';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':celular_prov',$proveedor->getCelular_Prov());
            $sentencia->bindValue(':nombre_prov',$proveedor->getNombre_Prov());
            return $sentencia->execute();
        }
        public function imprimirLista()
        {
            $con = $this->db->getconexion();
            $sql = 'SELECT id_proveedor,celular_prov, nombre_prov FROM proveedor';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }
        public function modificar(Proveedor $p)
        {
            $con = $this->db->getconexion();
            $sql = 'UPDATE artista SET celular_prov, nombre_prov = :celular_prov, :nombre_prov  WHERE id_proveedor= :id_proveedor';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':celular_prov',$p->getCelular_Prov());
            $sentencia->bindValue(':nombre_prov',$p->getNombre_Prov());
            $sentencia->bindValue(':id_proveedor',$p->getId_Proveedor());
            return $sentencia->execute();
        }
        public function eliminar(Proveedor $p)
        {
            $con = $this->db->getconexion();
            $sql = 'DELETE FROM proveedor WHERE id_proveedor= :id_proveedor';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_proveedor',$p->getId_Proveedor());
            return $sentencia->execute();
        }

        static public function listarObjetos(Db $db)
        {
            $con = $db->getConexion();
            $sql = 'SELECT * FROM proveedor';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Proveedor',array(null, null, null));
            return $sentencia->fetchAll();
        }
    }

?>