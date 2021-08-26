<?php
$nombre = $_POST['dato1'];
$N0_reportes = $_POST['dato2'];
$fecha_reporte = $_POST['dato3'];
$universidad = $_POST['dato4'];
$carrera = $_POST['dato5'];
$area_report = $_POST['dato6'];
$apellido = $_POST['dato7'];
$id_usuario = $_POST['dato8'];

session_start();
$usuario = $_SESSION['usuarioS'];

$arreglo = array(
    'resultado'=>'correcto',
    'nombre'=>$nombre,
    'N0_reporte'=>$N0_reportes,
    'fecha_reporte'=>$fecha_reporte,
    'universidad'=>$universidad,
    'carrera'=>$carrera,
    'area_reporte'=> $area_report,
    'apellidos'=> $apellido,
    'id_usuario'=> $id_usuario
);
include 'conexion.php';
try {
    
    $control = $conexion -> prepare ("INSERT INTO reportes(nombre,usuario, No_reporte, fecha_de_reporte, universidad, carrera, area_del_reporte, status, horas, apellidos, id_usuario) VALUES ('$nombre','$usuario', '$N0_reportes', '$fecha_reporte', '$universidad', '$carrera','$area_report','pendiente','','$apellido','$id_usuario')");
    $control -> execute();
    if($control -> affected_rows){
        $arreglo = array(
            'respuesta' => 'correcto',
            'id_insertado' => $control->insert_id


        );

    }
    $control->close();

    
    $conexion->close();
    
} catch (Exception $e) {
    $arreglo = array(
        'error'->$e->getMessage()
    );
}
die(json_encode($arreglo));
?>