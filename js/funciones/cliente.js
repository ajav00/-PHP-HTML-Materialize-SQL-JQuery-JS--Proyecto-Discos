
        function ajax(e) {
            e.preventDefault();
            let xml = new XMLHttpRequest();
            switch (this.id) {
                case 'frm_mregistro':
                    proceso('frm_mregistro','Modificar',xml)
                    $("#modInv").modal('toggle');
                    //MostrarAlerta();
                break; 
                default:
                    break;
            }    
        
        
        
            
        }
        
        function proceso(frm,op,xml) {
            xml.onreadystatechange = function () {
                if(this.readyState==4 && this.status==200){
                    let dt = $('#listaCliente').DataTable();
                    dt.ajax.reload();        
                }
                else   
                {
                    console.log("Error: "+this.status);
                }
            }
            xml.open("post","Ac_Cliente.php");
            let formulario = document.getElementById(frm);
            let datos = new FormData(formulario);
            datos.append('agregar_cliente', op);
            xml.send(datos);            
        }
        
        
        
        let frmMod = document.getElementById("frm_mregistro");
        frmMod.onsubmit = ajax;
        
        
        
        
        
        
        $(document).ready(function() {
            $('#listaCliente').DataTable({
                "ajax": "Ac_Cliente.php?agregar_cliente=Listar",                
                "pageLength":5,
                "lengthMenu":[[5,10,-1],[5,10,"Todo"]],
                
            });
            /*//formulario de modificacion
            $('#modInv').on('show.bs.modal', function (e) {
                let btn = $(e.relatedTarget);
                console.log(btn);
                let id  = btn.data('id');
                console.log(id);
                $('#mod_inv').val(id);
                let precio  = btn.data('precio');
                $('#m_precio').val(precio);
                console.log(precio);
            })*/
            
        } );


