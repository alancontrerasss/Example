<?php
session_start();
if (!isset($_SESSION["id_usuario"])) {
    header("Location: login.php");
    exit;
}
require_once "config/conexion.php";

$nombre = $_SESSION["nombre"];
$rol    = $_SESSION["rol"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Oficina | Panel principal</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header class="main-header">
    <div class="container main-header-content">
        <div class="brand">
            <img src="img/logo.jpeg" alt="Logo Mi Oficina">
            <div class="brand-text">
                <span>Mi Oficina</span>
                <span>CERVECERÍA</span>
            </div>
        </div>
        <div class="user-info">
            <div>Usuario: <strong><?php echo htmlspecialchars($nombre); ?></strong></div>
            <div>Rol: <?php echo htmlspecialchars(ucfirst($rol)); ?></div>
            <div>BD: <strong><?php echo htmlspecialchars($bd); ?></strong></div>
            <div style="margin-top: 0.3rem; font-size: 0.8rem;">
                <span id="reloj-fecha"></span><br>
                <span id="reloj-hora"></span>
            </div>
        </div>
    </div>
</header>

<div class="layout">
    <aside class="sidebar">
        <h3>Menú</h3>
        <ul class="menu">
            <li><a href="menu.php" class="activo">Inicio</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="mesas.php">Mesas</a></li>
            <li><a href="pedidos.php">Pedidos</a></li>
            <li><a href="ventas.php">Ventas</a></li>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="reabastecer.php">Reabastecer</a></li>
            <li><a href="logout.php">Cerrar sesión</a></li>
        </ul>
    </aside>

    <main class="main-content">
        <h2>Bienvenido al sistema</h2>
        <div class="card">
            <p>
                Este panel controla la cervecería <strong>Mi Oficina</strong>.  
                Desde el menú lateral puedes administrar productos, mesas,
                pedidos, ventas y tu perfil como usuario.
            </p>
        </div>
    </main>
</div>

<script src="js/reloj.js"></script>
</body>
</html>
