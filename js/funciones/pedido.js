$(document).ready(function() {
    $('#listaPedidos').DataTable({
        "ajax": "Ac_Pedidos.php?agregar_pedido=Listar",
        "pageLength":5,
        "lengthMenu":[[5,10,-1],[5,10,"Todas"]],
        
    });
} );