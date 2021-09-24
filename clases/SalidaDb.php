<?php 
    //require_once "../autoload.php";
    //require_once "Db.php";
    //require_once "Salida.php";
    class SalidaDb
    {
        private $db;
        public function __construct(Db $db)
        {
            $this->db= $db;
        }
        public function añadir(Salida $salida)
        {
            $con = $this->db->getconexion();
            $sql = 'INSERT INTO salida(cantidad_s, id_factura, id_inventario) values(:cantidad_s, :id_factura, :id_inventario)';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':cantidad_s',$salida->getCantidad_S());
            $sentencia->bindValue(':id_factura',$salida->getId_Factura());
            $sentencia->bindValue(':id_inventario',$salida->getId_Inventario());
            return $sentencia->execute();
        }
        public function imprimirLista()
        {
            $con = $this->db->getconexion();
            $sql = 'SELECT id_salida, cantidad_s, id_factura, nombre_alb 
            FROM 
            salida JOIN inventario JOIN album
            ON
            salida.id_inventario = inventario.id_inventario
            AND
            inventario.id_album = album.id_album';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }
        public function modificar(Salida $s)
        {
            $con = $this->db->getconexion();
            $sql = 'UPDATE salida SET cantidad_s= :cantidad_s, id_factura= :id_factura, id_inventario= :id_inventario  WHERE id_salida= :id_salida';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':cantidad_s',$s->getCantidad_S());
            $sentencia->bindValue(':id_factura',$s->getId_Factura());
            $sentencia->bindValue(':id_inventario',$s->getId_Inventario());
            $sentencia->bindValue(':id_salida',$s->getId_Salida());
            return $sentencia->execute();
        }
        /*public function eliminar(Salida $s)
        {
            $con = $this->db->getconexion();
            $sql = 'DELETE FROM Salida WHERE id_salida= :id_salida';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_salida',$s->getId_Salida());
            return $sentencia->execute();
        }*/
        static public function masSalidas(Db $db)
        {
            $c=$db->getConexion();
            $sql=   "SELECT 
                        COUNT(salida.id_inventario) AS 'Nro', album.nombre_alb AS 'Album' 
                    FROM 
                        salida JOIN inventario JOIN ALBUM 
                    ON
                        salida.id_inventario = inventario.id_inventario
                    AND 
                        inventario.id_album = album.id_album
                    GROUP BY 
                        salida.id_inventario;";
            $sentencia=$c->prepare($sql);
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }
    }

?>