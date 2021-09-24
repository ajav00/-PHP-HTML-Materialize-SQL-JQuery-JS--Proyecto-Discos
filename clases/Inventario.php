<?php
    class Inventario{
        private $id_inventario;
        private $id_album;
        private $cantidad_total;
        private $cantidad_entradas;
        private $cantidad_salidas;
        private $precio_unit;

        public function __construct($id_album, $cantidad_total, $cantidad_entradas, $cantidad_salidas, $precio_unit, $id_inventario=null)
        {
                $this->id_album= $id_album;
                $this->id_inventario= $id_inventario;
                $this->cantidad_total= $cantidad_total;
                $this->cantidad_entradas=$cantidad_entradas;
                $this->cantidad_salidas=$cantidad_salidas;
                $this->precio_unit= $precio_unit; 
        }

		public function getId_inventario(){
		return $this->id_inventario;
		}

		public function setId_inventario($id_inventario){
			$this->id_inventario = $id_inventario;
		}

		public function getId_album(){
			return $this->id_album;
		}

		public function setId_album($id_album){
			$this->id_album = $id_album;
		}

		public function getCantidad_total(){
			return $this->cantidad_total;
		}

		public function setCantidad_total($cantidad_total){
			$this->cantidad_total = $cantidad_total;
		}

		public function getCantidad_entradas(){
			return $this->cantidad_entradas;
		}

		public function setCantidad_entradas($cantidad_entradas){
			$this->cantidad_entradas = $cantidad_entradas;
		}

		public function getCantidad_salidas(){
			return $this->cantidad_salidas;
		}

		public function setCantidad_salidas($cantidad_salidas){
			$this->cantidad_salidas = $cantidad_salidas;
		}

		public function getPrecio_unit(){
			return $this->precio_unit;
		}

		public function setPrecio_unit($precio_unit){
			$this->precio_unit = $precio_unit;
		}
    }
   

?>


