console.log("conectado a javascritp");
eventListeners();
function eventListeners(){
    document.querySelector("#formulario").addEventListener("submit",ver);
}
function ver(e){
    e.preventDefault();
   
    var user = document.querySelector("#user").value,
        password = document.querySelector("#password").value;

    if (user==='' || password==='') {
        Swal.fire(
            'alerta',
            'campos vacios',
            'error'
        )

    }else{

       

        //creamos el objeto que se va a enviar//
        var login = new FormData();
        //agregamos los datos que se envian//
        login.append('dato1', user);
        login.append('dato2', password);
       
        //console.log(login);

        //console.log(login.get('dato1'));
        //se crea el objeto de conexion//
        var unir = new XMLHttpRequest();
        //vamos a abrir la conexion//
        unir.open('POST','partials/login.php',true);
        //retorno de datos//

        unir.onload = function(){
            if(this.status===200){
         //       console.log(unir.responseText);
                var respuesta = JSON.parse(unir.responseText);
                //console.log(respuesta);
                if(respuesta['resultado']==='correcto'){
                    Swal.fire({
                        icon: 'success',
                        title: 'Bienvenido  '+respuesta['nombre'],
                        showConfirmButton: false,
                        timer: 2000
                    });
                setTimeout(function(){
                    window.location.href='menu.php';
                });

                }else{
                    Swal.fire(
                        'usuario y password incorrectos',
                        'revisa tus datos',
                        'error'
                    );    


                }   

            }else{
                Swal.fire(
                    'usuario y password incorrectos',
                    'revisa tus datos',
                    'error'
                );
            }

        }
        
        //enviamos la peticion//

        unir.send(login);

      



    
        
    }
    



}