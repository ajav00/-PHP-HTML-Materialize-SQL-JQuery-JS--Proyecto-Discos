<?php    require_once('templates/header.php');  
        session_start(); ?>
        <div class="right subtitulo">
            <h4 class="white-text">Nosotros</h3>
            <h5 class="white-text right">Conoce un poco de nosotros y nuestra historia</p>
        </div>
    </header><!--header--> 

    
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

    <!--Contenido-->
    <div class="container2 ">
        <div class="row">
            <section class=" col l8 contenido-principal container sobre-nosotros">
                <h2 class="center ">LO QUE NOS HACE DIFERENTES</h2>
                <div class="row">
                    <div class="col s4 center">
                        <img src="Fondos/Iconos/c1.png" class="img-fluid img-sn">
                        <h3 class="up">Envios</h3>
                        <p class="left-align">Tus pedidos entregados a gran velocidad <br>
                        Recibe en casa o puedes elegir recogerlo en las oficinas de courier en tu ciudad. <br>
                        </p>
                    </div>
                    <div class="col s4 center">
                        <img src="Fondos/Iconos/c3.png" class="img-fluid img-sn">
                        <h3 class="up">Económico</h3>
                        <p class="left-align">Gratuitos a nivel nacional en la mayoria de nuestros productos. <br>  Garantia de que sus compras llegaran en buen estado. <br>
                            100% de garantia de devolucion si no recibes tu compra. <br>
                        Nuestra tienda online cuenta con los mas altos standares de seguridad para pagos en linea.</p>
                    </div>
                    <div class="col s4 text-center">
                        <img src="Fondos/Iconos/c2.png" class="img-fluid img-sn">
                        <h3 class="up">Universalidad</h3>
                        <p class="left-align">En WaterlooSunset todo el mundo tiene un sitio y todos los clientes son válidos. Nuestra tienda desde el minuto uno ha apostado por dar cabida a oyentes de todas las edades y sexos, incluidos niños, nuestros futuros clientes.Tratamos de que cualquier cliente se sienta cómodo y quiera volver (como si fueramos su segunda casa).?</p>
                    </div>
                </div>
            </section>
            <div class="test col l4 center center-align brown darken-3">
                <div class="white-text section">
                    <h2 class="center up ">
                    Historia
                    </h2>
                    <p class=""> Desde el 2015 hasta la actualidad nos dedicamos unicamente a la comercializacion, contamos con mas de 6000 articulos en los diversos formatos y generes musicales. WaterlooSunset es considera una de las mejores tiendas en su genero por la prensa, diversas publicaciones y recomendaciones. Tenemos personal especializado en los diversos generos musicales.  </p>
                </div>
            </div>
        </div>
    </div>

    <div class="mision">
        <div class="row center ">
            <div class="col l6 fondo4 center">
                <div class="mis1 ">
                    <h3 class="up white-text">MISIÓN</h3>
                    <p class="white-text">
                        Nuestra misión es proporcionar los mejores discos con la más alta calidad de sonido y precios accesibles, para satisfacer a nuestra distinguida clientela.
                </div>
            </div>
            <div class="col l6 fondo5 center">
                <div class="mis2 ">
                    <h3 class="up white-text ">VISIÓN</h3>
                    <p class="white-text valign-wrapper">
                        Ser una empresa lider en la venta de discos de música, y ser el mayor distribuidor en el mercado
                    </p>
                </div>                        
            </div>
        </div>
    </div>

    <div class="container2">
            <div class="row">
                <section class=" col l8 contenido-principal container sobre-nosotros">
                    <h2 class="center up titulo">
                        <span class="">Conoce nuestras </span> Instalaciones
                    </h2>
                    <div class="imagenes">
                        <div class="row">
                            <div class="col l4 s6">
                                <a href="#imagen_1" class="waves-effect waves-light  modal-trigger hoverable">
                                    <img src="Fondos/Tienda/tienda1.jpg" class="mini-img img-fluid">
                                </a>
                                <a href="#imagen_4" class="waves-effect waves-light modal-trigger hoverable">
                                    <img src="Fondos/Tienda/tienda4.jpg" class="mini-img img-fluid">
                                </a>
                            </div>
                            <div class="col l4 s6">    
                                <a href="#imagen_2" class="waves-effect waves-light modal-trigger hoverable">
                                    <img src="Fondos/Tienda/tienda2.jpg" class="mini-img img-fluid">
                                </a>        
                            </div>
                            <div class="col l4 s6">    
                                <a href="#imagen_3" class="waves-effect waves-light modal-trigger hoverable">
                                    <img src="Fondos/Tienda/tienda3.jpg" class="mini-img img-fluid">
                                </a>
                            </div>
                        </div>
                        
                        

                        <div id="imagen_1" class="modal">
                            <div class="modal-content">
                                <img src="Fondos/Tienda/tienda1.jpg" class="img-fluid img-grande">
                            </div>     
                        </div>
                        <div id="imagen_2" class="modal">
                            <div class="modal-content">
                                <img src="Fondos/Tienda/tienda2.jpg" class="img-fluid img-grande">
                            </div>     
                        </div>
                        <div id="imagen_3" class="modal">
                            <div class="modal-content">
                                <img src="Fondos/Tienda/tienda3.jpg" class="img-fluid img-grande">
                            </div>     
                        </div>
                        <div id="imagen_4" class="modal">
                            <div class="modal-content">
                                <img src="Fondos/Tienda/tienda4.jpg" class="img-fluid img-grande">
                            </div>     
                        </div>
                    </div>
                </section>
                <div class="test col l4 center center-align brown darken-3">
                        <div class="white-text section ">
                            <h2 class="center up">
                                Testimonios
                            </h2>
                            <em class="container"><strong>Carlos Hernandez: </strong> "Buen precio, rapidez en la entrega y tengo la posibilidad de devolver el producto si no me gusta." <br>
                            <strong>Paulina Ramos:</strong> "Me parecio excelente, el seguimiento, la calidad de la compra¡ME SIENTO MUY CONFORME CON MI COMPRA!" <br>
                            <strong>Raquel Loza:</strong>"Siempre he encontrado variedad de discos a buen precio. Nunca he tenido probelma en los pedidos." 
                            </em>
                        </div>
                </div>
            </div>
        </div>

<?php    require_once('templates/footer.php')   ?>
<?php    require_once('templates/footer2.php')   ?>