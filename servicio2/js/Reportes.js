console.log("conectado a javascritp");
eventListeners();
function eventListeners(){
    document.querySelector("#reporte").addEventListener("submit",guardar);
}
function guardar(g){
    g.preventDefault();
    var nombre = document.querySelector("#nombre").value,
        N0_reportes = document.querySelector("#nreportes").value,
        fecha_reporte = document.querySelector("#fecha").value,
        universidad = document.querySelector("#universidad").value,
        carrera = document.querySelector("#carrera").value,
        area_report = document.querySelector("#area_report").value,
        apellido = document.querySelector("#apellidos").value,
        id_usuario = document.querySelector("#idusu").value;
        if(nombre==="" || N0_reportes=="" || fecha_reporte===""|| universidad==="" || carrera==="" || area_report==="" || apellido==="" || id_usuario===""){
            Swal.fire(
                'alerta',
                'campos vacios',
                'error'
            )
        }else{
            var report = new FormData();
        //agregamos los datos que se envian//
        report.append('dato1', nombre);
        report.append('dato2', N0_reportes);
        report.append('dato3', fecha_reporte);
        report.append('dato4', universidad);
        report.append('dato5', carrera);
        report.append('dato6', area_report);
        report.append('dato7', apellido);
        report.append('dato8', id_usuario);

        console.log(report);

        console.log(report.get('dato1','dato2','dato3','dato4','dato5','dato6','dato7','dato8'));
        var GRepot = new XMLHttpRequest();
        GRepot.open('POST','partials/Reporte.php',true);
        GRepot.onload = function(){
            if(this.status === 200){
                console.log(GRepot.responseText);
                var respuesta = JSON.parse(GRepot.responseText);
                console.log(respuesta);
                //alerta que el proceso fue existoso//
                if(respuesta['respuesta'] === 'correcto'){
                    Swal.fire(
                        'Exito',
                        'Reporte Registrado',
                        'success'
                    );
                    setTimeout(function(){
                        location.reload();
                
                    });
                }else{
                    Swal.fire(
                        'Error',
                        'nombre Existente',
                        'error'
                    )
                }

            }
        }
        GRepot.send(report);
        }

}