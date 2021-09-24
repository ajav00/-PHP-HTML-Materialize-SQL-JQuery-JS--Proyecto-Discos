<?php
    class Factura{
        private $id_factura;
        private $id_cliente;
        private $fecha_f;
        private $total_f;

        public function __construct($id_cliente,$fecha_f, $total_f, $id_factura =null)
        {
            $this->id_factura= $id_factura;
            $this->id_cliente= $id_cliente;
            $this->fecha_f= $fecha_f;
            $this->total_f= $total_f;
        }

        /**
         * Get the value of id_factura
         */ 
        public function getId_Factura()
        {
                return $this->id_factura;
        }

         /**
         * Get the value of id_cliente
         */ 
        public function getId_Cliente()
        {
                return $this->id_cliente
                ;
        }
         /**
         * Set the value of id_cliente
         *
         * @return  self
         */ 
        public function setId_Cliente($id_cliente)
        {
                $this->id_cliente= $id_cliente;

                return $this;
        }
        
        /**
         * Get the value of fecha_f
         */ 
        public function getFecha_F()
        {
                return $this->fecha_f;
        }
         /**
         * Set the value of fecha_f
         *
         * @return  self
         */ 
        public function setFecha_F($fecha_f)
        {
                $this->fecha_f= $fecha_f;

                return $this;
        }
        /**
         * Get the value of total_f
         */ 
        public function getTotal_F()
        {
                return $this->total_f;
        }
         /**
         * Set the value of total_f
         *
         * @return  self
         */ 
        public function setTotal_F($total_f)
        {
                $this->total_f= $total_f;

                return $this;
        }
        
    }
   

?>