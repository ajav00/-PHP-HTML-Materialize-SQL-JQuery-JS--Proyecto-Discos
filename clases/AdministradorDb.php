


<?php 
    //require_once("../cargarClases.php");
    //require_once "Db.php";
    //require_once "Administrador.php";
    class AdministradorDb
    {

        private $db;
        public function __construct(Db $db)
        {
            $this->db=$db;
        }
        public function añadir(Administrador $a)
        {
            
            $con = $this->db->getconexion();
            $sql="INSERT INTO administrador(descripcion_admi, nombres_admi, apellido1_admi, apellido2_admi, usuario_admi, password_admi, email_admi) VALUES (:descripcion_admi, :nombres_admi, :apellido1_admi, :apellido2_admi, :usuario_admi, :password_admi, :email_admi)";
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(":descripcion_admi",$a->getDescripcion_Admi());
            $sentencia->bindValue(":nombres_admi",$a->getNombres_Admin());
            $sentencia->bindValue(":apellido1_admi",$a->getApellido1_Admi());
            $sentencia->bindValue(":apellido2_admi",$a->getApellido2_Admi());
            $sentencia->bindValue(":email_admi",$a->getEmail_Admi());
            $sentencia->bindValue(":usuario_admi",$a->getUsuario_Admi());
            $sentencia->bindValue(":password_admi",$a->getPassword_Admi());
            
            echo $sql;
            return $sentencia->execute();
            
            
        }

        public function imprimirLista()
        {
            $con = $this->db->getconexion();
            $sql = 'SELECT id_administrador, nombres_admi, apellido1_admi, apellido2_admi, descripcion_admi, email_admi, usuario_admi FROM administrador';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }
        public function modificar(Administrador $a)
        {
            $con = $this->db->getconexion();
            $sql = 'UPDATE administrador SET descripcion_admi= :descripcion_admi ,nombres_admi= :nombres_admi, apellido1_admi= :apellido1_admi, apellido2_admi= :apellido2_admi,email_admi= :email_admi,usuario_admi= :usuario_admi WHERE id_administrador= :id_administrador';
            $sentencia = $con->prepare($sql);
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':descripcion_admi',$a->getDescripcion_Admi());
            $sentencia->bindValue(':nombres_admi',$a->getNombres_Admin());
            $sentencia->bindValue(':apellido1_admi',$a->getApellido1_Admi());
            $sentencia->bindValue(':apellido2_admi',$a->getApellido2_Admi());
            $sentencia->bindValue(':email_admi',$a->getEmail_Admi());
            $sentencia->bindValue(':usuario_admi',$a->getUsuario_Admi());
            $sentencia->bindValue(':id_administrador',$a->getId_Administrador());
            return $sentencia->execute();
        }
        public function eliminar(Administrador $a)
        {
            $con = $this->db->getconexion();
            $sql = 'DELETE FROM administrador WHERE id_administrador= :id_administrador';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_administrador',$a->getId_Administrador());
            return $sentencia->execute();
         }
        static public function getAdmiEmail(Db $db, $usuario_admi)
        {
            $con = $db->getConexion();
            $sql = 'SELECT * FROM administrador WHERE usuario_admi = :usuario_admi';
            $sentencia = $con->prepare($sql); 
            $sentencia->bindValue(':usuario_admi',$usuario_admi);          
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Administrador',array(null,null,null,null,null,null,null,null));
            return $sentencia->fetch();
        }
    }

?>
