<?php
    class Artista{
        private $id_artista;
        private $nombre_art;

        public function __construct($nombre_art, $id_artista=null )
        {
            $this->id_artista= $id_artista;
            $this->nombre_art= $nombre_art;
        }

        /**
         * Get the value of id_artista
         */ 
        public function getId_Artista()
        {
                return $this->id_artista;
        }

        /**
         * Get the value of nombre_art
         */ 
        public function getNombre_Art()
        {
                return $this->nombre_art;
        }
         /**
         * Set the value of nombre_art
         *
         * @return  self
         */ 
        public function setNombre_Art($nombre_art)
        {
                $this->nombre_art = $nombre_art;

                return $this;
        }


     
    }
   

?>