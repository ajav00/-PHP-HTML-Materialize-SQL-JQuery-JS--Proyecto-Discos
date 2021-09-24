<?php    require_once('templates/Administrador/header.php')   ?>
<?php    require_once('templates/Administrador/header1.php')   ?>
<?php    require_once('templates/Administrador/barra.php')   ?>
<?php    include_once('Seguridad3.php')   ?>
<?php    require_once('templates/Administrador/navegacion.php');
require_once("cargarClases.php");  
$lista_prov = ProveedorDb::listarObjetos(new Conexion());
$lista_alb = AlbumDb::listarObjetos(new Conexion());
?>

  <!-- Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
            Administracion de Entradas
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
          <h3 class="card-title">Entradas</h3>
        </div>
        <div class="card-body">
        
          <div class = "row">
            <div class="col-lg-4"> </div>
            <div class="col-lg-2">    
              <a href="#" class="text-light align-self-center"data-toggle="modal" data-target="#nuevaEntrada">            
                  <div class = "boton bg-success d-flex align-items-center justify-content-center text-light">
                  <i class="fas fa-user-plus px-3 py-4"> Agregar </i>
                  </div>           
              </a>
            </div>
          </div>



          <div class = "modal fade" id = "nuevaEntrada">
            <div class = "modal-dialog modal-dialog-centrado">
              <div class = "modal-content">
                <!-- Encabezado modal -->
                <div class = "modal-header">
                  <h4 class = "modal-title justify-content-center"> Nuevo Ingreso </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <!-- Cuerpo modal -->
                <div class = "modal-body">
                    <form class="" method="post" id="frm_entrada" action="Ac_Entrada.php">
                          
                        <div class="form-group">
                            <label for="cantidad_ent">Cantidad:</label>
                            <input type="number" class="form-control" id="cantidad_ent" name='cantidad_ent' placeholder=""required>
                        </div>
                        <div class="form-group">
                            <label for="precio_ent">Precio:</label>
                            <input type="number" step="0.1" class="form-control" id="precio_ent" name='precio_ent' placeholder=""required>
                        </div>
                        <div class="form-group">
                          <div class="row my-2">
                              <div class="col-3">
                                <label for="nombre_Alb">Album:</label>
                              </div>
                              <div class="col-4">
                                <select name="nombre_Alb">
                                  <?php foreach ($lista_alb as $obj) { ?>
                                  <option value="<?=$obj->getId_Album()?>"><?=$obj->getNombre_Alb()?></option>
                                  <?php }?>
                                </select>
                              </div>
                              
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row my-2">
                              <div class="col-3">
                                <label for="proveedor">Proveedor:</label>
                              </div>
                              <div class="col-4">
                                <select name="proveedor">
                                  <?php foreach ($lista_prov as $obj) { ?>
                                  <option value="<?=$obj->getId_Proveedor()?>"><?=$obj->getNombre_Prov()?></option>
                                  <?php }?>
                                </select>
                              </div>
                              <div class="col"></div>
                              <div class="col-2">
                                    <a href="#" class="btn btn-warning"><i class="fas fa-plus text-light"></i></a>
                              </div>
                          </div>
                        </div>

                        <input type="hidden" name="agregar_entrada" value="Añadir">
                        <input type="submit" class="btn btn-warning text-uppercase text-light px-5 py-2" value="Añadir">   
                    </form>  
                </div> 
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog modal-dialog-centrado -->
          </div><!-- /.modal fade -->

            <div class = "mt-3" style = "overflow-x: auto;">
                <table id = "listaEntrada" class = "table table-striped table-bordered">
                <thead>
                        <tr>
                            <th> Id </th>
                            <th> Cantidad </th>
                            <th> Precio </th>
                            <th> Fecha </th>
                            <th> Album </th>   
                            <th> Administrador </th> 
                            <th> Proveedor </th>         
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th> Id </th>
                            <th> Cantidad </th>
                            <th> Precio </th>
                            <th> Fecha </th>
                            <th> Album </th>   
                            <th> Administrador </th> 
                            <th> Proveedor </th>    
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
  <script src="js/funciones/entrada.js"></script>
  <?php    require_once('templates/Administrador/footer2.php')   ?> 
  