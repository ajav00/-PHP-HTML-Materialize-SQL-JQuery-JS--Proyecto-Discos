
        function ajax(e) {
            e.preventDefault();
            let xml = new XMLHttpRequest();
            switch (this.id) {
                case 'frm_minventario':
                    proceso('frm_minventario','Modificar',xml)
                    $("#modInv").modal('toggle');
                    MostrarAlerta();
                break; 
                default:
                    break;
            }    
        
        
        
            
        }
        
        function proceso(frm,op,xml) {
            xml.onreadystatechange = function () {
                if(this.readyState==4 && this.status==200){
                    let dt = $('#listaInv').DataTable();
                    dt.ajax.reload();        
                }
                else   
                {
                    console.log("Error: "+this.status);
                }
            }
            xml.open("post","Ac_Inventario.php");
            let formulario = document.getElementById(frm);
            let datos = new FormData(formulario);
            datos.append('agregar_inventario', op);
            xml.send(datos);            
        }
        
        
        
        let frmMod = document.getElementById("frm_minventario");
        frmMod.onsubmit = ajax;
        
        
        
        function MostrarAlerta(){
            Swal.fire(
                'Realizado',
                'Tu petición ha sido existosa!!!',
                'success'
              )
        }
        
        
        $(document).ready(function() {
            $('#listaInv').DataTable({
                "ajax": "Ac_Inventario.php?agregar_inventario=Listar",                
                "pageLength":5,
                "lengthMenu":[[5,10,-1],[5,10,"Todo"]],
                
            });
            //formulario de modificacion
            $('#modInv').on('show.bs.modal', function (e) {
                let btn = $(e.relatedTarget);
                console.log(btn);
                let id  = btn.data('id');
                console.log(id);
                $('#mod_inv').val(id);
                let precio  = btn.data('precio');
                $('#m_precio').val(precio);
                console.log(precio);
            })
            
        } );

