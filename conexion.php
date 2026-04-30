<?php
$conexion = new mysqli("mysql-deybys.alwaysdata.net", "root", "clase1234", "deybys_gestionusuarios");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>