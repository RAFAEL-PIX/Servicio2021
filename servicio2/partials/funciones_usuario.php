<?php

function usuarios(){
    include 'conexion.php';
    try {
        return $conexion->query("SELECT id,usuario,nombre,apellidos,id_estatus,id_tipo FROM usuarios");
        $conexion->close();
    } catch (Exeption $e) {
        echo'error: '.$e->getMessage();
        return false;
    }
}
?>