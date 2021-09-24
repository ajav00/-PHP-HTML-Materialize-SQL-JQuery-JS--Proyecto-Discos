
<?php    require_once('templates/Administrador/header.php')   ?>
<?php    require_once('templates/Administrador/header1.php')   ?>
<?php    require_once('templates/Administrador/barra.php')   ?>
<?php  //  include_once('Seguridad3.php')   ?>
<?php    require_once('templates/Administrador/navegacion.php')   ?>

  <!-- Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
            Crear administradores
            </h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Crea un administrador</h3>
        </div>
        <div class="card-body">
        
          <div class = "row">
            <div class="col-lg-4"> </div>
            <div class="col-lg-2">    
              <a href="#" class="text-light align-self-center"data-toggle="modal" data-target="#nuevoAdmi">            
                  <div class = "boton bg-success d-flex align-items-center justify-content-center text-light">
                  <i class="fas fa-user-plus px-3 py-4"> Agregar </i>
                  </div>           
              </a>
            </div>
          </div>



        <div class = "modal fade" id = "nuevoAdmi">
          <div class = "modal-dialog modal-dialog-centrado">
              <div class = "modal-content">
                  <!-- Encabezado modal -->
                  <div class = "modal-header">
                    <h4 class = "modal-title justify-content-center"> Nuevo Administrador </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <!-- Cuerpo modal -->
                  <div class = "modal-body">
                      <form class="" method="post" id="frm_admin" action="Ac_Admi.php">
                          <div class="form-group">
                              <label for="nombre_admin">Nombre:</label>
                              <input type="text" class="form-control" id="nombre_admin" name='nombre_admin' placeholder="Nombre" required>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="apellido1_admi">Apellido Paterno:</label>
                                  <input type="text" class="form-control" id="apellido1_admi" name='apellido1_admi' placeholder="Apellido Paterno" required>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="apellido2_admi">Apellido Materno:</label>
                                  <input type="text" class="form-control" id="apellido2_admi" name='apellido2_admi' placeholder="Apellido Materno">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                              <label for="descripcion_admin">Descripción:</label>
                              <input type="text" class="form-control" id="descripcion_admin" name='descripcion_admi' placeholder="Descripción" required>
                          </div>
                          <div class="form-group">
                              <label for="email_admin">E-mail:</label>
                              <input type="email" class="form-control" id="email_admin" name='email_admi' placeholder="Email" required>
                          </div>
                          <div class="form-group">
                              <label for="usuario_admin">Usuario:</label>
                              <input type="text" class="form-control" id="usuario_admin" name='usuario_admi' placeholder="Usuario" required>
                          </div>
                          <div class="form-group">
                              <label for="password_admin">Password:</label>
                              <input type="password" class="form-control" id="password_admin" name='password_admi' placeholder="Contraseña" required>
                          </div>
                          <input type="hidden" name="agregar_admi" value="Añadir">
                          <input type="submit" class="btn btn-warning text-uppercase text-light px-5 py-2" value="Añadir">   
                      </form>  
                  </div> 
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog modal-dialog-centrado -->
            </div><!-- /.modal fade -->



            <div class = "modal fade" id = "modAdmi">
          <div class = "modal-dialog modal-dialog-centrado">
              <div class = "modal-content">
                  <!-- Encabezado modal -->
                  <div class = "modal-header">
                    <h4 class = "modal-title justify-content-center"> Modificar Administrador </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <!-- Cuerpo modal -->
                  <div class = "modal-body">
                      <form class="" method="post" id="frm_madmin" action="Ac_Admi.php">
                          <input type="hidden" name="id_admi" id="mod_admi">
                          <div class="form-group">
                              <label for="nombre_admin">Nombre:</label>
                              <input type="text" class="form-control" id="nombre_madmin" name='nombre_admin' placeholder="Nombre" required>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="apellido1_admi">Apellido Paterno:</label>
                                  <input type="text" class="form-control" id="apellido1_madmi" name='apellido1_admi' placeholder="Apellido Paterno" required>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="apellido2_admi">Apellido Materno:</label>
                                  <input type="text" class="form-control" id="apellido2_madmi" name='apellido2_admi' placeholder="Apellido Materno">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                              <label for="descripcion_admin">Descripción:</label>
                              <input type="text" class="form-control" id="descripcion_madmin" name='descripcion_admi' placeholder="Descripción" required>
                          </div>
                          <div class="form-group">
                              <label for="email_admin">E-mail:</label>
                              <input type="email" class="form-control" id="email_madmin" name='email_admi' placeholder="Email" required>
                          </div>
                          <div class="form-group">
                              <label for="usuario_admin">Usuario:</label>
                              <input type="text" class="form-control" id="usuario_madmin" name='usuario_admi' placeholder="Usuario" required>
                          </div>
                          <input type="hidden" name="agregar_admi" value="Modificar">
                          <input type="submit" class="btn btn-warning text-uppercase text-light px-5 py-2" value="Modificar">   
                      </form>  
                  </div> 
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog modal-dialog-centrado -->
            </div><!-- /.modal fade -->


            <!-- Eliminar -->
          <div class = "modal fade" id = "eliAdmi">
            <div class = "modal-dialog modal-dialog-centrado">
              <div class = "modal-content">
                <!-- Encabezado modal -->
                <div class = "modal-header">
                  <h4 class = "modal-title justify-content-center">Eliminar Administrador </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <!-- Cuerpo modal -->
                <div class = "modal-body">
                    <form class="" method="post" id="frm_eadmin" action="Ac_Admi.php">
                      <input type="hidden" name="id_admi" id="eli_admi">
                        <div class="my-2">
                            ¿Está seguro de eliminar este administrador de la lista? 
                        </div>
                        <input type="hidden" name="agregar_admi" value="Eliminar">
                        <input type="submit" class="btn btn-warning text-uppercase text-light px-5 py-2" value="Eliminar">   
                    </form>  
                </div> 
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog modal-dialog-centrado -->
          </div><!-- /.modal fade -->
  

            <div class = "mt-3" style = "overflow-x: auto;">
                <table id = "listaAdmin" class = "table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th> Id </th>
                            <th> Nombre </th>
                            <th> Apellido Pat </th>
                            <th> Apellido Mat </th>
                            <th> Descripcion </th>
                            <th> Email </th>
                            <th> Usuario </th>
                            <th> Modificar </th>
                            <th> Eliminar </th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                          <th> Id </th>
                            <th> Nombre </th>
                            <th> Apellido Pat </th>
                            <th> Apellido Mat </th>
                            <th> Descripcion </th>
                            <th> Email </th>
                            <th> Usuario </th>
                            <th> Modificar </th>
                            <th> Eliminar </th>
                        </tr>
                    </tfoot>
                </table>   
            </div>
              
         

        </div>
        <!-- /.card-body -->
        </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php    require_once('templates/Administrador/footer.php')   ?> 
  <script src="js/funciones/admin.js"></script>
  <?php    require_once('templates/Administrador/footer2.php')   ?> 



