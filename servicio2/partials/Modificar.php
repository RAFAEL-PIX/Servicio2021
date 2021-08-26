<?php
$idu = $_POST['dato1'];
$usuar = $_POST['dato2'];
$nombr = $_POST['dato3'];
$apelli = $_POST['dato4'];
$estado = $_POST['dato5'];
$tipo = $_POST['dato6'];
/*$arreglo = array(
    'resultado'=>'correcto',
    'id'=>$idu,
    'usuario'=>$usuar,
    'nombre'=>$nombr ,
    'apellidos'=>$apelli,
    'estatus'=>$estado,
    'tipo'=> $tipo
);*/
include 'conexion.php';
try {
    $consulta = $conexion->prepare("SELECT id,usuario,nombre FROM usuarios WHERE usuario ='$usuar'");
    $consulta->execute();
    //aqui se ordena la informacion que se obtiene//
    $consulta->bind_result($db_id,$db_usuario,$db_nombre);
    $consulta->fetch();

/*    $arreglo = array(
        'resultado'=>$db_usuario
    );
*/

   if($db_usuario){
        if($db_id == $idu){
            include 'conexion.php';
            $modif = $conexion->prepare("UPDATE usuarios SET usuario ='$usuar', nombre= '$nombr', apellidos= '$apelli', id_estatus = '$estado', id_tipo = '$tipo' WHERE id = '$idu'");
            $modif -> execute();
            $arreglo = array(
                'respuesta'=>'correcto'
            );

        }else{
            $arreglo = array(
                'respuesta'=>'usuario existente'
            );

        }

    }else{
        $mod = $conexion->prepare("UPDATE usuarios SET usuario ='$usuar', nombre= '$nombr', apellidos= '$apelli', id_estatus = '$estado', id_tipo = '$tipo' WHERE id = '$idu'");
        $mod -> execute();
        $arreglo = array(
            'respuesta'=>'correcto'
        );
        
    }




} catch (\Throwable $th) {
    //throw $th;
}
die(json_encode($arreglo));

?>