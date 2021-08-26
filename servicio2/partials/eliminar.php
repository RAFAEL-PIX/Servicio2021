<?php
$ids = $_POST['dato1'];
$usua = $_POST['dato2'];
$nomb = $_POST['dato3'];
$apell = $_POST['dato4'];
$estad = $_POST['dato5'];
$tipo = $_POST['dato6'];
/*$arreglo = array(
    'resultado'=>'correcto',
    'id'=>$ids,
    'usuario'=>$usua,
    'nombre'=>$nomb ,
    'apellidos'=>$apell,
    'estatus'=>$estad,
    'tipo'=> $tipo
);*/
include 'conexion.php';
$eliminar = $conexion->prepare("DELETE FROM usuarios WHERE id='$ids'");
$eliminar->execute();
$arreglo = array(
    'respuesta'=>'correcto'
);
die(json_encode($arreglo));
?>