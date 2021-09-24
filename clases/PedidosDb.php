<?php 
    //require_once "../autoload.php";
    //require_once "Db.php";
    //require_once "Pedidos.php";
    class PedidosDb
    {
        private $db;
        public function __construct(Db $db)
        {
            $this->db= $db;
        }
        public function añadir(Pedidos $pedidos)
        {
            $con = $this->db->getconexion();
            $sql = 'INSERT INTO pedidos(id_cliente, nombre_ped, artista_ped, genero_ped) values(:id_cliente, :nombre_ped, :artista_ped, :genero_ped)';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_cliente',$pedidos->getId_Cliente());
            $sentencia->bindValue(':nombre_ped',$pedidos->getNombre_Ped());
            $sentencia->bindValue(':artista_ped',$pedidos->getArtista_Ped());
            $sentencia->bindValue(':genero_ped',$pedidos->getGenero_Ped());
            return $sentencia->execute();
        }
        public function imprimirLista()
        {
            $con = $this->db->getconexion();
            $sql = 'SELECT pedidos.id_pedido, pedidos.nombre_ped, pedidos.artista_ped, pedidos.genero_ped, cliente.nombres_cli FROM pedidos JOIN cliente
            ON pedidos.id_cliente = cliente.id_cliente';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }
        public function modificar(Pedidos $p)
        {
            $con = $this->db->getconexion();
            $sql = 'UPDATE pedidos SET id_cliente= :id_cliente, nombre_ped= :nombre_pedido, artista_ped= :artista_ped, genero_ped= :genero_ped  WHERE id_pedido= id_pedido';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_cliente',$p->getId_Cliente());
            $sentencia->bindValue(':nombre_ped',$p->getNombre_Ped());
            $sentencia->bindValue(':artista_ped',$p->getArtista_Ped());
            $sentencia->bindValue(':genero_ped',$p->getGenero_Ped());
            $sentencia->bindValue(':id_pedido',$p->getId_Pedido());
            return $sentencia->execute();
        }
        public function eliminar(Pedidos $p)
        {
            $con = $this->db->getconexion();
            $sql = 'DELETE FROM pedidos WHERE id_pedido= :id_pedido';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_pedido',$p->getId_Pedido());
            return $sentencia->execute();
        }
    }

?>