<?php

    class Conexion implements Db{
        const host = "localhost";
        const user = "root";
        const pass = "";
        const name = "waterloosunsetii";

        public function getConexion()
        {
            try{
                $cadena ="mysql:host=".self::host."; dbname=".self::name;
                $conn = new PDO($cadena, self::user, self::pass);
            }catch(Exception $e){
                echo "Error: ".$e->getMessage();
            }
            return $conn;
        }

    }
 

?>