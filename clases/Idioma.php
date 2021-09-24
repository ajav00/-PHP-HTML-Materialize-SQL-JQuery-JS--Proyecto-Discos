<?php
    class Idioma{
        private $id_idioma;
        private $nombre_idi;

        public function __construct($nombre_idi, $id_idioma=null )
        {
            $this->id_idioma= $id_idioma;
            $this->nombre_idi= $nombre_idi;
        }

        /**
         * Get the value of id_idioma
         */ 
        public function getId_Idioma()
        {
                return $this->id_idioma;
        }

        /**
         * Get the value of nombre_idi
         */ 
        public function getNombre_Idi()
        {
                return $this->nombre_idi;
        }
         /**
         * Set the value of nombre_idi
         *
         * @return  self
         */ 
        public function setNombre_Idi($nombre_idi)
        {
                $this->nombre_idi= $nombre_idi;

                return $this;
        }


     
    }
   

?>