function ajax(e) {
    e.preventDefault();
    let xml = new XMLHttpRequest();
    switch (this.id) {
        case 'frm_cancion':
            proceso('frm_cancion','Añadir',xml);
            MostrarAlerta();
            break;
        case 'frm_mcancion':
            proceso('frm_mcancion','Modificar',xml);
            $("#modCancion").modal('toggle');
            MostrarAlerta();
            break;
        case 'frm_ecancion':
            proceso('frm_ecancion','Eliminar',xml);
            $("#eliCancion").modal('toggle');
            //alert("Aqui");
            MostrarAlerta();
            break;
        default:
            break;
    }        
}


function proceso(frm,op,xml) {
    xml.onreadystatechange = function () {
        if(this.readyState==4 && this.status==200){
            let tabla = $('#listaCanciones').DataTable();
            tabla.ajax.reload();
        }
        else   
        {
            console.log("Error: "+this.status);
        }
    }
    xml.open("post","Ac_Cancion.php");
    let formulario = document.getElementById(frm);
    let datos = new FormData(formulario);
    datos.append('agregar_cancion', op);
    xml.send(datos);        
}


let Añadir = document.getElementById("frm_cancion");
Añadir.onsubmit = ajax;
let Mod = document.getElementById("frm_mcancion");
Mod.onsubmit = ajax;
let Elim = document.getElementById("frm_ecancion");
Elim.onsubmit = ajax;


function MostrarAlerta(){
    Swal.fire(
        'Realizado',
        'Tu petición ha sido existosa!!!',
        'success'
      )
}

$(document).ready(function() {
    $('#listaCanciones').DataTable({
        "ajax": "Ac_Cancion.php?agregar_cancion=Listar",
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
    $('#modCancion').on('show.bs.modal', function (e) {
        let btn = $(e.relatedTarget);
        console.log(btn);
        let id  = btn.data('id');
        $('#mod_can').val(id);
        let artista = btn.data('artista');
        $('#m_artista').val(artista);
        let album = btn.data('album');
        $('#m_album').val(album);
        let nombre = btn.data('nombre');
        $('#nombre_mcan').val(nombre);
        let track = btn.data('track');
        $('#num_mtrack').val(track);
        
    })
    
    //formulario de eliminacion
    $('#eliCancion').on('show.bs.modal', function (e) {

        let btn = $(e.relatedTarget);
        let di = btn.data('id');
        console.log(btn);
        console.log(di);
        $('#eli_can').val(di);
    })


} );




