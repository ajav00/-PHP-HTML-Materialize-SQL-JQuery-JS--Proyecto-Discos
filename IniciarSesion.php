<?php    require_once('templates/header.php');
            include_once("Seguridad2.php");   ?>


        <div class="right subtitulo">
            <h4 class="white-text">Tu espacio para comprar tus discos favoritos</h3>
            <h5 class="white-text right">Tambien hacemos envios gratuitos</p>
        </div>
    </header><!--header--> 


    <div class="container2">
        <ul class="collapsible">
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">admin_panel_settings</i>
                    Administrador
                </div>
                <div class="collapsible-body">
                    <h2 class="center container2 up">Inicia sesión como admi</h2>
                    <div class="section container z-depth-5">
                        <div class="row card-panel">
                            <div class="col s12">
                                <form action="ValidarAdmi.php" method="post">
                                    <div class="input-field">
                                        <label for="usuario_admi">Usuario:</label>
                                        <input type="text" name="usuario_admi" class="validate" id="usuario_admi" required>
                                    </div>
                                    <div class="input-field">
                                        <label for="password_admi">Contraseña:</label>
                                        <input type="password" name="password_admi" class="validate" id="password_admi" required>
                                    </div>
                                    <div class="row">
                                        <button class="btn waves-effect waves-light brown darken-3" type="submit" name="action">Iniciar Sesion
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">people</i>
                    Usuario
                </div>
                <div class="collapsible-body">
                    <h2 class="center container2 up">Inicia sesión como usuario</h2>
                    <div class="section container z-depth-5">
                        <div class="row card-panel">
                            <div class="col s12">
                                <form action="ValidarUsr.php" id="iniciarUsuario" method="post">
                                    <div class="input-field">
                                        <label for="usuario_usr">Usuario:</label>
                                        <input type="text" name="usuario_usr" class="validate" id="usuario_usr" required>
                                    </div>
                                    <div class="input-field">
                                        <label for="password_usr">Contraseña:</label>
                                        <input type="password" name="password_usr" class="validate" id="password_usr" required>
                                    </div>
                                    <div class="row">
                                        <button class="btn waves-effect waves-light brown darken-3" type="submit" name="action">Iniciar Sesion
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">person_add</i>
                    Regsitrarse
                </div>
                <div class="collapsible-body">
                    <h2 class="center container2 up">Registrate</h2>
                    <div class="section container z-depth-5">
                        <div class="row card-panel">
                            <div class="col s12">
                                <form action="Ac_Cliente.php" id="frm_registro" method="post">
                                    <div class="input-field">
                                        <label for="nombre_cli">Nombre:</label>
                                        <input type="text" name="nombre_cli" class="validate" id="nombre_cli" required>
                                    </div>
                                    <div class="input-field row">
                                        <div class="col s6">
                                            <label for="apellido_pat_cli">Apellido Paterno:</label>
                                            <input type="text" name="apellido_pat_cli" class="validate" id="apellido_pat_cli" required>
                                        </div>
                                        <div class="col s6">
                                            <label for="apellido_mat_cli">Apellido Materno:</label>
                                            <input type="text" name="apellido_mat_cli" class="validate" id="apellido_mat_cli">
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <label for="direccion_cli">Direccion:</label>
                                        <input type="text" name="direccion_cli" class="validate" id="direccion_cli" required>
                                    </div>
                                    <div class="input-field">
                                        <label for="email_cli">Email:</label>
                                        <input type="email" name="email_cli" class="validate" id="email_cli" required>
                                    </div>
                                    <div class="input-field">
                                        <label for="celular_cli">Celular:</label>
                                        <input type="text" name="celular_cli" class="validate" id="celular_cli" required>
                                    </div>
                                    <div class="input-field row">
                                        <div class="col s6">
                                            <label for="usuario_cli">Usuario:</label>
                                            <input type="text" name="usuario_cli" class="validate" id="usuario_cli" required>
                                            <div id="respuesta"></div>
                                        </div>
                                        <div class="col s2">
                                        </div>
                                        <div class="col s4">
                                            <a class="waves-effect waves-light btn-large up center lime darken-2" id="Verificar">Verificar<i class="material-icons left">done_all</i></a>
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <label for="contraseña_cli">Contraseña:</label>
                                        <input type="password" name="contraseña_cli" class="validate" id="contraseña_cli" required>
                                    </div>
                                    <div class="input-field">
                                        <label for="contraseña_cli2">Repetir Contraseña:</label>
                                        <input type="password" name="contraseña_cli2" class="validate" id="contraseña_cli2" required>
                                    </div>
                                    <div class="input-field">
                                        <div id="mensaje"></div>
                                    </div>
                                    <div class="row">

                                        <input type="hidden" name="agregar_cliente" value="Añadir">
                                        <button class="btn waves-effect waves-light brown darken-3" type="submit" name="action">Registrarse
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </form>    
                            </div>
                        </div>
                    </div>      
                </div>
            </li>
        </ul>
    </div>

<?php    require_once('templates/footer.php')   ?>
<script src="js/funciones/registro.js"></script>
<?php    require_once('templates/footer2.php')   ?>




