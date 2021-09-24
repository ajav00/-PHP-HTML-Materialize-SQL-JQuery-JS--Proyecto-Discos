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
            Artistas
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
          <h3 class="card-title">Añade un Artista</h3>
        </div>
        <div class="card-body">
        
          <div class = "row">
            <div class="col-lg-4"> </div>
            <div class="col-lg-2">    
              <a href="#" class="text-light align-self-center"data-toggle="modal" data-target="#nuevoArtista">            
                  <div class = "boton bg-success d-flex align-items-center justify-content-center text-light">
                  <i class="fas fa-user-plus px-3 py-4"> Agregar </i>
                  </div>           
              </a>
            </div>
          </div>


        <!-- Nuevo -->
          <div class = "modal fade" id = "nuevoArtista">
            <div class = "modal-dialog modal-dialog-centrado">
              <div class = "modal-content">
                <!-- Encabezado modal -->
                <div class = "modal-header">
                  <h4 class = "modal-title justify-content-center"> Artista </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <!-- Cuerpo modal -->
                <div class = "modal-body">
                    <form class="" method="post" id="frm_artista" action="Ac_Artista.php">
                        <div class="form-group">
                            <label for="nombre_artista">Artsita:</label>
                            <input type="text" class="form-control" id="nombre_artista" name='nombre_artista' placeholder="Nombre del artista" required>
                        </div>
                        <input type="hidden" name="agregar_artista" value="Añadir">
                        <input type="submit" class="btn btn-warning text-uppercase text-light px-5 py-2" value="Añadir">   
                    </form>  
                </div> 
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog modal-dialog-centrado -->
          </div><!-- /.modal fade -->


          <!-- Modificar -->
          <div class = "modal fade" id = "modArtista">
            <div class = "modal-dialog modal-dialog-centrado">
              <div class = "modal-content">
                <!-- Encabezado modal -->
                <div class = "modal-header">
                  <h4 class = "modal-title justify-content-center">Modificar Artista </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <!-- Cuerpo modal -->
                <div class = "modal-body">
                    <form class="" method="post" id="frm_martista" action="Ac_Artista.php">
                      <input type="hidden" name="id_art" id="mod_art">
                        <div class="form-group">
                            <label for="m_nombre_artista">Artsita:</label>
                            <input type="text" class="form-control" id="m_nombre_artista" name='m_nombre_artista' placeholder="Nombre del artista" required>
                        </div>
                        <input type="hidden" name="agregar_artista" value="Modificar">
                        <input type="submit" class="btn btn-warning text-uppercase text-light px-5 py-2" value="Modificar">   
                    </form>  
                </div> 
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog modal-dialog-centrado -->
          </div><!-- /.modal fade -->


          <!-- Eliminar -->
          <div class = "modal fade" id = "eliArtista">
            <div class = "modal-dialog modal-dialog-centrado">
              <div class = "modal-content">
                <!-- Encabezado modal -->
                <div class = "modal-header">
                  <h4 class = "modal-title justify-content-center">Eliminar Artista </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <!-- Cuerpo modal -->
                <div class = "modal-body">
                    <form class="" method="post" id="frm_eartista" action="Ac_Artista.php">
                      <input type="hidden" name="id_art" id="eli_art">
                        <div class="my-2">
                            ¿Está seguro de eliminar este artista de la lista? 
                        </div>
                        <input type="hidden" name="agregar_artista" value="Eliminar">
                        <input type="submit" class="btn btn-warning text-uppercase text-light px-5 py-2" value="Eliminar">   
                    </form>  
                </div> 
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog modal-dialog-centrado -->
          </div><!-- /.modal fade -->
  










            <div class = "mt-3" style = "overflow-x: auto;">
                <table id = "listaArtista" class = "table table-striped table-bordered">
                <thead>
                        <tr>
                            <th> Id </th>
                            <th> Nombre </th>
                            <th>Modificar</th> 
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th> Id </th>
                            <th> Nombre </th>
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
  <script src="js/funciones/artista.js"></script>
  <?php    require_once('templates/Administrador/footer2.php')   ?> 

  