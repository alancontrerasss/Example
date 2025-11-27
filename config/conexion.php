<?php
date_default_timezone_set('America/Mexico_City');

$host    = getenv('MYSQLHOST');
$usuario = getenv('MYSQLUSER');
$clave   = getenv('MYSQLPASSWORD');
$bd      = getenv('MYSQLDATABASE');
$puerto  = getenv('MYSQLPORT');

try {
    $dsn = "mysql:host=$host;port=$puerto;dbname=$bd;charset=utf8mb4";
    $conexion = new PDO($dsn, $usuario, $clave);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
