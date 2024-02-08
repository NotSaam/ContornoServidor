<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="../css/index.css" />
  <link rel="icon" type="image/jpg" href="../img/favicon.png" />
  <title>Mi Cuenta | Laboratorio Dentes</title>
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
      <a href="login.php">Usuario: <?php echo isset($_SESSION["correo"]) ? $_SESSION["correo"] : ""; ?>
        <img id="inicioFoto" src="../img/user-solid.svg">
      </a>
      <img id="carrito" src="../img/Carrito.png">
    </div>
  </div>

  <?php

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION["rol"])) {
    // Redirigir al usuario a la página de inicio de sesión si no ha iniciado sesión
    header("Location: login.php");
    exit();
}

// Verificar el rol del usuario
if ($_SESSION["rol"] == 1) {
    // Usuario con rol 1 (admin)
    $opciones = array(
        "Control de usuarios",
        "Control de categorías",
        "Control de productos",
        "Control de pedidos"
    );
} else {
    // Otros roles
    $opciones = array(
      "Mis pedidos",
      "Control de categorías",
      "Control de productos"
  );
}
?>
<!--     <p>Bienvenido, <?php echo isset($_SESSION["correo"]) ? $_SESSION["correo"] : "Usuario"; ?>.</p>
 -->    
    <?php if ($_SESSION["rol"] == 1) { ?>
        <!-- Mostrar opciones adicionales para el rol 1 -->
        <h2>Opciones de Administrador:</h2>
        <ul>
            <?php foreach ($opciones as $opcion) { ?>
                <li><?php echo $opcion; ?></li>
            <?php } ?>
        </ul>
    <?php } ?>
    
</body>

</html>















  <!-- Script para el Menú Overlay -->
  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
</body>

</html>