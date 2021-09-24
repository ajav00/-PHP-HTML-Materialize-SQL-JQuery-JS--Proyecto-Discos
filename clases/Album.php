<?php
    class Album{
        private $id_album;
        private $nombre_alb;
        private $id_artista;
        private $id_genero;
        private $id_discografica;
        private $id_idioma;
        private $id_pais;
        private $fecha_pub;
        private $duracion;
        private $num_canciones;
        private $imagen;
        private $estado;

        public function __construct($nombre_alb,$id_artista,$id_genero,$id_discografica,$id_idioma,$id_pais,$fecha_pub,$duracion,$num_canciones,$imagen,$estado,$id_album=null)
        {
            $this->id_album= $id_album;
            $this->nombre_alb= $nombre_alb;
            $this->id_artista=$id_artista;
            $this->id_genero=$id_genero;
            $this->id_discografica= $id_discografica;
            $this->id_idioma= $id_idioma;
            $this->id_pais= $id_pais;
            $this->fecha_pub = $fecha_pub;
            $this->duracion = $duracion;
            $this->num_canciones= $num_canciones;
            $this->imagen = $imagen;
            $this->estado = $estado ; 
        }

        /**
         * Get the value of id_album
         */ 
        public function getId_Album()
        {
                return $this->id_album;
        }

        /**
         * Get the value of nombre_alb
         */ 
        public function getNombre_Alb()
        {
                return $this->nombre_alb;
        }
         /**
         * Set the value of nombre_alb
         *
         * @return  self
         */ 
        public function setNombre_Alb($nombre_alb)
        {
                $this->nombre_alb= $nombre_alb;

                return $this;
        }
         /**
         * Get the value of id_artista
         */ 
        public function getId_Artista()
        {
                return $this->id_artista
                ;
        }
         /**
         * Set the value of id_artista
         *
         * @return  self
         */ 
        public function setId_Artista($id_artista)
        {
                $this->id_artista= $id_artista;

                return $this;
        }
         /**
         * Get the value of id_genero
         */ 
        public function getId_Genero()
        {
                return $this->id_genero;
        }
         /**
         * Set the value of id_genero
         *
         * @return  self
         */ 
        public function setId_genero($id_genero)
        {
                $this->id_genero= $id_genero;

                return $this;
        }
        /**
         * Get the value of id_discografia
         */ 
        public function getId_Discografica()
        {
                return $this->id_discografica;
        }
         /**
         * Set the value of id_discografia
         *
         * @return  self
         */ 
        public function setId_Discografica($id_discografica)
        {
                $this->id_discografica= $id_discografica;

                return $this;
        }
        /**
         * Get the value of id_idioma
         */ 
        public function getId_Idioma()
        {
                return $this->id_idioma;
        }
         /**
         * Set the value of id_idioma
         *
         * @return  self
         */ 
        public function setId_Idioma($id_idioma)
        {
                $this->id_idioma= $id_idioma;

                return $this;
        }
        /**
         * Get the value of id_pais
         */ 
        public function getId_Pais()
        {
                return $this->id_pais;
        }
         /**
         * Set the value of id_pais
         *
         * @return  self
         */ 
        public function seId_Pais($id_pais)
        {
                $this->id_pais= $id_pais;

                return $this;
        }
        /**
         * Get the value of fecha_pub
         */ 
        public function getFecha_Pub()
        {
                return $this->fecha_pub;
        }
         /**
         * Set the value of fecha_pub
         *
         * @return  self
         */ 
        public function setFecha_Pub($fecha_pub)
        {
                $this->fecha_pub= $fecha_pub;

                return $this;
        }
        /**
         * Get the value of duracion
         */ 
        public function getDuracion()
        {
                return $this->duracion;
        }
         /**
         * Set the value of duracion
         *
         * @return  self
         */ 
        public function setDuracion($duracion)
        {
                $this->duracion= $duracion;

                return $this;
        }
        /**
         * Get the value of num_canciones
         */ 
        public function getNum_Canciones()
        {
                return $this->num_canciones;
        }
         /**
         * Set the value of num_canciones
         *
         * @return  self
         */ 
        public function setNum_Canciones($num_canciones)
        {
                $this->num_canciones= $num_canciones;

                return $this;
        }
        /**
         * Get the value of imagen
         */ 
        public function getImagen()
        {
                return $this->imagen;
        }
         /**
         * Set the value of imagen
         *
         * @return  self
         */ 
        public function setImagen($imagen)
        {
                $this->imagen= $imagen;

                return $this;
        }
        public function getEstado(){
                return $this->estado;
        }
        
        public function setEstado($estado){
                $this->estado = $estado;
        }


    }
   

?>