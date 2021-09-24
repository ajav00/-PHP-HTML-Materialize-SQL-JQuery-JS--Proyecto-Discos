<?php 
    //require_once "../autoload.php";
    //require_once "Db.php";
    //require_once "Factura.php";
    class FacturaDb
    {
        private $db;
        public function __construct(Db $db)
        {
            $this->db= $db;
        }
        public function añadir(Factura $factura)
        {
            $con = $this->db->getconexion();
            $sql = 'INSERT INTO factura(id_cliente,  fecha_f, total_f) values(:id_cliente, :fecha_f, :total_f)';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_cliente',$factura->getId_Cliente());
            $sentencia->bindValue(':fecha_f', $factura->getFecha_F());
            $sentencia->bindValue(':total_f', $factura->getTotal_F());
            return $sentencia->execute();
        }
        public function imprimirLista()
        {
            $con = $this->db->getconexion();
            $sql = 'SELECT factura.id_factura, cliente.nombres_cli, factura.fecha_f, factura.total_f 
            FROM 
            factura JOIN cliente
            ON
            factura.id_cliente = cliente.id_cliente';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }
        public function modificar(Factura $f)
        {
            $con = $this->db->getconexion();
            $sql = 'UPDATE factura SET id_cliente= :id_cliente, fecha_f= :fecha_f, total_f= :total_f WHERE id_factura=id_factura';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_cliente',$f->getId_Cliente());
            $sentencia->bindValue(':fecha_f',$f->getFecha_F());
            $sentencia->bindValue(':total_f',$f->getTotal_F());
            $sentencia->bindValue('id_factura:',$f->getId_Factura());
            return $sentencia->execute();
        }
        /*public function eliminar(Factura $f)
        {
            $con = $this->db->getconexion();
            $sql = 'DELETE FROM factura WHERE id_factura = :id_factura';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_factura',$p->getId_Factura());
            return $sentencia->execute();
        }*/
        static public function obtenerUltima(Db $db)
        {
            $con = $db->getconexion();
            $sql = 'SELECT id_factura, id_cliente, fecha_f, total_f FROM factura ORDER BY id_factura DESC LIMIT 1';
            $sentencia = $con->prepare($sql);
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Factura',array(null,null, null, null));
            return $sentencia->fetchAll();
        }

        static public function mejorCliente(Db $db)
        {
            $c=$db->getConexion();
            $sql=   "SELECT 
                        COUNT(factura.id_cliente) AS 'Nro', cliente.nom_usuario_cli AS 'Usr' 
                    FROM        
                        factura JOIN cliente
                    ON
                        factura.id_cliente = cliente.id_cliente 
                    GROUP BY 
                        factura.id_cliente;";
            $sentencia=$c->prepare($sql);
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }



    }

?>