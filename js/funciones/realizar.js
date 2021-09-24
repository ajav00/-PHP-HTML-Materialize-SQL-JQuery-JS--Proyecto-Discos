let formularioCan = document.getElementById("frm_ped");
        formularioCan.onsubmit = function (e) {
            e.preventDefault();
            let xml = new XMLHttpRequest();
            xml.onreadystatechange = function () {
                if(this.readyState==4 && this.status==200){
                    
                }
                else   
                {
                    console.log("Error: "+this.status);
                }
            }
            xml.open("post","Realizar_Ped.php");
            let formulario = document.getElementById("frm_ped");
            let datos = new FormData(formulario);
            datos.append('Accion','Añadir');
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