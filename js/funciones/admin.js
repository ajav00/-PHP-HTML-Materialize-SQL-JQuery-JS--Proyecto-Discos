function ajax(e) {
    e.preventDefault();
    let xml = new XMLHttpRequest();
    switch (this.id) {
        case 'frm_admin':
            proceso('frm_admin','Añadir',xml);
            MostrarAlerta();
            break;
        case 'frm_madmin':
            proceso('frm_madmin','Modificar',xml);
            $("#modAdmin").modal('toggle');
            MostrarAlerta();
            break;
        case 'frm_eadmin':
            proceso('frm_eadmin','Eliminar',xml);
            $("#eliAdmin").modal('toggle');
            MostrarAlerta();
            break;
        default:
            break;
    }        
}


function proceso(frm,op,xml) {
    xml.onreadystatechange = function () {
        if(this.readyState==4 && this.status==200){
            let tabla = $('#listaAdmin').DataTable();
            tabla.ajax.reload();
        }
        else   
        {
            console.log("Error: "+this.status);
        }
    }
    xml.open("post","Ac_Admi.php");
    let formulario = document.getElementById(frm);
    let datos = new FormData(formulario);
    datos.append('agregar_admi', op);
    xml.send(datos);        
}


let Añadir = document.getElementById("frm_admin");
Añadir.onsubmit = ajax;
let Mod = document.getElementById("frm_madmin");
Mod.onsubmit = ajax;
let Elim = document.getElementById("frm_eadmin");
Elim.onsubmit = ajax;


function MostrarAlerta(){
    Swal.fire(
        'Realizado',
        'Tu petición ha sido existosa!!!',
        'success'
      )
}

$(document).ready(function() {
    $('#listaAdmin').DataTable({
        "ajax": "Ac_Admi.php?agregar_admi=Listar",
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
    $('#modAdmi').on('show.bs.modal', function (e) {
        let btn = $(e.relatedTarget);
        console.log(btn);
        let id  = btn.data('id');
        $('#mod_admi').val(id);
        
        let nombre = btn.data('nombre');
        $('#nombre_madmin').val(nombre);

        let paterno = btn.data('paterno');
        $('#apellido1_madmi').val(paterno);


        let materno = btn.data('materno');
        $('#apellido2_madmi').val(materno);



        let descripcion = btn.data('descripcion');
        $('#descripcion_madmin').val(descripcion);



        let email = btn.data('email');
        $('#email_madmin').val(email);

        let user = btn.data('user');
        $('#usuario_madmin').val(user);

        
    })
    
    //formulario de eliminacion
    $('#eliAdmi').on('show.bs.modal', function (e) {

        let btn = $(e.relatedTarget);
        let di = btn.data('id');
        console.log(btn);
        console.log(di);
        
        $('#eli_admi').val(di);
    })


} );




