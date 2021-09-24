<?php
    class Pais{
        private $id_pais;
        private $nombre_pais;

        public function __construct($nombre_pais, $id_pais=null )
        {
            $this->id_pais= $id_pais;
            $this->nombre_pais= $nombre_pais;
        }

        /**
         * Get the value of id_pais
         */ 
        public function getId_pais()
        {
                return $this->id_pais;
        }

        /**
         * Get the value of nombre_pais
         */ 
        public function getNombre_Pais()
        {
                return $this->nombre_pais;
        }
         /**
         * Set the value of nombre_pais
         *
         * @return  self
         */ 
        public function setNombre_Pais($nombre_pais)
        {
                $this->nombre_pais= $nombre_pais;

                return $this;
        }


     
    }
   

?>