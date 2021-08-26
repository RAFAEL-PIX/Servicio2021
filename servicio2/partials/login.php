<?php
$use = $_POST['dato1'];
$pass = $_POST['dato2'];

include 'conexion.php';
//se realiza la consulta a la base de datos//
try {
    $consulta = $conexion->prepare("SELECT id,usuario,nombre,apellidos,id_estatus,id_tipo FROM usuarios WHERE usuario ='$use' AND password = md5('$pass')");
    $consulta->execute();
    //aqui se ordena la informacion que se obtiene//
    $consulta->bind_result($db_id,$db_usuario,$db_nombre,$db_apellidos,$db_estatus,$db_tipo);
    $consulta->fetch();
    if($db_usuario){
        $arreglo = array(
            'resultado'=>'correcto',
            'usuario' => $db_usuario,
            'nombre'=> $db_nombre,
            'tipo' => $db_tipo,
            'estatus' => $db_estatus
        );
        //creamos aqui las variable de sesion
        session_start();
        $_SESSION['usuarioS'] = $db_usuario;
        $_SESSION['idS'] = $db_id;
        $_SESSION['estatusS'] = $db_estatus;
        $_SESSION['tipoS']= $db_tipo;
        $_SESSION['nombreS']=$db_nombre;
        $_SESSION['apellido']=$db_apellidos;

    }else{
        $arreglo = array(
            'resultado'=>'sin resultado'
        );

    }
    //cerrar conexiones//
    $consulta->close();
    $conexion->close();
} catch (Exception $e) {
    $arreglo = array(
        'error'=> $e->getMessage()
    );

}

die(json_encode($arreglo));

?>
