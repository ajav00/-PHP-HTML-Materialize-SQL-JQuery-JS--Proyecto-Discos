$(document).ready(function() {
    $('#listaSalida').DataTable({
        "ajax": "Ac_Salida.php?agregar_salida=Listar",
        "pageLength":5,
        "lengthMenu":[[5,10,-1],[5,10,"Todas"]],
        
    });
} );