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
            Administracion de Salidas
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
          <h3 class="card-title">Salidas</h3>
        </div>

        <div class="card-body">
            <div class = "mt-3" style = "overflow-x: auto;">
                <table id = "listaSalida" class = "table table-striped table-bordered">
                <thead>
                        <tr>
                            <th> Id </th>
                            <th> Cantidad </th>
                            <th> Factura </th>
                            <th> Album </th>  
                                   
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th> Id </th>
                            <th> Cantidad </th>
                            <th> Factura </th>
                            <th> Album </th>    
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
  <script src="js/funciones/salida.js"></script>
  <?php    require_once('templates/Administrador/footer2.php')   ?> 