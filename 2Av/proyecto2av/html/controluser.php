<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" type="text/css" href="../css/index.css" />
    <link rel="icon" type="image/jpg" href="../img/favicon.png" />
    <title>Control de usuarios | Laboratorio Dentes</title>
</head>

<body>
    <div class="encabezado">
        <div class="left">
            <!-- Menú -->
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <!-- Contenido Overlay -->
                <div class="overlay-content">
                    <a href="categorias.php">Categorías</a>
                    <a href="productos.php">Productos</a>
                    <a href="micuenta.php">Mi Cuenta</a>
                    <a></a>
                    <a href="cerrarSesion.php">Cerrar Sesion</a>
                </div>
            </div>
            <span onclick="openNav()"><img id="iconMen" src="../img/hambug.png"></span>
        </div>

        <div class="center">
            <img id="logo" src="../img/logo.png">
        </div>

        <div class="right">
            <a id="idlogin" href="login.php">Usuario: <?php echo isset($_SESSION["correo"]) ? $_SESSION["correo"] : ""; ?>
                <img id="inicioFoto" src="../img/user-solid.svg">
            </a>
            <img id="carrito" src="../img/Carrito.png">
        </div>
    </div>

    <!-- Script para el Menú Overlay -->
    <script src="../js/index.js"></script>
</body>

</html>