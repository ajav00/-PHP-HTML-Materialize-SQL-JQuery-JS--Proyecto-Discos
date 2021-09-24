        function ajax(e) {
            e.preventDefault();
            let xml = new XMLHttpRequest();
            switch (this.id) {
                case 'frm_discog':
                    proceso('frm_discog','Añadir',xml);
                    MostrarAlerta();
                    break;
                case 'frm_mdiscog':
                    proceso('frm_mdiscog','Modificar',xml);
                    $("#modDiscog").modal('toggle');
                    MostrarAlerta();
                    break;
                case 'frm_ediscog':
                    proceso('frm_ediscog','Eliminar',xml);
                    $("#eliDiscog").modal('toggle');
                    MostrarAlerta();
                    break;
                default:
                    break;
            }        
        }
        

        
        function proceso(frm,op,xml) {
            xml.onreadystatechange = function () {
                if(this.readyState==4 && this.status==200){
                    let tabla = $('#listaDiscog').DataTable();
                    tabla.ajax.reload();
                }
                else   
                {
                    console.log("Error: "+this.status);
                }
            }
            xml.open("post","Ac_Discografica.php");
            let formulario = document.getElementById(frm);
            let datos = new FormData(formulario);
            datos.append('agregar_discog', op);
            xml.send(datos);        
        }
        
        
        let Añadir = document.getElementById("frm_discog");
        Añadir.onsubmit = ajax;
        let Mod = document.getElementById("frm_mdiscog");
        Mod.onsubmit = ajax;
        let Elim = document.getElementById("frm_ediscog");
        Elim.onsubmit = ajax;
        
        
        function MostrarAlerta(){
            Swal.fire(
                'Realizado',
                'Tu petición ha sido existosa!!!',
                'success'
              )
        }
        
        $(document).ready(function() {
            $('#listaDiscog').DataTable({
                "ajax": "Ac_Discografica.php?agregar_discog=Listar",
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
            $('#modDiscog').on('show.bs.modal', function (e) {
                let btn = $(e.relatedTarget);
                
                let id  = btn.data('id');
                $('#mod_discog').val(id);
                console.log(id);
                let precio = btn.data('nombre');
                $('#m_discog').val(precio);
                console.log(precio);

                
            })
            
            //formulario de eliminacion
            $('#eliDiscog').on('show.bs.modal', function (e) {
        
                let btn = $(e.relatedTarget);
                let di = btn.data('id');
                
                console.log(di);
                
                $('#eli_discog').val(di);
            })
        
        
        } );
