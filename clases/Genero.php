<?php
    class Genero{
        private $id_genero;
        private $nombre_gen;

        public function __construct($nombre_gen, $id_genero=null )
        {
            $this->id_genero= $id_genero;
            $this->nombre_gen= $nombre_gen;
        }

        /**
         * Get the value of id_genero
         */ 
        public function getId_Genero()
        {
                return $this->id_genero;
        }

        /**
         * Get the value of nombre_gen
         */ 
        public function getNombre_Gen()
        {
                return $this->nombre_gen;
        }
         /**
         * Set the value of nombre_gen
         *
         * @return  self
         */ 
        public function setNombre_Gen($nombre_gen)
        {
                $this->nombre_gen= $nombre_gen;

                return $this;
        }


     
    }
   

?>