<?php    require_once('templates/headerCompra.php');   
        include_once("Ac_Carrito.php");
?>
    <div class="right subtitulo">
            <h4 class="white-text">Compra Realizada</h3>
    </div>
</header><!--header--> 


<div class="container2 center">
    <div class="section z-depth-5">
            <div class="row">
                <h1> Compra Realizada Con Exito</h1><br>
                <h4>Su compra se realizo con exito, elija una de las siguientes opciones: </h4><br>
                
                <p>Muchas Gracias Por Su Compra</p>
                <p>Que tenga un excelente dia!!!!!</p><br><br>
                <div class="col s4">
                    <a class="waves-effect waves-light btn-large up center brown darken-3" href="Ac_Carrito.php?btnAccion=Vaciar">Volver a la pagina web<i class="material-icons left">add_shopping_cart</i></a>
                </div>
                <div class="col s4"></div>
                <div class="col s4">
                    <a class="waves-effect waves-light btn-large up center brown darken-3" href="Reporte.php">Imprimir Reporte<i class="material-icons left">add_shopping_cart</i></a>
                </div>
            </div>
    </div>

</div>








<?php    require_once('templates/footer.php')   ?>
<?php    require_once('templates/footer2.php')   ?>



