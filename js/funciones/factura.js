$(document).ready(function() {
    $('#listaFactura').DataTable({
        "ajax": "Ac_Factura.php?agregar_factura=Listar",
        "pageLength":5,
        "lengthMenu":[[5,10,-1],[5,10,"Todas"]],
        
    });
} );