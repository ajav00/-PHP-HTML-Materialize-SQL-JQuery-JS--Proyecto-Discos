<?php    require_once('templates/header.php');
            session_start();   ?>
<?php    
    require_once("cargarClases.php");
    $lista_alb = AlbumDb::listarObjetos3(new Conexion());    
?>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light brown darken-3">
                <i class="large material-icons">menu</i>
            </a>
            <ul>
            <?php if (isset($_SESSION['Usuario_cli'])) { ?>
                <li><a class="btn btn-floating brown darken-3 tooltipped" href="Salir.php" data-position="left" data-tooltip="Cerrar Sesion"><i class="material-icons">person_remove</i></a></li>
                <li><a class="btn btn-floating brown darken-3 tooltipped" href="Ad_Carrito.php" data-position="left" data-tooltip="Ver Carrito"><i class="material-icons">shopping_cart</i></a></li>
                <li><a class="btn btn-floating brown darken-3 tooltipped" href="Pedidos.php" data-position="left" data-tooltip="Realizar un pedido"><i class="material-icons">assignment</i></a></li>
                <?php }else{ ?>
                    <li><a class="btn btn-floating brown darken-3 tooltipped" href="IniciarSesion.php" data-position="left" data-tooltip="Iniciar Sesión"><i class="material-icons">person_add</i></a></li>
                <?php } ?>
            </ul>
        </div>

        <div class="right subtitulo">
            <h4 class="white-text">Tu espacio para comprar tus discos favoritos</h3>
            <h5 class="white-text right">Tambien hacemos envios gratuitos</p>
        </div>
    </header><!--header--> 
    
    <div class="container section">
            <div class="row  center">
              <div class="text-center">
                <img src="Fondos/Separador/Separador2.png" class="">
                <h2 class=" titular">Bienvenido a Nuestro <br><span class="text-uppercase">Sitio web</span></h2>
                <img src="Fondos/Separador/Separador2.png" class="">
              </div>
        </div>
    </div>
    <div class="container2">
            <div class="row ">
                <div class="col m4 center ">
                  <div class="img-serv">
                    <img src="Fondos/Anuncios/Anuncio4.jpg" class="img-fluid">
                    <div class="row center">
                        <div class="col l1 s1"></div>
                        <div class="col l10 s10 serv-info">
                            <h3 class="center up titular-a">
                                <span > Mira nuestros</span> discos
                            </h3>
                            <a href="Discos.php" class="btn btn-primary up btn-block ">Entrar</a>
                        </div>
                    </div>
                  </div>
                </div>
        
                <div class="col m4 center ">
                  <div class="img-serv">
                    <img src="Fondos/Anuncios/Anuncio2.jpg" class="img-fluid">
                    <div class="row center">
                            <div class="col l1 s1"></div>
                            <div class="col l10 s10 serv-info">
                                <h3 class="center up titular-a">
                                    <span > Crea una</span> Cuenta
                                </h3>
                                <a href="IniciarSesion.php" class="btn btn-primary up btn-block ">Entrar</a>
                            </div>
                    </div>
                  </div>
                </div>
        
                  <div class="col m4 center ">
                    <div class="img-serv">
                        <img src="Fondos/Anuncios/Anuncio5.jpg" class="img-fluid">
                        <div class="row center">
                            <div class="col l1 s1"></div>
                            <div class="col l10 s10 serv-info">
                                <h3 class="center up titular-a">
                                    <span > Ve nuestras</span> sucursales
                                </h3>
                                <a href="Nosotros.php" class="btn btn-primary up btn-block ">Entrar</a>
                            </div>
                        </div>   
                    </div>
                  </div>
              </div>
            </div>
        </div>

    <!--Imagenes y Contenido-->
    <div>
        <div class="img-principal">
            <div class="row imagen-sup">
                <div class="col m6 color1 center">
                    <div class="row">
                        <div class="col s1 m1"></div>
                        <div class="col s9 m9">
                            <div class="contenido-c white-text">
                            <h2 class="up">Más de 20 discos en la plataforma</h2>
                            <p>Encontraras una variedad grande de discos en nuestra plataforma</p>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col m6 fondo1 imagen"></div>
        </div>
            <div class="row imagen-inf ">
                <div class="col m6 fondo2 imagen"></div>
                <div class="col m6 color2 center">
                    <div class="row">
                            <div class="col s2"></div>
                        <div class="col s8 center">
                            <div class="contenido-c white-text">
                            <h2 class="up">Promoción: cheap vynyl</h2>
                            <p>Ofrecemos una promocion por discos cada mes, rebajando el 25% de su precio</p>
                        </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <div class="container section">
            <div class="row  center">
              <div class="text-center">
                <img src="Fondos/Separador/Separador2.png" class="">
                <h2 class=" titular">Oferta Mensual  <br><span class="up">Cheap Vynyl</span></h2>
                <img src="Fondos/Separador/Separador2.png" class="">
              </div>
        </div>
    </div>

    <div class="row section">
    <?php foreach ($lista_alb as $obj) { ?>
        <div class="col s12 m4">
            <div class="card z-depth-5 section hoverable">
                <div class="card-image ">
                    <img src="<?=$obj->getImagen()?>" class="activator">
                    <a class="btn-floating halfway-fab waves-effect waves-light  brown darken-3  btn modal-trigger" href="#modal.<?=$obj->getId_Album()?>"><i class="material-icons">filter_list</i></a>
                </div>
                <div class="card-content">
                    <h1 class="card-title center  "><?=$obj->getNombre_Alb()?></h1>
                    <p>
                        <div class="row">
                            <div class="col l6 s6 center">
                                <strong >Artista: </strong><br><br>
                                <strong >Precio: </strong>
                            </div>
                            <div class="col l6 s6">
                                <?php $lista_art = ArtistaDb::listarObjetoPorId(new Conexion(), $obj->getId_Artista()); ?>
                                <?php foreach ($lista_art as $art) { ?>
                                    <p><?=$art->getNombre_Art()?></p><br>
                                <?php } ?>


                                <?php $lista_inv = InventarioDb::listarObjetoPorId(new Conexion(), $obj->getId_Album()); ?>
                                <?php foreach ($lista_inv as $inv) { ?>
                                    <p><?=$inv->getPrecio_unit()?> Bs.</p><br>
                                

                            </div>
                        </div>
                    </p>
                    <ul class="card-descripcion list-unstyled">
                        <li><img src="Fondos/Iconos/cancion.png" alt="" class="img-icono ml-2 mr-2">
                            <?=$obj->getNum_Canciones()?>
                        </li>
                        <li><img src="Fondos/Iconos/tiempo.png" alt="" class="img-icono ml-2 mr-2">
                            <?=$obj->getDuracion()?>
                        </li>                
                        <li><img src="Fondos/Iconos/portafolio.png" alt="" class="img-icono ml-2 mr-2">
                            <?=$inv->getCantidad_total()?>        
                        </li>
                        <?php } ?>
                    </ul>

                    
                    <?php if (isset($_SESSION['Usuario_cli'])) { ?>
                        <form action="Ac_Carrito.php" method="post" id="agregarCarr<?=$obj->getId_Album()?>">
                            <input type="hidden" name="id" id="id" value="<?=$obj->getId_Album()?>">
                            <input type="hidden" name="nombre" id="nombre" value="<?=$obj->getNombre_Alb()?>">
                            <input type="hidden" name="precio" id="precio" value="<?php $lista_inv = InventarioDb::listarObjetoPorId(new Conexion(), $obj->getId_Album()); ?>
                                    <?php foreach ($lista_inv as $inv) { ?>
                                        <?=$inv->getPrecio_unit()?>
                                    <?php } ?>">
                            <input type="hidden" name="cantidad" id="cantidad" value="1">
                            <input type="hidden" name="cantidadTot" id="cantidadTot" value="<?php $lista_inv = InventarioDb::listarObjetoPorId(new Conexion(), $obj->getId_Album()); ?>
                                    <?php foreach ($lista_inv as $inv) { ?>
                                        <?=$inv->getCantidad_total()?>
                                    <?php } ?>">
                            <button class="btn waves-effect btn-large up center waves-light brown darken-3" type="submit" name="btnAccion" value="Agregar" href="Discos.php">Añadir al carrito
                                <i class="material-icons left">add_shopping_cart</i>
                            </button>
                        </form>    
                    <?php }?>
                </div>
                <div class="card-reveal">
                    <h1 class="card-title grey-text text-darken-4">Lista de Canciones<i class="material-icons right">close</i></h1>
                    <?php $lista_can = CancionDb::listarObjeto(new Conexion(), $obj->getId_Album()); ?>
                    <?php foreach ($lista_can as $can) { ?>
                        <p><?=$can->getId_Num_Track()?>. <?=$can->getNombre()?></p>
                    <?php } ?>
                </div>
                <div id="modal.<?=$obj->getId_Album()?>" class="modal">
                    <div class="modal-content">
                        <h4 class="center">Descripción Del Álbum</h4>
                        <img src="<?=$obj->getImagen()?>" class="img-fluid">
                        <div class="row">
                            <div class="col l6 s6 center">
                                <p><strong>Nombre:</strong></p>
                                <p><strong>Artista:</strong></p>
                                <p><strong>Discografica:</strong></p>
                                <p><strong>Genero:</strong></p>
                                <p><strong>Idioma:</strong></p>
                                <p><strong>Pais:</strong></p>
                                <p><strong>Fecha de Publicacion:</strong></p>
                                <p><strong>Duracion:</strong></p>
                                <p><strong>Numero de Canciones:</strong></p>        
                            </div>
                            <div class="col l6 s6">
                                <p><?=$obj->getNombre_Alb()?></p>
                                

                                <?php $lista_art = ArtistaDb::listarObjetoPorId(new Conexion(), $obj->getId_Artista()); ?>
                                <?php foreach ($lista_art as $art) { ?>
                                    <p><?=$art->getNombre_Art()?></p>
                                <?php } ?>

                                <?php $lista_disc = DiscograficaDb::listarObjetoPorId(new Conexion(), $obj->getId_Discografica()); ?>
                                <?php foreach ($lista_disc as $disc) { ?>
                                    <p><?=$disc->getNombre_Disc()?></p>
                                <?php } ?>

                                <?php $lista_gen = GeneroDb::listarObjetoPorId(new Conexion(), $obj->getId_Genero()); ?>
                                <?php foreach ($lista_gen as $gen) { ?>
                                    <p><?=$gen->getNombre_Gen()?></p>
                                <?php } ?>

                                <?php $lista_idi = IdiomaDb::listarObjetoPorId(new Conexion(), $obj->getId_Idioma()); ?>
                                <?php foreach ($lista_idi as $idi) { ?>
                                    <p><?=$idi->getNombre_Idi()?></p>
                                <?php } ?>

                                <?php $lista_pais = PaisDb::listarObjetoPorId(new Conexion(), $obj->getId_Pais()); ?>
                                <?php foreach ($lista_pais as $pais) { ?>
                                    <p><?=$pais->getNombre_Pais()?></p>
                                <?php } ?>
                                <p><?=$obj->getFecha_Pub()?></p>
                                <p><?=$obj->getDuracion()?></p>
                                <p><?=$obj->getNum_Canciones()?></p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat brown darken-3 white-text">Aceptar</a>
                    </div>
                </div>
            </div>
            
        </div>
        <?php } ?>
    </div>

<?php    require_once('templates/footer.php')   ?>
<?php    require_once('templates/footer2.php')   ?>