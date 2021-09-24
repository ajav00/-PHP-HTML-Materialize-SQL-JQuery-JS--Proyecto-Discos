
<?php    require_once('templates/Administrador/header.php')   ?>
<?php    require_once('templates/Administrador/header1.php')   ?>
<?php    require_once('templates/Administrador/barra.php')   ?>
<?php    include_once('Seguridad3.php')   ?>
<?php    require_once('templates/Administrador/navegacion.php');
          require_once("cargarClases.php");  
          $lista_art = ArtistaDb::listarObjetos(new Conexion());
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
            Canciones
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
          <h3 class="card-title">Añade una cancion</h3>
        </div>
        <div class="card-body">
        
          <div class = "row">
            <div class="col-lg-4"> </div>
            <div class="col-lg-2">    
              <a href="#" class="text-light align-self-center"data-toggle="modal" data-target="#nuevaCancion">            
                  <div class = "boton bg-success d-flex align-items-center justify-content-center text-light">
                  <i class="fas fa-user-plus px-3 py-4"> Agregar </i>
                  </div>           
              </a>
            </div>
          </div>



          <!-- Nuevo -->
          <div class = "modal fade" id = "nuevaCancion">
            <div class = "modal-dialog modal-dialog-centrado">
              <div class = "modal-content">
                <!-- Encabezado modal -->
                <div class = "modal-header">
                  <h4 class = "modal-title justify-content-center"> Cancion Nueva </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <!-- Cuerpo modal -->
                <div class = "modal-body">
                    <form class="" method="post" id="frm_cancion" action="Ac_Cancion.php">
                          
                        <div class="form-group">
                            <label for="nombre_can">Nombre:</label>
                            <input type="text" class="form-control" id="nombre_can" name='nombre_can' placeholder="Nombre de la cancion"required>
                        </div>
                        <div class="form-group">
                            <div class="row my-2">
                                <div class="col-3">
                                  <label for="alb_Artista">Artista:</label>
                                </div>
                                <div class="col">
                                  <select name="alb_Artista">
                                    <?php foreach ($lista_art as $obj) { ?>
                                    <option value="<?=$obj->getId_Artista()?>"><?=$obj->getNombre_Art()?></option>
                                    <?php }?>
                                  </select>
                                </div>
                                <div class="col-2">
                                      <a href="Ad_Artista.php" class="btn btn-warning"><i class="fas fa-plus text-light"></i></a>
                                </div>
                            </div>  
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
                              <div class="col"></div>
                              <div class="col-2">
                                    <a href="Ad_Album.php" class="btn btn-warning"><i class="fas fa-plus text-light"></i></a>
                              </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="num_track">Número de Cancion en el Album:</label>
                            <input type="number" class="form-control" id="num_track" name='num_track' placeholder="Numero de Cancion" min="1" max="100" required>
                        </div>
                        <input type="hidden" name="agregar_cancion" value="Añadir">
                        <input type="submit" class="btn btn-warning text-uppercase text-light px-5 py-2" value="Añadir">   
                    </form>  
                </div> 
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog modal-dialog-centrado -->
          </div><!-- /.modal fade -->

        <!-- Modificar -->
        <div class = "modal fade" id = "modCancion">
            <div class = "modal-dialog modal-dialog-centrado">
              <div class = "modal-content">
                <!-- Encabezado modal -->
                <div class = "modal-header">
                  <h4 class = "modal-title justify-content-center"> Modificar Cancion </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <!-- Cuerpo modal -->
                <div class = "modal-body">
                    <form class="" method="post" id="frm_mcancion" action="Ac_Cancion.php">
                        <input type="hidden" name="id_can" id="mod_can">
                        <div class="form-group">
                            <label for="nombre_mcan">Nombre:</label>
                            <input type="text" class="form-control" id="nombre_mcan" name='nombre_mcan' placeholder="Nombre de la cancion"required>
                        </div>
                        <div class="form-group">
                            <div class="row my-2">
                                <div class="col-3">
                                  <label for="alb_mArtista">Artista:</label>
                                </div>
                                <div class="col">
                                  <select name="alb_mArtista" id="m_artista">
                                    <?php foreach ($lista_art as $obj) { ?>
                                    <option value="<?=$obj->getId_Artista()?>"><?=$obj->getNombre_Art()?></option>
                                    <?php }?>
                                  </select>
                                </div>
                                <div class="col-2">
                                      <a href="Ad_Artista.php" class="btn btn-warning"><i class="fas fa-plus text-light"></i></a>
                                </div>
                            </div>  
                          </div>
                        <div class="form-group">
                          <div class="row my-2">
                              <div class="col-3">
                                <label for="nombre_mAlb">Album:</label>
                              </div>
                              <div class="col-4">
                                <select name="nombre_mAlb" id ="m_album">
                                  <?php foreach ($lista_alb as $obj) { ?>
                                  <option value="<?=$obj->getId_Album()?>"><?=$obj->getNombre_Alb()?></option>
                                  <?php }?>
                                </select>
                              </div>
                              <div class="col"></div>
                              <div class="col-2">
                                    <a href="Ad_Album.php" class="btn btn-warning"><i class="fas fa-plus text-light"></i></a>
                              </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="num_mtrack">Número de Cancion en el Album:</label>
                            <input type="number" class="form-control" id="num_mtrack" name='num_mtrack' placeholder="Numero de Cancion" min="1" max="100" required>
                        </div>
                        <input type="hidden" name="agregar_cancion" value="Modificar">
                        <input type="submit" class="btn btn-warning text-uppercase text-light px-5 py-2" value="Modificar">   
                    </form>  
                </div> 
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog modal-dialog-centrado -->
          </div><!-- /.modal fade -->


          <!-- Eliminar -->
          <div class = "modal fade" id = "eliCancion">
            <div class = "modal-dialog modal-dialog-centrado">
              <div class = "modal-content">
                <!-- Encabezado modal -->
                <div class = "modal-header">
                  <h4 class = "modal-title justify-content-center">Eliminar Cancion </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <!-- Cuerpo modal -->
                <div class = "modal-body">
                    <form class="" method="post" id="frm_ecancion" action="Ac_Cancion.php">
                      <input type="hidden" name="id_can" id="eli_can">
                        <div class="my-2">
                            ¿Está seguro de eliminar este cancion de la lista? 
                        </div>
                        <input type="hidden" name="agregar_cancion" value="Eliminar">
                        <input type="submit" class="btn btn-warning text-uppercase text-light px-5 py-2" value="Eliminar">   
                    </form>  
                </div> 
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog modal-dialog-centrado -->
          </div><!-- /.modal fade -->


          

            <div class = "mt-3" style = "overflow-x: auto;">
                <table id = "listaCanciones" class = "table table-striped table-bordered">
                <thead>
                        <tr>
                            <th> Id </th>
                            <th> Nombre </th>
                            <th> Id Artista </th>
                            <th> Id Album </th>
                            <th> Artista </th>
                            <th> Album </th>
                            <th> Track </th>
                            <th>Modificar</th> 
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th> Id </th>
                            <th> Nombre </th>
                            <th> Id Artista </th>
                            <th> Id Album </th>
                            <th> Artista </th>
                            <th> Album </th>
                            <th> Track </th>
                            <th>Modificar</th> 
                            <th>Eliminar</th>
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
  <script src="js/funciones/cancion.js"></script>
  <?php    require_once('templates/Administrador/footer2.php')   ?> 
  

  




  

  