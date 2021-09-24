<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <span class="brand-text font-weight-light">WaterlooSunset</span>
    </a>


    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><?php   echo $_SESSION['Nombre_admi']?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-compact-disc"></i>
              <p>
                Discos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Ad_Album.php" class="nav-link">
                <i class="fas fa-list-ol"></i>
                  <p>Mostrar Todo</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Ad_Pedidos.php" class="nav-link">
                <i class="fas fa-list-ol"></i>
                  <p>Lista de Pedidos</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-table"></i>
              <p>
                Propiedades de Discos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Ad_Artista.php" class="nav-link">
                  <i class="fas fa-guitar"></i>
                  <p>Artistas</p>
                </a>
              </li><li class="nav-item">
                <a href="Ad_Cancion.php" class="nav-link">
                  <i class="fas fa-music"></i>
                  <p>Canciones</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Ad_Genero.php" class="nav-link">
                  <i class="fas fa-file-audio"></i>
                  <p>Genero</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Ad_Discografica.php" class="nav-link">
                <i class="fas fa-record-vinyl"></i>
                  <p>Discografica</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Ad_Idioma.php" class="nav-link">
                <i class="fas fa-language"></i>
                  <p>Idioma</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Ad_Pais.php" class="nav-link">
                  <i class="fas fa-globe-europe"></i>
                  <p>Pais</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-boxes"></i>
              <p>
                Inventario
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Ad_Inventario.php" class="nav-link">
                <i class="fas fa-list-ol"></i>
                  <p>Mostrar todos </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Ad_Factura.php" class="nav-link">
                  <i class="fas fa-file-invoice"></i>
                  <p>Facturas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Ad_Salida.php" class="nav-link">
                  <i class="fas fa-file-invoice"></i>
                  <p>Ver Salidas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Ad_Entrada.php" class="nav-link">
                  <i class="fas fa-truck-loading"></i>
                  <p>Agregar entrada</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-users-cog"></i>
              <p>
                Administradores
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Ad_Admi.php" class="nav-link">
                <i class="fas fa-list-ol"></i>
                  <p>Mostrar todos </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="Ad_Dashboard.php" class="nav-link">
              <i class="fas fa-users-cog"></i>
              <p>
                Dashboards
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-user"></i>
              <p>
                Opciones de Administrador
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="SalirAdmi.php" class="nav-link">
                <i class="fas fa-user-times "></i>
                  <p>Cerrar Sesion</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
