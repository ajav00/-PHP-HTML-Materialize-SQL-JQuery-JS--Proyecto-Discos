<?php    require_once('templates/Administrador/header.php')   ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
<?php    require_once('templates/Administrador/header1.php')   ?>
<?php    require_once('templates/Administrador/barra.php')   ?>
<?php    include_once('Seguridad3.php')   ?>
<?php    require_once('templates/Administrador/navegacion.php');
        require_once("cargarClases.php");
        $lista = FacturaDb::mejorCliente(new Conexion());
        $cant = json_encode(array_column($lista,0));
        $nom= json_encode(array_column($lista,1));

        $listaAlb = SalidaDb::masSalidas(new Conexion());
        $ven = json_encode(array_column($listaAlb,0));
        $alb= json_encode(array_column($listaAlb,1));

        $listaA = InventarioDb::masInventario(new Conexion());
        $c = json_encode(array_column($listaA,0));
        $a= json_encode(array_column($listaA,1));
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
            Gráficos
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
                <h3 class="card-title text-uppercase">Clientes Frecuentes</h3>
                </div>
                <div class="card-body">
                <canvas id="primero"></canvas>
                </div>
        <!-- /.card-body -->
        </div>
      <!-- /.card -->

      <!-- Default box -->
      <div class="card">
                <div class="card-header">
                <h3 class="card-title text-uppercase">Discos Vendidos</h3>
                </div>
                <div class="card-body">
                <canvas id="segundo"></canvas>
                </div>
        <!-- /.card-body -->
        </div>
      <!-- /.card -->


      <!-- Default box -->
      <div class="card">
                <div class="card-header">
                <h3 class="card-title text-uppercase">Inventario</h3>
                </div>
                <div class="card-body">
                <canvas id="tercero"></canvas>
                </div>
        <!-- /.card-body -->
        </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php    require_once('templates/Administrador/footer.php')   ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script> 
  <script>
    var ctx = document.getElementById('primero').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'doughnut',

        // The data for our dataset
        data: {
            labels: <?=$nom?>,
            datasets: [{
                label: 'Unidades',
                backgroundColor: ['rgb(83, 102, 6)','rgb(15, 31, 75)','rgb(110, 250, 0)','rgb(110, 250, 0)','rgb(250, 50, 30)','rgb(210, 250, 20)','rgb(100, 20, 60)','rgb(10, 25, 70)','rgb(110, 25, 0)','rgb(110, 250, 0)','rgb(10, 250, 0)','rgb(210, 20, 10)','rgb(1, 200, 20)','rgb(10, 200, 17)'],
                borderColor: 'rgb(255, 99, 132)',
                data: <?=$cant?>
            }]
        },

        // Configuration options go here
        options: {
            scales:{
                yAxes:[{
                    ticks:{
                        min: 0,
                        stepSize: 1
                    }
                }]
            }
        }
    });




    var cta = document.getElementById('segundo').getContext('2d');
    var chart = new Chart(cta, {
        // The type of chart we want to create
        type: 'doughnut',

        // The data for our dataset
        data: {
            labels: <?=$alb?>,
            datasets: [{
                label: 'Unidades',
                backgroundColor: ['rgb(83, 102, 6)','rgb(15, 31, 75)','rgb(110, 250, 0)','rgb(250, 50, 30)','rgb(210, 250, 20)','rgb(100, 20, 60)','rgb(10, 25, 70)','rgb(110, 25, 0)','rgb(110, 250, 0)','rgb(10, 250, 0)','rgb(210, 20, 10)','rgb(1, 200, 20)','rgb(10, 200, 17)', 'rgb(83, 102, 6)','rgb(15, 31, 75)','rgb(110, 250, 0)','rgb(250, 50, 30)', 'rgb(83, 102, 6)','rgb(15, 31, 75)','rgb(110, 250, 0)','rgb(250, 50, 30)', 'rgb(83, 102, 6)','rgb(15, 31, 75)','rgb(110, 250, 0)','rgb(250, 50, 30)', 'rgb(83, 102, 6)','rgb(15, 31, 75)','rgb(110, 250, 0)','rgb(250, 50, 30)', 'rgb(83, 102, 6)','rgb(15, 31, 75)','rgb(110, 250, 0)','rgb(250, 50, 30)', 'rgb(83, 102, 6)','rgb(15, 31, 75)','rgb(110, 250, 0)','rgb(250, 50, 30)'],
                borderColor: 'rgb(255, 99, 132)',
                data: <?=$ven?>
            }]
        },

        // Configuration options go here
        options: {
            scales:{
                yAxes:[{
                    ticks:{
                        min: 0,
                        stepSize: 1
                    }
                }]
            }
        }
    });
  

    var ctb = document.getElementById('tercero').getContext('2d');
    var chart = new Chart(ctb, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: <?=$a?>,
            datasets: [{
                label: 'Unidades',
                backgroundColor: ['rgb(83, 102, 6)','rgb(15, 31, 75)','rgb(110, 250, 0)','rgb(250, 50, 30)','rgb(210, 250, 20)','rgb(100, 20, 60)','rgb(10, 25, 70)','rgb(110, 25, 0)','rgb(110, 250, 0)','rgb(10, 250, 0)','rgb(210, 20, 10)','rgb(1, 200, 20)','rgb(10, 200, 17)','rgb(100, 20, 60)','rgb(10, 25, 70)','rgb(110, 25, 0)','rgb(110, 250, 0)','rgb(10, 250, 0)','rgb(210, 20, 10)','rgb(1, 200, 20)','rgb(10, 200, 17)','rgb(1, 200, 20)','rgb(10, 200, 17)','rgb(1, 200, 20)','rgb(10, 200, 17)','rgb(1, 200, 20)','rgb(10, 200, 17)','rgb(1, 200, 20)','rgb(10, 200, 17)','rgb(1, 200, 20)','rgb(10, 200, 17)','rgb(1, 200, 20)','rgb(10, 200, 17)','rgb(1, 200, 20)','rgb(10, 200, 17)','rgb(1, 200, 20)','rgb(10, 200, 17)','rgb(1, 200, 20)','rgb(10, 200, 17)'],
                borderColor: 'rgb(255, 99, 132)',
                data: <?=$c?>
            }]
        },

        // Configuration options go here
        options: {
            scales:{
                yAxes:[{
                    ticks:{
                        min: 0,
                        stepSize: 1
                    }
                }]
            }
        }
    });
  </script>
  <?php    require_once('templates/Administrador/footer2.php')   ?> 