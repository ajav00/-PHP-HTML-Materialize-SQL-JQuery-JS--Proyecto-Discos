<?php 
    //require_once "../autoload.php";
    //require_once "Db.php";
    //require_once "Inventario.php";
    class InventarioDb
    {
        private $db;
        public function __construct(Db $db)
        {
            $this->db= $db;
        }
        public function añadir(Inventario $inventario)
        {
            $con = $this->db->getconexion();
            $sql = 'INSERT INTO inventario(id_album, cantidad_total, cantidad_entradas, cantidad_salidas, precio_unit) values(:id_album, :cantidad_total, :cantidad_entradas, :cantidad_salidas, :precio_unit)';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_album',$inventario->getId_album());
            $sentencia->bindValue(':cantidad_total',$inventario->getCantidad_total());
            $sentencia->bindValue(':cantidad_entradas',$inventario->getCantidad_entradas());
            $sentencia->bindValue(':cantidad_salidas',$inventario->getCantidad_salidas());      
            $sentencia->bindValue(':precio_unit',$inventario->getPrecio_unit());
            return $sentencia->execute();
        }

        public function modificarSalidas(Inventario $i)
        {
            $con = $this->db->getconexion();
            $sql = 'UPDATE inventario SET cantidad_total= :cantidad_total, cantidad_salidas= :cantidad_salidas WHERE id_album= :id_album';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':cantidad_total', $i->getCantidad_total());
            $sentencia->bindValue(':cantidad_salidas', $i->getCantidad_salidas());
            $sentencia->bindValue(':id_album', $i->getId_album());
            return $sentencia->execute();
        }
        public function modificarEntradas(Inventario $i)
        {
            $con = $this->db->getconexion();
            $sql = 'UPDATE inventario SET cantidad_total= :cantidad_total, cantidad_entradas= :cantidad_entradas WHERE id_album= :id_album';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':cantidad_total', $i->getCantidad_total());
            $sentencia->bindValue(':cantidad_entradas', $i->getCantidad_entradas());
            $sentencia->bindValue(':id_album', $i->getId_album());
            return $sentencia->execute();
        }
        public function imprimirLista()
        {
            $con = $this->db->getconexion();
            $sql = 'SELECT 
                inventario.id_inventario, album.nombre_alb, inventario.cantidad_total, inventario.cantidad_entradas, inventario.cantidad_salidas, inventario.precio_unit 
            FROM 
                inventario
            JOIN 
                album
            ON 
                inventario.id_album = album.id_album';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }
        public function modificar(Inventario $i)
        {
            $con = $this->db->getconexion();
            $sql = 'UPDATE inventario SET precio_unit= :precio_unit WHERE id_inventario= :id_inventario';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':precio_unit',$i->getPrecio_Unit());
            $sentencia->bindValue(':id_inventario',$i->getId_Inventario());
            return $sentencia->execute();
        }

        /*public function listar()
        {
            $con = $this->db->getconexion();
            $sql = 'SELECT id_inventario,cantidad_total, cantidad_entradas, cantidad_salidas, costo_total, precio_unitario, estado FROM inventario';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }
        public function modificar(Inventario $i)
        {
            $con = $this->db->getconexion();
            $sql = 'UPDATE inventario SET id_inventario= :id_inventario, cantidad_total= :cantidad_total, cantidad_entradas= :cantidad_entradas, cantidad_salidas= :cantidad_salidas, costo_total= :costo_total, precio_unitario= :precio_unitario, estado= :estado WHERE id_inventario= :id_inventario';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':cantidad_total',$i->getCantidad_Total());
            $sentencia->bindValue(':cantidad_entradas',$i->getCantidad_Entradas());
            $sentencia->bindValue(':cantidad_salidas',$i->getCantidad_Salidas());
            $sentencia->bindValue(':costo_total',$i->getCosto_Total());
            $sentencia->bindValue(':precio_unit',$i->getPrecio_Unit());
            $sentencia->bindValue(':estado',$i->getEstado());
            $sentencia->bindValue(':id_inventario',$i->getId_Inventario());
            return $sentencia->execute();
        }
        public function eliminar(Inventario $i)
        {
            $con = $this->db->getconexion();
            $sql = 'DELETE FROM inventario WHERE id_inventario= :id_inventario';
            $sentencia = $con->prepare($sql);

            
            $sentencia->bindValue(':id_inventario',$i->getId_Inventario());
            return $sentencia->execute();
        }*/

        static public function listarObjetoPorId(Db $db, $album)
        {
            $con = $db->getConexion();
            $sql = "SELECT * FROM inventario WHERE id_album = :id_album";
            $sentencia = $con->prepare($sql); 
            $sentencia->bindValue(':id_album', $album);           
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Inventario', array(null,null, null, null, null, null));
            return $sentencia->fetchAll();
        }
        static public function masInventario(Db $db)
        {
            $c=$db->getConexion();
            $sql=   "SELECT 
                        inventario.cantidad_total AS 'Nro', album.nombre_alb AS 'Album' 
                    FROM 
                        inventario JOIN ALBUM 
                    ON
                        inventario.id_album = album.id_album;";
            $sentencia=$c->prepare($sql);
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }
    }

?>

