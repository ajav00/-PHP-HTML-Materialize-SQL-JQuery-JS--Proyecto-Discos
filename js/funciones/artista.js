function ajax(e) {
    e.preventDefault();
    let xml = new XMLHttpRequest();
    switch (this.id) {
        case 'frm_artista':
            proceso('frm_artista','Añadir',xml);
            MostrarAlerta();
            break;
        case 'frm_martista':
            proceso('frm_martista','Modificar',xml);
            $("#modArtista").modal('toggle');
            MostrarAlerta();
            break;
        case 'frm_eartista':
            proceso('frm_eartista','Eliminar',xml);
            $("#eliArtista").modal('toggle');
            MostrarAlerta();
            break;
        default:
            break;
    }        
}



function proceso(frm,op,xml) {
    xml.onreadystatechange = function () {
        if(this.readyState==4 && this.status==200){
            let tabla = $('#listaArtista').DataTable();
            tabla.ajax.reload();
        }
        else   
        {
            console.log("Error: "+this.status);
        }
    }
    xml.open("post","Ac_Artista.php");
    let formulario = document.getElementById(frm);
    let datos = new FormData(formulario);
    datos.append('agregar_artista', op);
    xml.send(datos);        
}


let Añadir = document.getElementById("frm_artista");
Añadir.onsubmit = ajax;
let Mod = document.getElementById("frm_martista");
Mod.onsubmit = ajax;
let Elim = document.getElementById("frm_eartista");
Elim.onsubmit = ajax;


function MostrarAlerta(){
    Swal.fire(
        'Realizado',
        'Tu petición ha sido existosa!!!',
        'success'
      )
}


$(document).ready(function() {
    $('#listaArtista').DataTable({
        "ajax": "Ac_Artista.php?agregar_artista=Listar",
        "pageLength":5,
        "lengthMenu":[[5,10,-1],[5,10,"Todas"]],
        "language": {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total entradas)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": 
            {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }   
        }
    });

    //formulario de modificacion
    $('#modArtista').on('show.bs.modal', function (e) {
        let btn = $(e.relatedTarget);
        console.log(btn);
        let id  = btn.data('id');
        $('#mod_art').val(id);
        
        let precio = btn.data('nombre');
        $('#m_nombre_artista').val(precio);
        
    })
    
    //formulario de eliminacion
    $('#eliArtista').on('show.bs.modal', function (e) {

        let btn = $(e.relatedTarget);
        let di = btn.data('id');
        console.log(btn);
        console.log(di);
        
        $('#eli_art').val(di);
    })


} );





















