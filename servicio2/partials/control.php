<?php
$iusuario = $_POST['dato1'];
$inombre = $_POST['dato2'];
$iapellidos = $_POST['dato3'];
$istatus = $_POST['dato4'];
$password = $_POST['dato5'];
$itipo = $_POST['dato6'];

/*$arreglo = array(
    'resultado'=>'correcto',
    'usuario'=>$iusuario,
    'nombre'=>$inombre ,
    'apellidos'=>$iapellidos,
    'estatus'=>$istatus,
    'password'=>$password,
    'tipo'=> $itipo
);*/

//consulta
include 'conexion.php';

try {
    //csonsulta
    $consulta = $conexion -> prepare("SELECT id, usuario, nombre FROM usuarios WHERE usuario ='$iusuario'");
    $consulta->execute();
    //aqui se ordena la informacion que se obtiene//
    $consulta->bind_result($db_id,$db_usuario,$db_nombre);
    $consulta->fetch();
    if($db_usuario){
        $arreglo = array(
            'respuesta'=>'usuario existente'
        );

    }
    else{
        
    

        $control = $conexion -> prepare ("INSERT INTO usuarios(usuario, nombre, apellidos, id_estatus, password, id_tipo) VALUES ('$iusuario', '$inombre', '$iapellidos', '$istatus', md5('$password'),'$itipo')");
        $control -> execute();
        if($control -> affected_rows){
            $arreglo = array(
                'respuesta' => 'correcto',
                'id_insertado' => $control->insert_id


            );

        }



    }/*
    $control->close();
    $conexion->close();
    $consulta->close();
    */
} catch (Exception $e) {
    $arreglo = array(
        'error'->$e->getMessage()
    );
}
die(json_encode($arreglo));




?>