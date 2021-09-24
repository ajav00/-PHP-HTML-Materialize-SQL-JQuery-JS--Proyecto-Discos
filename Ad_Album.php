<?php    require_once('templates/Administrador/header.php')   ?>
<?php    require_once('templates/Administrador/header1.php')   ?>
<?php    require_once('templates/Administrador/barra.php')   ?>
<?php    include_once('Seguridad3.php')   ?>
<?php    require_once('templates/Administrador/navegacion.php');
          require_once("cargarClases.php");  
          $lista_art = ArtistaDb::listarObjetos(new Conexion());
          $lista_disc = DiscograficaDb::listarObjetos(new Conexion());
          $lista_pais = PaisDb::listarObjetos(new Conexion());
          $lista_idioma = IdiomaDb::listarObjetos(new Conexion());
          $lista_gen = GeneroDb::listarObjetos(new Conexion());
          
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
            Albumes
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
          <h3 class="card-title">Añade una albúm</h3>
        </div>
        <div class="card-body">
        
          <div class = "row">
            <div class="col-lg-4"> </div>
            <div class="col-lg-2">    
              <a href="#" class="text-light align-self-center"data-toggle="modal" data-target="#nuevoAlbum">            
                  <div class = "boton bg-success d-flex align-items-center justify-content-center text-light">
                  <i class="fas fa-user-plus px-3 py-4"> Agregar </i>
                  </div>           
              </a>
            </div>
          </div>


          <!-- Nuevo -->
          <div class = "modal fade" id = "nuevoAlbum">
            <div class = "modal-dialog modal-dialog-centrado">
              <div class = "modal-content">
                <!-- Encabezado modal -->
                <div class = "modal-header">
                  <h4 class = "modal-title justify-content-center"> Albúm Nuevo </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <!-- Cuerpo modal -->
                <div class = "modal-body">
                    <form class="" method="post" id="frm_album" action="Ac_Album.php" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="nombre_album">Nombre:</label>
                            <input type="text" class="form-control" id="nombre_album" name='nombre_album' placeholder="Nombre dela cancion" required > 
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
                                  <label for="alb_Discog">Discografica:</label>
                                </div>
                                <div class="col-4">
                                  <select name="alb_Discog">
                                    <?php foreach ($lista_disc as $obj) { ?>
                                    <option value="<?=$obj->getId_Discografica()?>"><?=$obj->getNombre_Disc()?></option>
                                    <?php }?>
                                  </select>
                                </div>
                                <div class="col"></div>
                                <div class="col-2">
                                      <a href="Ad_Discografica.php" class="btn btn-warning"><i class="fas fa-plus text-light"></i></a>
                                </div>
                            </div>
                          </div>



                          <div class="form-group">
                            <div class="row my-2">
                                <div class="col-3">
                                  <label for="alb_Pais">Pais:</label>
                                </div>
                                <div class="col-4">
                                  <select name="alb_Pais">
                                    <?php foreach ($lista_pais as $obj) { ?>
                                    <option value="<?=$obj->getId_Pais()?>"><?=$obj->getNombre_Pais()?></option>
                                    <?php }?>
                                  </select>
                                </div>
                                <div class="col"></div>
                                <div class="col-2">
                                      <a href="Ad_Pais.php" class="btn btn-warning"><i class="fas fa-plus text-light"></i></a>
                                </div>
                            </div>
                          </div>



                          <div class="form-group">
                            <div class="row my-2">
                                <div class="col-3">
                                  <label for="alb_Idioma">Idioma:</label>
                                </div>
                                <div class="col-4">
                                  <select name="alb_Idioma">
                                    <?php foreach ($lista_idioma as $obj) { ?>
                                    <option value="<?=$obj->getId_Idioma()?>"><?=$obj->getNombre_Idi()?></option>
                                    <?php }?>
                                  </select>
                                </div>
                                <div class="col"></div>
                                <div class="col-2">
                                      <a href="Ad_Idioma.php" class="btn btn-warning"><i class="fas fa-plus text-light"></i></a>
                                </div>
                            </div>    
                          </div>




                          <div class="form-group">
                            <div class="row my-2">
                                <div class="col-3">
                                  <label for="alb_Genero">Genero:</label>
                                </div>
                                <div class="col-4">
                                  <select name="alb_Genero">
                                    <?php foreach ($lista_gen as $obj) { ?>
                                    <option value="<?=$obj->getId_Genero()?>"><?=$obj->getNombre_Gen()?></option>
                                    <?php }?>
                                  </select>
                                </div>
                                <div class="col"></div>
                                <div class="col-2">
                                      <a href="Ad_Genero.php" class="btn btn-warning"><i class="fas fa-plus text-light"></i></a>
                                </div>
                            </div>   
                          </div>



                          <div class="form-group">
                            <label for="fecha_alb">Fecha de Publicacion:</label>
                            <input type="date" class="form-control" id="fecha_alb" name='fecha_alb' placeholder="" required>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-4">
                              <label for="hora">Horas:</label>
                              <input type="number" class="form-control" id="hora" name='hora' placeholder="" min="00" required>
                            </div>
                            <div class="col-4">
                              <label for="minutos">Minutos</label>
                              <input type="number" class="form-control" id="minutos" name='minutos' placeholder="" min="00" max="59" required>
                            </div>
                            <div class="col-4">
                              <label for="segundos">Segundos:</label>
                              <input type="number" class="form-control" id="segundos" name='segundos' placeholder="" min="00" max="59" required>
                            </div>

                          </div>
                        </div>
                        <div class="form-group">
                            <label for="num_c_al">Número de Canciones:</label>
                            <input type="number" class="form-control" id="num_c_al" name='num_c_al' placeholder="Numero de Canciones" min="1" required>
                        </div>
                        <div class="form-group">
                            <label for="img_album">Portada del Album:</label>
                            <input type="file" class="form-control-file " name="img_album" id="img_album" placeholder="Portada Del Album" required>
                        </div>
                        <input type="hidden" name="agregar_album" value="Añadir">
                        <input type="submit" class="btn btn-warning text-uppercase text-light px-5 py-2" value="Añadir">   
                    </form>  
                </div> 
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog modal-dialog-centrado -->
          </div><!-- /.modal fade -->

          <!-- Modificar -->
          <div class = "modal fade" id = "modAlbum">
            <div class = "modal-dialog modal-dialog-centrado">
              <div class = "modal-content">
                <!-- Encabezado modal -->
                <div class = "modal-header">
                  <h4 class = "modal-title justify-content-center">Modificar Albúm</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <!-- Cuerpo modal -->
                <div class = "modal-body">
                    <form class="" method="post" id="frm_malbum" action="Ac_Album.php" enctype="multipart/form-data">
                      <input type="hidden" name="id_album" id="mod_album">
                      <input type="hidden" name="img_anti" id="img_anti">
                      
                      <div class="form-group">
                            <label for="m_album">Nombre:</label>
                            <input type="text" class="form-control" id="m_album" name='m_album' placeholder="Nombre dela cancion" required>
                        </div>
                        
                      
                          <div class="form-group">
                            <div class="row my-2">
                                <div class="col-3">
                                  <label for="alb_Artista">Artista:</label>
                                </div>
                                <div class="col">
                                  <select name="alb_Artista" id="m_artista">
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
                                  <label for="alb_Discog">Discografica:</label>
                                </div>
                                <div class="col-4">
                                  <select name="alb_Discog" id="m_disc">
                                    <?php foreach ($lista_disc as $obj) { ?>
                                    <option value="<?=$obj->getId_Discografica()?>"><?=$obj->getNombre_Disc()?></option>
                                    <?php }?>
                                  </select>
                                </div>
                                <div class="col"></div>
                                <div class="col-2">
                                      <a href="Ad_Discografica.php" class="btn btn-warning"><i class="fas fa-plus text-light"></i></a>
                                </div>
                            </div>
                          </div>



                          <div class="form-group">
                            <div class="row my-2">
                                <div class="col-3">
                                  <label for="alb_Pais">Pais:</label>
                                </div>
                                <div class="col-4">
                                  <select name="alb_Pais" id="m_pais">
                                    <?php foreach ($lista_pais as $obj) { ?>
                                    <option value="<?=$obj->getId_Pais()?>"><?=$obj->getNombre_Pais()?></option>
                                    <?php }?>
                                  </select>
                                </div>
                                <div class="col"></div>
                                <div class="col-2">
                                      <a href="Ad_Pais.php" class="btn btn-warning"><i class="fas fa-plus text-light"></i></a>
                                </div>
                            </div>
                          </div>



                          <div class="form-group">
                            <div class="row my-2">
                                <div class="col-3">
                                  <label for="alb_Idioma">Idioma:</label>
                                </div>
                                <div class="col-4">
                                  <select name="alb_Idioma" id="m_idioma">
                                    <?php foreach ($lista_idioma as $obj) { ?>
                                    <option value="<?=$obj->getId_Idioma()?>"><?=$obj->getNombre_Idi()?></option>
                                    <?php }?>
                                  </select>
                                </div>
                                <div class="col"></div>
                                <div class="col-2">
                                      <a href="Ad_Idioma.php" class="btn btn-warning"><i class="fas fa-plus text-light"></i></a>
                                </div>
                            </div>    
                          </div>




                          <div class="form-group">
                            <div class="row my-2">
                                <div class="col-3">
                                  <label for="alb_Genero" >Genero:</label>
                                </div>
                                <div class="col-4">
                                  <select name="alb_Genero" id="m_genero">
                                    <?php foreach ($lista_gen as $obj) { ?>
                                    <option value="<?=$obj->getId_Genero()?>"><?=$obj->getNombre_Gen()?></option>
                                    <?php }?>
                                  </select>
                                </div>
                                <div class="col"></div>
                                <div class="col-2">
                                      <a href="Ad_Genero.php" class="btn btn-warning"><i class="fas fa-plus text-light"></i></a>
                                </div>
                            </div>   
                          </div>



                          <div class="form-group">
                            <label for="fecha_alb">Fecha de Publicacion:</label>
                            <input type="date" class="form-control" id="fecha_malb" name='fecha_alb' placeholder="" required>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-4">
                              <label for="hora">Horas:</label>
                              <input type="number" class="form-control" id="m_hora" name='hora' placeholder="" min="00" required>
                            </div>
                            <div class="col-4">
                              <label for="minutos">Minutos</label>
                              <input type="number" class="form-control" id="m_minutos" name='minutos' placeholder="" min="00" max="59" required>
                            </div>
                            <div class="col-4">
                              <label for="segundos">Segundos:</label>
                              <input type="number" class="form-control" id="m_segundos" name='segundos' placeholder="" min="00" max="59" required>
                            </div>

                          </div>
                        </div>
                        <div class="form-group">
                            <label for="num_c_al">Número de Canciones:</label>
                            <input type="number" class="form-control" id="mnum_c_al" name='num_c_al' placeholder="Numero de Canciones" min="1" required>
                        </div>
                        <label for="img_ant">Portada Antigua</label>
                        <img src="" alt="" id="img_ant" class="img-fluid">
                        <div class="form-group">
                            <label for="img_nueva">Portada del Album:</label>
                            <input type="file" class="form-control-file " name="img_nueva" id="img_nueva" placeholder="Portada Del Album" >
                        </div>
                        <input type="hidden" name="agregar_album" value="Modificar">
                        <input type="submit" class="btn btn-warning text-uppercase text-light px-5 py-2" value="Modificar">   
                    </form>  
                </div> 
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog modal-dialog-centrado -->
          </div><!-- /.modal fade -->


          <!-- Eliminar -->
          <div class = "modal fade" id = "eliAlbum">
            <div class = "modal-dialog modal-dialog-centrado">
              <div class = "modal-content">
                <!-- Encabezado modal -->
                <div class = "modal-header">
                  <h4 class = "modal-title justify-content-center">Eliminar Album </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <!-- Cuerpo modal -->
                <div class = "modal-body">
                    <form class="" method="post" id="frm_ealbum" action="Ac_Album.php">
                      <input type="hidden" name="id_album" id="eli_album">
                        <div class="my-2">
                            ¿Está seguro de eliminar este album de la lista? 
                        </div>
                        <input type="hidden" name="agregar_album" value="Eliminar">
                        <input type="submit" class="btn btn-warning text-uppercase text-light px-5 py-2" value="Eliminar">   
                    </form>  
                </div> 
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog modal-dialog-centrado -->
          </div><!-- /.modal fade -->
  















































            <div class = "mt-3" style = "overflow-x: auto;">
                <table id = "listaAlbum" class = "table table-striped table-bordered">
                <thead>
                        <tr>
                            <th> Id </th>
                            <th> Titulo </th>
                            <th> Id A </th>
                            <th> Id D </th>
                            <th> Id G </th>
                            <th> Id I </th>
                            <th> Id P </th>
                            <th> Estado </th>
                            <th> Artista </th>
                            <th> Discografica </th>
                            <th> Genero </th>
                            <th> Idioma </th>
                            <th> Pais </th>
                            <th> Fecha </th>
                            <th> Duracion </th>
                            <th> Canciones </th>
                            <th> Imagen </th>
                            <th> Modificar </th>
                            <th> Eliminar </th>           
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th> Id </th>
                            <th> Titulo </th>
                            <th> Id A </th>
                            <th> Id D </th>
                            <th> Id G </th>
                            <th> Id I </th>
                            <th> Id P </th>
                            <th> Estado </th>
                            <th> Artista </th>
                            <th> Discografica </th>
                            <th> Genero </th>
                            <th> Idioma </th>
                            <th> Pais </th>
                            <th> Fecha </th>
                            <th> Duracion </th>
                            <th> Canciones </th>
                            <th> Imagen </th>
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
  <script src="js/funciones/album.js"></script>
  <?php    require_once('templates/Administrador/footer2.php')   ?> 