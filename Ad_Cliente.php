<?php    require_once('templates/Administrador/header.php')   ?>
<?php    require_once('templates/Administrador/header1.php')   ?>
<?php    require_once('templates/Administrador/barra.php')   ?>
<?php    include_once('Seguridad3.php')   ?>
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
            Usuarios
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
          <h3 class="card-title">Control de Usuarios</h3>
        </div>
        <div class="card-body">
        
        

          <!-- Encabezado modal -->
          <div class = "modal fade" id = "modCliente">
            <div class = "modal-dialog modal-dialog-centrado">
              <div class = "modal-content">
                  <!-- Encabezado modal -->
                  <div class = "modal-header">
                    <h4 class = "modal-title justify-content-center"> Modificar Cliente</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <!-- Cuerpo modal -->
                  <div class = "modal-body">
                      <form class="" method="post" id="frm_mregistro" action="Ac_Cliente.php">
                        <input type="hidden" name="id_cliente" id="mod_cliente">
                        <div class="form-group">
                              <label for="nombre_mcli">Nombre:</label>
                              <input type="text" class="form-control" id="nombre_mcli" name='nombre_cli' placeholder="Nombre" required>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="apellido_pat_mcli">Apellido Paterno:</label>
                                  <input type="text" class="form-control" id="apellido_pat_mcli" name='apellido_pat_cli' placeholder="Apellido Paterno" required>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="apellido_mat_mcli">Apellido Materno:</label>
                                  <input type="text" class="form-control" id="apellido_mat_mcli" name='apellido_mat_cli' placeholder="Apellido Materno">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                              <label for="direccion_mcli">Dirección:</label>
                              <input type="text" class="form-control" id="direccion_mcli" name='direccion_cli' placeholder="Dirección" required>
                          </div>
                          <div class="form-group">
                              <label for="celular_mcli">Celular:</label>
                              <input type="text" class="form-control" id="celular_mcli" name='celular_cli' placeholder="Telefóno Ce" required>
                          </div>
                          <div class="form-group">
                              <label for="email_mcli">E-mail:</label>
                              <input type="email" class="form-control" id="email_mcli" name='email_cli' placeholder="Email" required>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-8">
                              <label for="usuario_mcli">Usuario:</label>
                              <input type="text" class="form-control" id="usuario_mcli" name='usuario_cli' placeholder="Usuario" required>
                              <small id="resultado_mver" class="form-text text-muted"></small>
                            </div>
                            <div class="col-sm-4 bottom">
                              <a  id="mVerificar"class="btn btn-warning text-light">Verificar   <i class="fas fa-plus text-light"></i></a>
                            </div>
                          </div>
                          <small id="mrespuestaFinal" class="form-text text-muted"></small>
                          <input type="hidden" name="agregar_cliente" value="Modificar">
                          <input type="submit" class="btn btn-warning text-uppercase text-light px-5 py-2" value="Modificar">   
                      </form>  
                  </div> 
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog modal-dialog-centrado -->
            </div><!-- /.modal fade -->


          <div class = "mt-3" style = "overflow-x: auto;">
                <table id = "listaCliente" class = "table table-striped table-bordered">
                <thead>
                        <tr>
                        <th> Id </th>
                            <th> Nombre </th>
                            <th> Apellido Pat </th>
                            <th> Apellido Mat </th>
                            <th> Direccion </th>
                            <th> Celular </th>
                            <th> Email </th>
                            <th> Usuario </th>         
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th> Id </th>
                            <th> Nombre </th>
                            <th> Apellido Pat </th>
                            <th> Apellido Mat </th>
                            <th> Direccion </th>
                            <th> Celular </th>
                            <th> Email </th>
                            <th> Usuario </th>
                                    
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
  <script src="js/funciones/cliente.js"></script>
  <?php    require_once('templates/Administrador/footer2.php')   ?> 

  

  