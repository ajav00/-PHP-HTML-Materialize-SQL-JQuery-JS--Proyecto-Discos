
        function ajax(e) {
            e.preventDefault();
            let xml = new XMLHttpRequest();
            switch (this.id) {
                case 'frm_album':
                    proceso('frm_album','Añadir',xml)
                    MostrarAlerta();
                    break;
                case 'frm_malbum':
                    proceso('frm_malbum','Modificar',xml)
                    $("#modAlbum").modal('toggle');
                    MostrarAlerta();
                break;
                case 'frm_ealbum':
                    proceso('frm_ealbum','Eliminar',xml)
                    $("#eliAlbum").modal('toggle');
                    MostrarAlerta();
                break;
                default:
                    break;
            }    
        
        
        
            
        }
        
        function proceso(frm,op,xml) {
            xml.onreadystatechange = function () {
                if(this.readyState==4 && this.status==200){
                    let dt = $('#listaAlbum').DataTable();
                    dt.ajax.reload();        
                }
                else   
                {
                    console.log("Error: "+this.status);
                }
            }
            xml.open("post","Ac_Album.php");
            let formulario = document.getElementById(frm);
            let datos = new FormData(formulario);
            datos.append('agregar_album', op);
            xml.send(datos);            
        }
        
        
        let frm = document.getElementById("frm_album");
        frm.onsubmit = ajax;
        let frmMod = document.getElementById("frm_malbum");
        frmMod.onsubmit = ajax;
        let frmElim = document.getElementById("frm_ealbum");
        frmElim.onsubmit = ajax;
        
        function MostrarAlerta(){
            Swal.fire(
                'Realizado',
                'Tu petición ha sido existosa!!!',
                'success'
              )
        }
        
        
        
        $(document).ready(function() {
            $('#listaAlbum').DataTable({
                "ajax": "Ac_Album.php?agregar_album=Listar",                
                "pageLength":5,
                "lengthMenu":[[5,10,-1],[5,10,"Todo"]],
                
            });
            //formulario de modificacion
            $('#modAlbum').on('show.bs.modal', function (e) {
                let btn = $(e.relatedTarget);
                console.log(btn);
                let id  = btn.data('id');
                $('#mod_album').val(id);
                let nombre  = btn.data('nombre');
                $('#m_album').val(nombre);
                let artista  = btn.data('artista');
                $('#m_artista').val(artista);
                let discografia  = btn.data('discografica');
                $('#m_disc').val(discografia);
                let genero  = btn.data('genero');
                console.log(genero);
                $('#m_genero').val(genero);
                let idioma  = btn.data('idioma');
                $('#m_idioma').val(idioma);
                let pais  = btn.data('pais');
                $('#m_pais').val(pais);

                let fecha  = btn.data('fecha');
                $('#fecha_malb').val(fecha);

                let duracion  = btn.data('duracion');
                let tiempo = duracion.split(":");
                $('#m_hora').val(tiempo[0]);
                $('#m_minutos').val(tiempo[1]);
                $('#m_segundos').val(tiempo[2]);

                let canciones  = btn.data('canciones');
                $('#mnum_c_al').val(canciones);


                let imagen  = btn.data('imagen');
                $('#img_ant').prop('src',imagen);
                $('#img_anti').val(imagen);
                
            })
            //formulario de eliminacion
            $('#eliAlbum').on('show.bs.modal', function (e) {
                let btn = $(e.relatedTarget);
                let id = btn.data('id');
                $('#eli_album').val(id);
            })
        } );
        
        
        
       
        
        
        function cambiar(e,btnM)
        {
            e.preventDefault();
            let xml = new XMLHttpRequest();
            xml.onreadystatechange = function () {
                if(this.readyState==4 && this.status==200){
                    let dt = $('#listaAlbum').DataTable();
                    dt.ajax.reload();        
                    
                }
                else   
                {
                    console.log("Error: "+this.status);
                }
            }
            xml.open("post","Ac_Album.php");
            let formDatos = new FormData();
            formDatos.append('agregar_album','ModificarStatus');
        
            
            formDatos.append('id',btnM.dataset.id);
            formDatos.append('estado',btnM.dataset.estado);
            
            xml.send(formDatos);
        }


