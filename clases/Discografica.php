<?php
    class   Discografica{
        private $id_discografica;
        private $nombre_disc;

        public function __construct($nombre_disc, $id_discografica=null )
        {
            $this->id_discografica= $id_discografica;
            $this->nombre_disc= $nombre_disc;
        }

        /**
         * Get the value of id_discografia
         */ 
        public function getId_Discografica()
        {
                return $this->id_discografica;
        }

        /**
         * Get the value of nombre_dis
         */ 
        public function getNombre_Disc()
        {
                return $this->nombre_disc;
        }
         /**
         * Set the value of nombre_disc
         *
         * @return  self
         */ 
        public function setNombre_Disc($nombre_disc)
        {
                $this->nombre_disc= $nombre_disc;

                return $this;
        }


     
    }
   

?>