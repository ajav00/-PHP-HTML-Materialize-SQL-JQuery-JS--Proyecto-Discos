<?php 
    //require_once "../autoload.php";
    //require_once "Db.php";
    //require_once "Album.php";
    class AlbumDb
    {
        private $db;
        public function __construct(Db $db)
        {
            $this->db= $db;
        }
        public function añadir(Album $album)
        {
            $con = $this->db->getconexion();
            $sql = 'INSERT INTO album(nombre_alb, id_artista, id_genero, id_discografica, id_idioma, id_pais, fecha_pub, duracion, num_canciones, estado, imagen) values(:nombre_alb, :id_artista, :id_genero, :id_discografica, :id_idioma, :id_pais, :fecha_pub, :duracion, :num_canciones, :estado, :imagen)';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':nombre_alb',$album->getNombre_Alb());
            $sentencia->bindValue(':id_artista',$album->getId_Artista());
            $sentencia->bindValue(':id_genero',$album->getId_Genero());
            $sentencia->bindValue(':id_discografica',$album->getId_Discografica());
            $sentencia->bindValue(':id_idioma',$album->getId_Idioma());
            $sentencia->bindValue(':id_pais',$album->getId_Pais());
            $sentencia->bindValue(':fecha_pub',$album->getFecha_Pub());
            $sentencia->bindValue(':duracion',$album->getDuracion());
            $sentencia->bindValue(':num_canciones',$album->getNum_Canciones());
            $sentencia->bindValue(':estado',$album->getEstado());
            $sentencia->bindValue(':imagen',$album->getImagen());
            return $sentencia->execute();
        }
        public function imprimirLista()
        {
            $con = $this->db->getconexion();
            $sql = "SELECT 
                        album.id_album AS 'Id',
                        album.nombre_alb AS 'Titulo',
                        album.id_artista AS 'Id Artista',
                        album.id_discografica AS 'Id Discografica',
                        album.id_genero AS 'Id Genero',
                        album.id_idioma AS 'Id Idioma',
                        album.id_pais AS 'Id Pais',
                        album.estado AS 'Estado',
                        artista.nombre_art AS 'Artista',
                        discografica.nombre_disc AS 'Discografica',
                        genero.nombre_gen AS 'Genero',
                        idioma.nombre_idi AS 'Idioma',
                        pais.nombre_pais AS 'Pais',
                        album.fecha_pub AS 'Fecha',
                        album.duracion AS 'Duracion',
                        album.num_canciones AS 'Canciones',
                        album.imagen AS 'Imagen'
                    FROM
                        album JOIN artista JOIN discografica JOIN genero JOIN idioma JOIN pais
                    ON
                        album.id_artista = artista.id_artista
                    AND
                        album.id_discografica = discografica.id_discografica
                    AND
                        album.id_genero = genero.id_genero
                    AND
                        album.id_idioma = idioma.id_idioma
                    AND
                        album.id_pais = pais.id_pais;";
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }
        public function modificar(Album $a)
        {
            $con = $this->db->getconexion();
            $sql = 'UPDATE album SET nombre_alb= :nombre_alb, id_artista= :id_artista, id_genero= :id_genero, id_discografica= :id_discografica, id_idioma= :id_idioma, id_pais= :id_pais, fecha_pub= :fecha_pub, duracion= :duracion, num_canciones= :num_canciones, imagen= :imagen, estado= :estado WHERE id_album= :id_album';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':nombre_alb',$a->getNombre_Alb());
            $sentencia->bindValue(':id_artista',$a->getId_Artista());
            $sentencia->bindValue(':id_genero',$a->getId_Genero());
            $sentencia->bindValue(':id_discografica',$a->getId_Discografica());
            $sentencia->bindValue(':id_idioma',$a->getId_Idioma());
            $sentencia->bindValue(':id_pais',$a->getId_Pais());
            $sentencia->bindValue(':fecha_pub',$a->getFecha_Pub());
            $sentencia->bindValue(':duracion',$a->getDuracion());
            $sentencia->bindValue(':num_canciones',$a->getNum_Canciones());
            $sentencia->bindValue(':imagen',$a->getImagen());
            $sentencia->bindValue(':estado',$a->getEstado());
            $sentencia->bindValue(':id_album',$a->getId_Album());
            return $sentencia->execute();
        }
        public function eliminar(Album $a)
        {
            $con = $this->db->getconexion();
            $sql = 'DELETE FROM album WHERE id_album= :id_album';
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_album',$a->getId_Album());
            return $sentencia->execute();
        }
        static public function listarObjetos(Db $db)
        {
            $con = $db->getConexion();
            $sql = 'SELECT * FROM album';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Album',array(null, null, null, null, null, null, null, null, null, null, null, null));
            return $sentencia->fetchAll();
        }
        static public function listarObjetos2(Db $db)
        {
            $con = $db->getConexion();
            $sql = 'SELECT album.id_album, nombre_alb, id_artista, id_genero, id_discografica, id_idioma, id_pais, fecha_pub, duracion, num_canciones, estado, imagen FROM album JOIN inventario ON inventario.id_album = album.id_album WHERE inventario.cantidad_total>0 AND album.estado = 1;';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Album',array(null, null, null, null, null, null, null, null, null, null, null, null));
            return $sentencia->fetchAll();
        }
        static public function listarObjetos3(Db $db)
        {
            $con = $db->getConexion();
            $sql = 'SELECT album.id_album, nombre_alb, id_artista, id_genero, id_discografica, id_idioma, id_pais, fecha_pub, duracion, num_canciones, estado, imagen FROM album JOIN inventario ON inventario.id_album = album.id_album WHERE inventario.cantidad_total>0 AND album.estado = 1 ORDER BY inventario.precio_unit ASC LIMIT 3;';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Album',array(null, null, null, null, null, null, null, null, null, null, null, null));
            return $sentencia->fetchAll();
        }
        static public function UltimoId(Db $db)
        {
            $con = $db->getConexion();
            $sql = 'SELECT id_album, nombre_alb, id_artista, id_genero, id_discografica, id_idioma, id_pais, fecha_pub, duracion, num_canciones, estado, imagen 
            FROM album 
            ORDER BY id_album DESC LIMIT 1;';
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Album',array(null, null, null, null, null, null, null, null, null, null, null, null));
            return $sentencia->fetchAll();
        }

        static public function listarOb(Db $db, $limite)
        {
            $con = $db->getConexion();
            $sql = "SELECT 
                        album.id_album AS 'Id',
                        album.nombre_alb AS 'Titulo',
                        artista.nombre_art AS 'Artista',
                        genero.nombre_gen AS 'Genero',
                        pais.nombre_pais AS 'Pais',
                        album.fecha_pub AS 'Fecha',
                        album.duracion AS 'Duracion',
                        album.num_canciones AS 'Canciones',
                        album.imagen AS 'Imagen'
                    FROM
                        album JOIN artista  JOIN genero JOIN pais
                    ON
                        album.id_artista = artista.id_artista
                    AND
                        album.id_genero = genero.id_genero
                    AND
                        album.id_pais = pais.id_pais
                    WHERE
                        album.estado = 1
                    LIMIT $limite;";
            $sentencia = $con->prepare($sql);            
            $sentencia->execute();
            return $sentencia->fetchAll();
        }

        public function modificarStatus(Album $p)
        {
            $con = $this->db->getconexion();
            if ($p->getEstado()==1) {
                $sql = 'UPDATE album SET estado = 0 WHERE id_album = :id_album';
            } else {
                $sql = 'UPDATE album SET estado = 1 WHERE id_album = :id_album';
            }
            $sentencia = $con->prepare($sql);
            $sentencia->bindValue(':id_album', $p->getId_Album());
            return $sentencia->execute();
        }

        
    }

?>