<?php 
    
    class ClienteDb
    {
        private $db;
        public function __construct(Db $db)
        {
            $this->db= $db;
        }

        public function añadir(Cliente $cli)
        {
            $con = $this->db->getconexion();
            $sql = 'INSERT INTO cliente(nombres_cli, apellido1_cli, apellido2_cli, nom_usuario_cli, correo_cli, direccion,celular,password_cli, estado) values(:nombres_cli, :apellido1_cli, :apellido2_cli, :nom_usuario_cli, :correo_cli, :direccion,:celular,:password_cli, :estado)';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':nombres_cli',$cli->getNombres_cli());
            $sentencia->bindValue(':apellido1_cli',$cli->getApellido1_cli());
            $sentencia->bindValue(':apellido2_cli',$cli->getApellido2_cli());
            $sentencia->bindValue(':nom_usuario_cli',$cli->getNom_usuario_cli());
            $sentencia->bindValue(':correo_cli',$cli->getCorreo_cli());
            $sentencia->bindValue(':direccion',$cli->getDireccion());
            $sentencia->bindValue(':celular',$cli->getCelular());
            $sentencia->bindValue(':password_cli',$cli->getPassword_cli());
            $sentencia->bindValue(':estado',$cli->getEstado());            
            return $sentencia->execute();
        }

        public function imprimirLista()
        {
            $con = $this->db->getconexion();
            $sql = 'SELECT 
                    cliente.id_cliente AS "Id",
                    cliente.nombres_cli AS "Nombre", 
                    cliente.apellido1_cli AS "Apellido", 
                    cliente.apellido2_cli AS "Materno", 
                    cliente.direccion AS "Direccion", 
                    cliente.estado AS "Estado", 
                    cliente.celular AS "Celuar", 
                    cliente.correo_cli AS "Correo", 
                    cliente.nom_usuario_cli AS "Usuario" 
                    FROM cliente';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }

        /*public function modificar(Cliente $c)
        {
            $con = $this->db->getconexion();
            $sql = 'UPDATE cliente SET nombres_cli= :nombres_cli, apellido1_cli= :apellido1_cli, apellido2_cli= apellido2_cli, nom_usuario_cli= :nom_usuario_cli, correo_cli= :correo_cli, direccion= :direccion, celular= :celular, password_cli= :password_cli WHERE id_cliente= : id_cliente';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':nombres_cli',$c->getNombre_Cli());
            $sentencia->bindValue(':apellido1_cli',$c->getApellido1_Cli());
            $sentencia->bindValue(':apellido2_cli',$c->getApellido2_Cli());
            $sentencia->bindValue(':nom_usuario_cli',$c->getNom_Usuario_Cli());
            $sentencia->bindValue(':correo_cli',$c->getCorreo_Cli());
            $sentencia->bindValue(':direccion',$c->getDireccion());
            $sentencia->bindValue(':celular',$c->getCelular());
            $sentencia->bindValue(':password_cli',$c->getPassword_Cli());
            $sentencia->bindValue(':id_cliente',$c->getId_Cliente());
            return $sentencia->execute();
        }

        public function eliminar(Cliente $c)
        {
            $con = $this->db->getconexion();
            $sql = 'DELETE FROM cliente WHERE id_cliente= :id_cliente';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_cliente',$c->getId_Cliente());
            return $sentencia->execute();
        }*/

        static public function getUsuarioEmail(Db $db, $nom_usuario_cli)
        {
            $con = $db->getConexion();
            $sql = 'SELECT * FROM cliente WHERE nom_usuario_cli = :nom_usuario_cli';
            $sentencia = $con->prepare($sql); 
            $sentencia->bindValue(':nom_usuario_cli',$nom_usuario_cli);          
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Cliente',array(null,null,null,null,null,null,null,null,null));
            return $sentencia->fetch();
        }


    }

?>





-