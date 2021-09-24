<?php 
    //require_once "../autoload.php";
    //require_once "Db.php";
    //require_once "Entrada.php";
    class EntradaDb
    {
        private $db;
        public function __construct(Db $db)
        {
            $this->db= $db;
        }
        public function añadir(Entrada $e)
        {
            $con = $this->db->getconexion();
            $sql = 'INSERT INTO entrada(cantidad_e, costo_e, fecha_e, id_administrador, id_inventario,id_proveedor) values(:cantidad_e, :costo_e, :fecha_e, :id_administrador, :id_inventario, :id_proveedor)';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':cantidad_e',$e->getCantidad_E());
            $sentencia->bindValue(':costo_e',$e->getCosto_E());
            $sentencia->bindValue(':fecha_e',$e->getFecha_E());
            $sentencia->bindValue(':id_administrador',$e->getId_Administrador());
            $sentencia->bindValue(':id_inventario',$e->getId_Inventario());
            $sentencia->bindValue(':id_proveedor',$e->getId_Proveedor());
            return $sentencia->execute();
        }
        public function imprimirLista()
        {
            $con = $this->db->getconexion();
            $sql = 'SELECT
                        entrada.id_entrada, 
                        entrada.cantidad_e, 
                        entrada.costo_e, 
                        entrada.fecha_e, 
                        album.nombre_alb, 
                        administrador.usuario_admi, 
                        proveedor.nombre_prov 
                    FROM 
                        entrada JOIN inventario JOIN album JOIN administrador JOIN proveedor
                    ON
                        entrada.id_administrador = administrador.id_administrador
                    AND
                        entrada.id_inventario = inventario.id_inventario
                    AND
                        inventario.id_album = album.id_album
                    AND
                        entrada.id_proveedor = proveedor.id_proveedor';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }
        /*public function modificar(Entrada $e)
        {
            $con = $this->db->getconexion();
            $sql = 'UPDATE entrada SET cantidad_e= :cantidad_e, costo_e= :costo_e, fecha_e=:fecha_e, id_administrador=:id_administrador, id_inventario= :id_inventario, id_proveedor= :id_proveedor WHERE id_entrada= :id_entrada';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':cantidad_e',$e->getCantidad_E());
            $sentencia->bindValue(':costo_e',$e->getCosto_E());
            $sentencia->bindValue(':fecha_e',$e->getFecha_E());
            $sentencia->bindValue(':id_administrador',$e->getId_Adminsitrador());
            $sentencia->bindValue(':id_inventario',$e->getId_Entrada());
            $sentencia->bindValue(':id_provedor',$e->getId_ProveedOr());
            $sentencia->bindValue(':id_entrada',$e->getId_Entrada());
            return $sentencia->execute();
        }
        public function eliminar(Entrada $e)
        {
            $con = $this->db->getconexion();
            $sql = 'DELETE FROM entrada WHERE id_entrada= :id_entrada';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_entrada',$e->getId_Entrada());
            return $sentencia->execute();
        }*/
    }

?>