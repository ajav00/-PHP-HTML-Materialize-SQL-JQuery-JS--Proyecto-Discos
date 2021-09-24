let frmRegistro = document.getElementById("frm_registro");
let con1 = document.getElementById("contraseña_cli");
let con2 = document.getElementById("contraseña_cli2");
let msg = document.getElementById("mensaje");
let res = document.getElementById("respuesta");
    
    frmRegistro.onsubmit = function (e) {
        e.preventDefault();
        distintos(con1,con2,msg);
        validar(e, msg, res, frmRegistro, "Añadir");
        
    };
      


    function distintos(con1,con2, msg) {
        if (con1.value != con2.value) {
        msg.innerHTML =   `<div class="show red-text">
                            <i class="material-icons right close">close</i>
                            <strong> Las contraseñas no son iguales </strong> 
                            </div>`;          
        }   

    }

    function validar(e, m, res, frmRegUsr, accion) 
    {
        e.preventDefault();
        if (con1.value != con2.value) {
            m.innerHTML =   `<div class="show red-text">
                                <i class="material-icons right close">close</i>
                                <strong> Las contraseñas no son iguales </strong> 
                                </div>`;          
        }
        else if (res.children.length==0) {
            m.innerHTML =   `<div class="show" role="alert">
                            <i class="material-icons right">close</i>
                            <strong> Verifique si el email esta disponible</strong> 
                            </div>`;
        } 
        else 
        {
            if (res.children[0].textContent == 'Ya existe') {
            m.innerHTML =   `<div class="show" role="alert">
                            <i class="material-icons right">close</i>
                            <strong> El email no esta disponible</strong> 
                            </div>`;
            } 
            else 
            {
            let x = new XMLHttpRequest();
            x.onreadystatechange=function () 
                {
                    if (this.readyState==4 && this.status == 200) {
                        m.innerHTML = this.responseText;
                        console.log(this.resposeText);
                        //let dt = $('#listaCliente').DataTable();
                        //dt.ajax.reload(); 
                    }
                }
            x.open("post","Ac_Cliente.php");
            let fd = new FormData(frmRegUsr);
            fd.append('agregar_cliente',accion);              
            x.send(fd);
            MostrarAlerta();
            }
        }
        
    }

function MostrarAlerta(){
    Swal.fire(
        'Realizado',
        'Creaste Una Cuenta!!! Inicia Sesión',
        'success'
      )
}

    let Ver = document.getElementById("Verificar");
    let email = document.getElementById("usuario_cli");
        Ver.onclick = function (e) {validarEmail(e,email,res)}
        function validarEmail(e,email,res) {
            e.preventDefault();
            let x = new XMLHttpRequest();
            x.onreadystatechange=function () {
                if (this.readyState==4 && this.status == 200) {
                    
                    res.innerHTML = this.responseText;
                    console.log(this.responseText);
                }
            }
            console.log(email);
            x.open("post","Ac_Cliente.php");
            
            
            let fd = new FormData();
            fd.append('agregar_cliente','Verificar');
            fd.append('usuario_cli', email.value);
            x.send(fd);
}




