<?php
    class Entrada{
        private $id_entrada;
        private $cantidad_e;
        private $costo_e;
        private $fecha_e;
        private $id_administrador;
        private $id_inventario;
        private $id_proveedor;

        public function __construct($cantidad_e,$costo_e,$fecha_e,$id_administrador,$id_inventario,$id_proveedor, $id_entrada=null)
        {
            $this->id_entrada= $id_entrada;
            $this->cantidad_e= $cantidad_e ;
            $this->costo_e= $costo_e;
            $this->fecha_e = $fecha_e;
            $this->id_administrador= $id_administrador;
            $this->id_inventario= $id_inventario;
            $this->id_proveedor= $id_proveedor;
           
        }
        /**
         * Get the value of id_entrada
         */ 
        public function getId_Entrada()
        {
                return $this->id_entrada;
        }

        /**
         * Get the value of cantidad_e
         */ 
        public function getCantidad_E()
        {
                return $this->cantidad_e;
        }
         /**
         * Set the value of cantidad_e
         *
         * @return  self
         */ 
        public function setCantidad_E($cantidad_e)
        {
                $this->ncantidad_e= $cantidad_e;

                return $this;
        }
         /**
         * Get the value of costo_e
         */ 
        public function getCosto_E()
        {
                return $this->costo_e
                ;
        }
         /**
         * Set the value of costo_e
         *
         * @return  self
         */ 
        public function setCosto_E($costo_e)
        {
                $this->costo_e= $costo_e;

                return $this;
        }
         /**
         * Get the value of fecha_e
         */ 
        public function getFecha_E()
        {
                return $this->fecha_e;
        }
         /**
         * Set the value of fecha_e
         *
         * @return  self
         */ 
        public function setFecha_E($fecha_e)
        {
                $this->fecha_e= $fecha_e;

                return $this;
        }
         /**
         * Get the value of id_adminsitrador
         */ 
        public function getId_Administrador()
        {
                return $this->id_administrador;
        }
         /**
         * Set the value of id_adminsitrador
         *
         * @return  self
         */ 
        public function setId_Adminsitrador($id_adminsitrador)
        {
                $this->id_adminsitrador= $id_adminsitrador;

                return $this;
        }
         /**
         * Get the value of id_inventario
         */ 
        public function getId_Inventario()
        {
                return $this->id_inventario;
        }
         /**
         * Set the value of id_inventario
         *
         * @return  self
         */ 
        public function setId_Inventario($id_inventario)
        {
                $this->id_inventario= $id_inventario;

                return $this;
        }
         /**
         * Get the value of id_proveedor
         */ 
        public function getId_Proveedor()
        {
                return $this->id_proveedor;
        }
         /**
         * Set the value of id_proveedor
         *
         * @return  self
         */ 
        public function setId_Proveedor($id_proveedor)
        {
                $this->id_proveedor= $id_proveedor;

                return $this;
        }
       
    }
   

?>