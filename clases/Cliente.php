<?php
    class Cliente
        {
                private $id_cliente;
                private $nombres_cli;
                private $apellido1_cli;
                private $apellido2_cli;
                private $nom_usuario_cli;
                private $correo_cli;
                private $direccion;
                private $celular;
                private $password_cli;
                private $estado;

                public function __construct($nombres_cli,$apellido1_cli,$apellido2_cli,$nom_usuario_cli,$correo_cli,$direccion,$celular,$password_cli, $estado, $id_cliente=null)
                {
                        $this->id_cliente= $id_cliente;
                        $this->nombres_cli= $nombres_cli ;
                        $this->apellido1_cli= $apellido1_cli;
                        $this->apellido2_cli = $apellido2_cli;
                        $this->nom_usuario_cli= $nom_usuario_cli;
                        $this->correo_cli= $correo_cli;
                        $this->direccion= $direccion;
                        $this->celular= $celular;
                        $this->password_cli= password_hash($password_cli, PASSWORD_DEFAULT);
                        $this->estado = $estado;
                }

                public function getId_cliente(){
                        return $this->id_cliente;
                }

                public function getNombres_cli(){
                        return $this->nombres_cli;
                }

                public function setNombres_cli($nombres_cli){
                        $this->nombres_cli = $nombres_cli;
                }

                public function getApellido1_cli(){
                        return $this->apellido1_cli;
                }

                public function setApellido1_cli($apellido1_cli){
                        $this->apellido1_cli = $apellido1_cli;
                }

                public function getApellido2_cli(){
                        return $this->apellido2_cli;
                }

                public function setApellido2_cli($apellido2_cli){
                        $this->apellido2_cli = $apellido2_cli;
                }

                public function getNom_usuario_cli(){
                        return $this->nom_usuario_cli;
                }

                public function setNom_usuario_cli($nom_usuario_cli){
                        $this->nom_usuario_cli = $nom_usuario_cli;
                }

                public function getCorreo_cli(){
                        return $this->correo_cli;
                }

                public function setCorreo_cli($correo_cli){
                        $this->correo_cli = $correo_cli;
                }

                public function getDireccion(){
                        return $this->direccion;
                }

                public function setDireccion($direccion){
                        $this->direccion = $direccion;
                }

                public function getCelular(){
                        return $this->celular;
                }

                public function setCelular($celular){
                        $this->celular = $celular;
                }

                public function getPassword_cli(){
                        return $this->password_cli;
                }

                public function setPassword_cli($password_cli){
                        $this->password_cli = $password_cli;
                }

                public function getEstado(){
                        return $this->estado;
                }

                public function setEstado($estado){
                        $this->estado = $estado;
                }

        }
   

?>
