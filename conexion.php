<?php
$host = "sql208.ezyro.com";
$usuario = "ezyro_41894282";
$clave = "Sistemas2026*";
$bd = "ezyro_41894282_zoopoli";

$conexion = new mysqli($host, $usuario, $clave, $bd);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>