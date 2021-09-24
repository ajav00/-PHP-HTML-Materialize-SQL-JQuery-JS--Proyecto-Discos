<?php 

    class Cancion{

        private $id_cancion;
        private $nombre_can;
        private $id_artista;
        private $id_album;
        private $num_track;

        public function __construct($nombre_can, $id_artista, $id_album, $num_track, $id_cancion= null)
        {
            $this->id_cancion=$id_cancion;
            $this->nombre_can = $nombre_can;
            $this->id_artista= $id_artista;
            $this->id_album= $id_album;
            $this->num_track= $num_track;

        }
        /**
         * Get the value of id_Cancion
         */ 
        public function getId_Cancion()
        {
                return $this->id_cancion;
        }
        /**
         * Get the value of id_Artista
         */ 
        public function getId_Artista()
        {
                return $this->id_artista;
        }
         /**
         * Set the value of Id_Artista
         *
         * @return  self
         */ 
        public function setId_Artista($id_artista)
        {
                $this->id_artista = $id_artista;

                return $this;
        }
        /**
         * Get the value of id_Album
         */ 
        public function getId_Album()
        {
                return $this->id_album;
        }
       
         /**
         * Set the value of id_album
         *
         * @return  self
         */ 
        public function setId_Album($id_album)
        {
                $this->id_album= $id_album;

                return $this;
        }
         /**
         * Get the value of num_track
         */ 
        public function getId_Num_Track()
        {
                return $this->num_track;
        }
         /**
         * Set the value of num_track
         *
         * @return  self
         */ 
        public function setNum_Track($num_track)
        {
                $this->num_track = $num_track;

                return $this;
        }
        

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre_can;
        }

         /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre_can)
        {
                $this->nombre_can = $nombre_can;

                return $this;
        }
    }


?>


