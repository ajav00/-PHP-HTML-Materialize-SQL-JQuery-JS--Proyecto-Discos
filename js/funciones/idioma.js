
function ajax(e) {
    e.preventDefault();
    let xml = new XMLHttpRequest();
    switch (this.id) {
        case 'frm_idioma':
            proceso('frm_idioma','Añadir',xml);
            MostrarAlerta();
            break;
        case 'frm_midioma':
            proceso('frm_midioma','Modificar',xml);
            $("#modIdioma").modal('toggle');
            MostrarAlerta();
            break;
        case 'frm_eidioma':
            proceso('frm_eidioma','Eliminar',xml);
            
            $("#eliIdioma").modal('toggle');
            MostrarAlerta();
            break;
        default:
            break;
    }        
}
    
    
    function proceso(frm,op,xml) {
        xml.onreadystatechange = function () {
            if(this.readyState==4 && this.status==200){
                let tabla = $('#listaIdioma').DataTable();
                tabla.ajax.reload();
            }
            else   
            {
                console.log("Error: "+this.status);
            }
        }
        xml.open("post","Ac_Idioma.php");
        let formulario = document.getElementById(frm);
        let datos = new FormData(formulario);
        datos.append('agregar_idioma', op);
        xml.send(datos);        
    }
    
    
    let Añadir = document.getElementById("frm_idioma");
    Añadir.onsubmit = ajax;
    let Mod = document.getElementById("frm_midioma");
    Mod.onsubmit = ajax;
    let Elim = document.getElementById("frm_eidioma");
    Elim.onsubmit = ajax;
    
    
    
    function MostrarAlerta(){
        Swal.fire(
            'Realizado',
            'Tu petición ha sido existosa!!!',
            'success'
          )
    }
    
    $(document).ready(function() {
        $('#listaIdioma').DataTable({
            "ajax": "Ac_Idioma.php?agregar_idioma=Listar",
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
        $('#modIdioma').on('show.bs.modal', function (e) {
            let btn = $(e.relatedTarget);
            
            let id  = btn.data('id');
            $('#mod_idi').val(id);
            console.log(id);
            let precio = btn.data('nombre');
            $('#m_idioma').val(precio);
            console.log(precio);

            
        })
        
        //formulario de eliminacion
        $('#eliIdioma').on('show.bs.modal', function (e) {
    
            let btn = $(e.relatedTarget);
            let di = btn.data('id');
            console.log(di);
            
            $('#eli_idi').val(di);
        })
    
    
    } );