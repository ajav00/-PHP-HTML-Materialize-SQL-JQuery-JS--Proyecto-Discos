
<?php
    class Administrador{
        private $id_administrador;
        private $descripcion_admi;
        private $nombres_admin;
        private $apellido1_admi;
        private $apellido2_admi;
        private $email_admi;
        private $usuario_admi;
        private $password_admi;

        public function __construct($descripcion_admi, $nombres_admin, $apellido1_admi, $apellido2_admi, $email_admi, $usuario_admi, $password_admi, $id_administrador=null){
			$this->id_administrador = $id_administrador;
			$this->descripcion_admi = $descripcion_admi;
			$this->nombres_admin = $nombres_admin;
			$this->apellido1_admi = $apellido1_admi;
			$this->apellido2_admi = $apellido2_admi;
			$this->email_admi = $email_admi;
			$this->usuario_admi = $usuario_admi;
			$this->password_admi = password_hash($password_admi, PASSWORD_DEFAULT);
        }
		
	public function getId_administrador(){
		return $this->id_administrador;
	}

	public function setId_administrador($id_administrador){
		$this->id_administrador = $id_administrador;
	}

	public function getDescripcion_Admi(){
		return $this->descripcion_admi;
	}

	public function setDescripcion_Admi($descripcion_admi){
		$this->descripcion_admi = $descripcion_admi;
	}

	public function getNombres_Admin(){
		return $this->nombres_admin;
	}
	public function getNombres_Admin2(){
		return $this->nombres_admi;
	}
	public function setNombres_Admin($nombres_admin){
		$this->nombres_admin = $nombres_admin;
	}

	public function getApellido1_Admi(){
		return $this->apellido1_admi;
	}

	public function setApellido1_Admi($apellido1_admi){
		$this->apellido1_admi = $apellido1_admi;
	}

	public function getApellido2_Admi(){
		return $this->apellido2_admi;
	}

	public function setApellido2_Admi($apellido2_admi){
		$this->apellido2_admi = $apellido2_admi;
	}

	public function getEmail_Admi(){
		return $this->email_admi;
	}

	public function setEmail_Admi($email_admi){
		$this->email_admi = $email_admi;
	}

	public function getUsuario_Admi(){
		return $this->usuario_admi;
	}

	public function setUsuario_Admi($usuario_admi){
		$this->usuario_admi = $usuario_admi;
	}

	public function getPassword_Admi(){
		return $this->password_admi;
	}

	public function setPassword_Admi($password_admi){
		$this->password_admi = $password_admi;
	}
    }
   

?>



