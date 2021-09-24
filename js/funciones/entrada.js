let formularioCan = document.getElementById("frm_entrada");
        formularioCan.onsubmit = function (e) {
            e.preventDefault();
            let xml = new XMLHttpRequest();
            xml.onreadystatechange = function () {
                if(this.readyState==4 && this.status==200){
                    let tabla = $('#listaEntrada').DataTable();
                    tabla.ajax.reload();
                }
                else   
                {
                    console.log("Error: "+this.status);
                }
            }
            xml.open("post","Ac_Entrada.php");
            let formulario = document.getElementById("frm_entrada");
            let datos = new FormData(formulario);
            datos.append('agregar_entrada','Añadir');
            xml.send(datos);
            MostrarAlerta();
        }

        function MostrarAlerta(){
            Swal.fire(
                'Realizado',
                'Tu petición ha sido existosa!!!',
                'success'
              )
        }
        $(document).ready(function() {
            $('#listaEntrada').DataTable({
                "ajax": "Ac_Entrada.php?agregar_entrada=Listar",
                "pageLength":5,
                "lengthMenu":[[5,10,-1],[5,10,"Todas"]],
                
            });
        } );
