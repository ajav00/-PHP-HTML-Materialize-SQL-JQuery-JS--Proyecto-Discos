<?php    require_once('templates/header.php');   
            include_once("Ac_Carrito.php");
?>
    <div class="right subtitulo">
            <h4 class="white-text">Tu Carrito</h3>
    </div>
</header><!--header--> 

<div class="container2">
    <?php    if(!empty($_SESSION['CARRITO'])){   ?>
    <table id="Lista" style = "overflow-x: auto;">
        <tbody>
            <tr>
                <th class ="center">Titulo del Album</th>
                <th class ="center">Cantidad</th>
                <th class ="center">Precio</th>
                <th class ="center">Total</th>
                <th class ="center">Accion</th>
            </tr>
            <?php $total = 0 ?>
            <?php foreach($_SESSION['CARRITO'] as $indice => $producto){ ?>
            <tr>
                <td class ="center"><?php echo $producto['Nombre'] ?></td>
                <td class ="center"><?php echo $producto['Cantidad'] ?></td>
                <td class ="center"><?php echo $producto['Precio'] ?></td>
                <td class ="center"><?php echo number_format($producto['Cantidad']*$producto['Precio'], 2) ?></td>
                <td class ="center">
                    <form action="Ac_Carrito.php" method="post" id="eliCarrito<?php echo $producto['Id']?>">
                        <input type="hidden" name="id" id="id" value="<?php echo $producto['Id']?>">
                        <button class="btn waves-effect btn-small up center waves-light brown darken-3" type="submit" name="btnAccion" value="Eliminar">Eliminar
                            <i class="material-icons left">delete</i>
                        </button>
                    </form>
                </td>
            </tr>
            <?php $total = $total + ($producto['Cantidad']*$producto['Precio']); ?>
            <?php } ?>
            <tr>
                <td colspan="3" class="right"><h3>Total</h3></td>
                <td><h4><?php echo number_format($total,2);?> Bs.</h4></td>
            </tr>
            <tr>
                <td colspan="2" class="left">
                    <a class="waves-effect waves-light btn-large up center brown darken-3" href="Discos.php">Seguir Comprando<i class="material-icons left">add_shopping_cart</i></a>
                </td>
                <td colspan="3" class=""></td>
                <td  class="right">
                    <a class="waves-effect waves-light btn-large up center brown darken-3" href="Pagar.php?btn=Pagar">Confirmar la compra<i class="material-icons left">add_shopping_cart</i></a>
                </td>
            </tr>
        </tbody>
    </table>
    <?php }else{ ?>
        <div>
            <p class="yellow">No hay productos en el carrito</p>
        </div>
    <?php } ?>
</div>







<?php    require_once('templates/footer.php')   ?>
<?php    require_once('templates/footer2.php')   ?>

