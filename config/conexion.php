<?php
date_default_timezone_set('America/Mexico_City');

$host   = getenv('MYSQLHOST');
$usuario = getenv('MYSQLUSER');
$clave   = getenv('MYSQLPASSWORD');
$bd      = getenv('MYSQLDATABASE');
$puerto  = getenv('MYSQLPORT');

$conexion = new mysqli($host, $usuario, $clave, $bd, $puerto);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8mb4");
?>
