<?php
    class Proveedor{
        private $id_proveedor;
        private $celular_prov;
        private $nombre_prov;

        public function __construct($celular_prov,$nombre_prov,$id_proveedor=null )
        {
            $this->id_proveedor= $id_proveedor;
            $this->celular_prov= $celular_prov;
            $this->nombre_prov= $nombre_prov;
        }

        /**
         * Get the value of id_proveedor
         */ 
        public function getId_Proveedor()
        {
                return $this->id_proveedor;
        }

        /**
         * Get the value of celular_prov
         */ 
        public function getCelular_Prov()
        {
                return $this->celular_prov;
        }
         /**
         * Set the value of celular_prov
         *
         * @return  self
         */ 
        public function setCelular_Prov($celular_prov)
        {
                $this->celular_prov = $celular_prov;

                return $this;
        }
        /**
         * Get the value of nombre_prov
         */ 
        public function getNombre_Prov()
        {
                return $this->nombre_prov;
        }
         /**
         * Set the value of nombre_prov
         *
         * @return  self
         */ 
        public function setNombre_Prov($nombre_prov)
        {
                $this->nombre_prov = $nombre_prov;

                return $this;
        }


     
    }
   
