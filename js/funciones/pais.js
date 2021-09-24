
        function ajax(e) {
            e.preventDefault();
            let xml = new XMLHttpRequest();
            switch (this.id) {
                case 'frm_pais':
                    proceso('frm_pais','Añadir',xml);
                    MostrarAlerta();
                    break;
                case 'frm_mpais':
                    proceso('frm_mpais','Modificar',xml);
                    $("#modPais").modal('toggle');
                    MostrarAlerta();
                    break;
                case 'frm_epais':
                    proceso('frm_epais','Eliminar',xml);
                    $("#eliPais").modal('toggle');
                    MostrarAlerta();
                    break;
                default:
                    break;
            }        
        }
        
        
        function proceso(frm,op,xml) {
            xml.onreadystatechange = function () {
                if(this.readyState==4 && this.status==200){
                    let tabla = $('#listaPais').DataTable();
                    tabla.ajax.reload();
                }
                else   
                {
                    console.log("Error: "+this.status);
                }
            }
            xml.open("post","Ac_Pais.php");
            let formulario = document.getElementById(frm);
            let datos = new FormData(formulario);
            datos.append('agregar_pais', op);
            xml.send(datos);        
        }
        
        
        let Añadir = document.getElementById("frm_pais");
        Añadir.onsubmit = ajax;
        let Mod = document.getElementById("frm_mpais");
        Mod.onsubmit = ajax;
        let Elim = document.getElementById("frm_epais");
        Elim.onsubmit = ajax;
        
        function MostrarAlerta(){
            Swal.fire(
                'Realizado',
                'Tu petición ha sido existosa!!!',
                'success'
              )
        }
        
        
        $(document).ready(function() {
            $('#listaPais').DataTable({
                "ajax": "Ac_Pais.php?agregar_pais=Listar",
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
            $('#modPais').on('show.bs.modal', function (e) {
                let btn = $(e.relatedTarget);
                
                let id  = btn.data('id');
                $('#mod_pais').val(id);
                console.log(id);
                let precio = btn.data('nombre');
                $('#m_pais').val(precio);
                console.log(precio);

                
            })
            
            //formulario de eliminacion
            $('#eliPais').on('show.bs.modal', function (e) {
        
                let btn = $(e.relatedTarget);
                let di = btn.data('id');
                
                console.log(di);
                
                $('#eli_pais').val(di);
            })
        
        
        } );
        