<?php
    class Pedidos{
        private $id_pedido;
        private $id_cliente;
        private $nombre_ped;
        private $artista_ped;
        private $genero_ped;
        
        public function __construct($id_cliente,$nombre_ped,$artista_ped,$genero_ped,$id_pedido=null)
        {
            $this->id_pedido= $id_pedido;
            $this->id_cliente= $id_cliente;
            $this->nombre_ped=$nombre_ped;
            $this->artista_ped=$artista_ped;
            $this->genero_ped= $genero_ped;
           
        }

        /**
         * Get the value of id_pedido
         */ 
        public function getId_Pedido()
        {
                return $this->id_pedido;
        }

        /**
         * Get the value of id_cliente
         */ 
        public function getId_Cliente()
        {
                return $this->id_cliente;
        }
         /**
         * Set the value of id_cliente
         *
         * @return  self
         */ 
        public function setNombre_Alb($id_cliente)
        {
                $this->id_cliente= $id_cliente;

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
         * Get the value of nombre_ped
         */ 
        public function getNombre_Ped()
        {
                return $this->nombre_ped;
        }
         /**
         * Set the value of nombre_pedido
         *
         * @return  self
         */ 
        public function setNombre_Pedido($nombre_ped)
        {
                $this->nombre_ped= $nombre_ped;

                return $this;
        }
        /**
         * Get the value of artista_pedido
         */ 
        public function getArtista_Ped()
        {
                return $this->artista_ped;
        }
         /**
         * Set the value of artita_ped
         *
         * @return  self
         */ 
        public function setArtista_Ped($artista_ped)
        {
                $this->artista_ped= $artista_ped;

                return $this;
        }
        /**
         * Get the value of genero_ped
         */ 
        public function getGenero_Ped()
        {
                return $this->genero_ped;
        }
         /**
         * Set the value of genero_ped
         *
         * @return  self
         */ 
        public function setGenero_Ped($genero_ped)
        {
                $this->genero_ped=$genero_ped;

                return $this;
        }
        
    }
   

?>