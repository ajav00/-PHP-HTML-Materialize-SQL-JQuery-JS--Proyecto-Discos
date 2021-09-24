<?php    require_once('templates/header.php')   ?>
<?php    
    session_start();
    require_once("cargarClases.php");
    $lista_alb = AlbumDb::listarObjetos2(new Conexion());  
    
    //$lista_disc = DiscograficaDb::listarObjetos(new Conexion());
    //$lista_pais = PaisDb::listarObjetos(new Conexion());
    //$lista_idioma = IdiomaDb::listarObjetos(new Conexion());
    //$lista_gen = GeneroDb::listarObjetos(new Conexion());
    //$lista_can = CancionDb::listarObjetos(new Conexion());
    //$lista_inv = InventarioDb::listarObjetos(new Conexion());  
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
            <h4 class="white-text">Discos en Venta</h3>
            <h5 class="white-text right">Te ofrecemos una variedad de Discos</p>
        </div>
    </header><!--header--> 
    
    
    <div class="row section tarjetas">
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



