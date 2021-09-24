<?php    require_once('templates/Administrador/header.php')   ?>
<?php    require_once('templates/Administrador/header1.php')   ?>
<?php    require_once('templates/Administrador/barra.php')   ?>
<?php    include_once('Seguridad3.php')   ?>
<?php    require_once('templates/Administrador/navegacion.php');?>

  <!-- Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
            Administracion de Inventario
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
          <h3 class="card-title">Inventario</h3>
        </div>

        <!-- Modificar-->
        <div class = "modal fade" id = "modInv">
            <div class = "modal-dialog modal-dialog-centrado">
              <div class = "modal-content">
                <!-- Encabezado modal -->
                <div class = "modal-header">
                  <h4 class = "modal-title justify-content-center">Modificar Precio </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <!-- Cuerpo modal -->
                <div class = "modal-body">
                    <form class="" method="post" id="frm_minventario" action="Ac_Inventario.php">
                      <input type="hidden" name="id_inv" id="mod_inv">
                        <div class="form-group">
                            <label for="m_precio">precio:</label>
                            <input type="text" class="form-control" id="m_precio" name='m_precio' placeholder="Genero" required>
                        </div>
                        <input type="hidden" name="agregar_inventario" value="Modificar">
                        <input type="submit" class="btn btn-warning text-uppercase text-light px-5 py-2" value="Modificar">   
                    </form>  
                </div> 
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog modal-dialog-centrado -->
          </div><!-- /.modal fade -->



        <div class="card-body">
            <div class = "mt-3" style = "overflow-x: auto;">
                <table id = "listaInv" class = "table table-striped table-bordered">
                <thead>
                        <tr>
                            <th> Id </th>
                            <th> Nombre </th>
                            <th> Total </th>
                            <th> Entradas </th>
                            <th> Salidas </th>   
                            <th> Precio </th> 
                            <th> Modificar </th>         
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th> Id </th>
                            <th> Nombre </th>
                            <th> Total </th>
                            <th> Entradas </th>
                            <th> Salidas </th>   
                            <th> Precio </th> 
                            <th> Modificar </th>     
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
  <script src="js/funciones/inventario.js"></script>
  <?php    require_once('templates/Administrador/footer2.php')   ?> 