<?php
    class Salida{
        private $id_salida;
        private $cantidad_s;
        private $id_factura;
        private $id_inventario;

        public function __construct($cantidad_s, $id_factura, $id_inventario, $id_salida=null )
        {
            $this->id_salida= $id_salida;
            $this->cantidad_s= $cantidad_s;
            $this->id_factura=  $id_factura;
            $this->id_inventario= $id_inventario;
        }

        /**
         * Get the value of id_salida
         */ 
        public function getId_Salida()
        {
                return $this->id_salida;
        }

        /**
         * Get the value of cantidad_s
         */ 
        public function getCantidad_S()
        {
                return $this->cantidad_s;
        }
         /**
         * Set the value of cantidad_s
         *
         * @return  self
         */ 
        public function setCantidad_S($cantidad_s)
        {
                $this->cantidaad_s= $cantidad_s;

                return $this;
        }
        
         /**
         * Get the value of id_factura
         */ 
        public function getId_Factura()
        {
                return $this->id_factura;
        }
         /**
         * Set the value of id_factura
         *
         * @return  self
         */ 
        public function seId_Factura($id_factura)
        {
                $this->id_factura= $id_factura;

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
        public function seId_Inventario($id_inventario)
        {
                $this->id_inventario= $id_inventario;

                return $this;
        }
    }
   

?>