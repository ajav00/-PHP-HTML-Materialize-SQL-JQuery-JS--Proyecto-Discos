<?php    require_once('templates/header.php');
        session_start();   ?>


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
            <h4 class="white-text">Realiza Pedidos</h3>
            <h5 class="white-text right">Create una cuenta y pidenos tu vinilo favorito</p>
        </div>
    </header><!--header--> 
    
    <h2 class="center container2 up">Realiza un pedido</h2>
            <p class="center">Nota: Debes registrate antes de realizar un pedido</p>
    <div class="section container z-depth-5">
        <div class="row card-panel container2">
            <div class="col s12">
                <form action="Realizar_Ped.php" id="frm_ped">
                    <div class="input-field">
                        <label for="album_ped">Album:</label>
                        <input type="text" name="album_ped" class="validate" id="album_ped" required>
                    </div>
                    <div class="input-field">
                        <label for="artista_ped">Artista:</label>
                        <input type="text" name="artista_ped" class="validate" id="artista_ped" required>
                    </div>
                    <div class="input-field">
                        <label for="genero_ped">Genero:</label>
                        <input type="text" name="genero_ped" class="validate" id="genero_ped" required>
                    </div>
                        <button class="btn waves-effect  up center waves-light brown darken-3" type="submit" name="Accion" value="Añadir">Enviar Sugerencia
                            <i class="material-icons left">send</i>
                        </button>
                </form>
            </div>
        </div>
    </div>

<?php    require_once('templates/footer.php')   ?>
<script src="js/funciones/realizar.js"></script>
<?php    require_once('templates/footer2.php')   ?>