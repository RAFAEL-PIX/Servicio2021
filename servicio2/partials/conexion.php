<?php
$conexion = new mysqli('localhost','root','','servicio_social');
if($conexion->connect_error){
    echo $conexion->connect_error;

}
$conexion->set_charset('utf8');
?>