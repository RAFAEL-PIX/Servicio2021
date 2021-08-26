console.log("conectado a javascritp");
eventListeners();
function eventListeners(){
    document.querySelector("#formula").addEventListener("submit",guardar);
}
function guardar(a){
    a.preventDefault();
    //linea de agrgar datos al texto//
    var usuario = document.querySelector("#iusuario").value,
        nombre = document.querySelector("#inombre").value,
        apellidos = document.querySelector("#iapellidos").value,
        estatus = document.querySelector("#istatus").value,
        password = document.querySelector("#password").value,
        tipo = document.querySelector("#itipo").value;
        if (usuario==='' || nombre===''  || apellidos===''  || estatus==='' || password==='' || tipo===''){
            Swal.fire(
                'alerta',
                'campos vacios',
                'error'
            )
        }else{


            var form = new FormData();
        //agregamos los datos que se envian//
        form.append('dato1', usuario);
        form.append('dato2', nombre);
        form.append('dato3', apellidos);
        form.append('dato4', estatus);
        form.append('dato5', password);
        form.append('dato6', tipo);
        console.log(form);

        console.log(form.get('dato1','dato2','dato3','dato4','dato5','dato6'));
        var formu = new XMLHttpRequest();
        formu.open('POST','partials/control.php',true);
        formu.onload = function(){
            if(this.status === 200){

                console.log(formu.responseText);
                var respuesta = JSON.parse(formu.responseText);
                console.log(respuesta);
            //alerta que el proceso fue existoso//
                if(respuesta['respuesta'] === 'correcto'){
                    Swal.fire(
                        'Exito',
                        'Usuario Registrado',
                        'success'
                    );
                    setTimeout(function(){
                        location.reload();
                
                    });

                }else{
                    Swal.fire(
                        'Error',
                        'Usuario Existente',
                        'error'
                    )
                    

                }

                
            }
        }
        formu.send(form);

        }
 
}

