console.log("conectado a php");
function insertar_datos(datos) {
  var d = datos.split('||') 
  document.querySelector('#id_usuario').value =d[0];
  document.querySelector('#nombre_usuario').value =d[1];
  document.querySelector('#nombre').value =d[2];
  document.querySelector('#apellidos').value =d[3];
  document.querySelector('#estado').value =d[4];
  document.querySelector('#tipo').value =d[5];

} 

function actualizar(){
    //insertar datos en un texto//
    var id = document.querySelector("#id_usuario").value,
        usuario = document.querySelector("#nombre_usuario").value,
        nombre = document.querySelector("#nombre").value,
        apellido = document.querySelector("#apellidos").value,
        estado = document.querySelector("#estado").value,
        tipo = document.querySelector("#tipo").value;

    /*console.log(id);
    console.log(usuario);
    console.log(nombre);
    console.log(apellido);
    console.log(estado);
    console.log(tipo);
    console.log("actualizando_datos");*/

//insertar los datos que se envian en ajax//
    var insert = new FormData();
    insert.append('dato1',id);
    insert.append('dato2',usuario);
    insert.append('dato3',nombre);
    insert.append('dato4',apellido);
    insert.append('dato5',estado);
    insert.append('dato6',tipo);

    var modif = new XMLHttpRequest();
    modif.open('POST','partials/Modificar.php',true);
    modif.onload = function(){
        if(this.status === 200){
            
            var respu = JSON.parse(modif.responseText);
            console.log(respu);

            if(respu['respuesta'] === "correcto"){
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
                    'Usuario Existente',
                    'revisa tus datos',
                    'error'
                );

            }
            

        }else{
            console.log("error");

        }
        
    }
    modif.send(insert);




    
}

function insertar_datos_eliminar(dato) {
    var d = dato.split('||') 
    document.querySelector('#id').value =d[0];
    document.querySelector('#usuario').value =d[1];
    document.querySelector('#nombres').value =d[2];
    document.querySelector('#apellido').value =d[3];
    document.querySelector('#estado').value =d[4];
    document.querySelector('#tipo').value =d[5];


}
function eliminar(){
        //insertar datos en un texto//
        var id = document.querySelector("#id").value,
        usuario = document.querySelector("#usuario").value,
        nombre = document.querySelector("#nombres").value,
        apellido = document.querySelector("#apellido").value,
        estado = document.querySelector("#estado").value,
        tipo = document.querySelector("#tipo").value;

    /*console.log(id);
    console.log(usuario);
    console.log(nombre);
    console.log(apellido);
    console.log(estado);
    console.log(tipo);
    console.log("eliminando datos");*/
    //insertar los datos que se envian en ajax//
    var elimina = new FormData();
    elimina.append('dato1',id);
    elimina.append('dato2',usuario);
    elimina.append('dato3',nombre);
    elimina.append('dato4',apellido);
    elimina.append('dato5',estado);
    elimina.append('dato6',tipo);

    var elim = new XMLHttpRequest();
    elim.open('POST','partials/eliminar.php',true);
    elim.onload = function(){
        if(this.status === 200){
            
            var resp = JSON.parse(elim.responseText);
            console.log(resp);
            if(resp['respuesta']==='correcto'){
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
                    'ha ocurrido un error',
                    'contacta con soporte tecnico',
                    'error'
                );

            }
            

        }else{
            console.log("error");

        }
        
    }
    elim.send(elimina);


}