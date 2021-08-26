<?php

function reportes(){
    include 'conexion.php';
    try {
        return $conexion->query("SELECT id_reporte,id_usuario,usuario,fecha_de_reporte,nombre,apellidos FROM reportes");
        $conexion->close();
    } catch (Exeption $e) {
        echo'error: '.$e->getMessage();
        return false;
    }
}
?>