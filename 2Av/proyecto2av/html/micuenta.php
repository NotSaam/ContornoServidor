<?php
session_start();

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
    "Control de usuarios" => "controluser.php",
    "Control de categorías" => "controlcategorias.php",
    "Control de productos" => "controlproductos.php",
    "Control de pedidos" => "controlpedidos.php"
  );
} else {
  // Otros roles
  $opciones = array(
    "MIS PEDIDOS" => "mis_pedidos.php",
  );
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="../css/index.css" />
  <link rel="stylesheet" type="text/css" href="../css/micuenta.css" />
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

  <h3>Bienvenide, <?php echo isset($_SESSION["correo"]) ? $_SESSION["correo"] : "Usuario"; ?>. Estas son las opciones de tu cuenta:</h3>

  <div class="opciones-container">
    <?php foreach ($opciones as $opcion => $pagina) { ?>
      <a href="<?php echo $pagina; ?>" class="card shadow">
        <img class="fotoOpciones" src="../img/<?php echo strtolower(str_replace(" ", "", $opcion)); ?>.png" alt="<?php echo $opcion; ?>" width="80">
        <p><?php echo $opcion; ?></p>
      </a>
    <?php } ?>
  </div>

  <!-- Script para el Menú Overlay -->
  <script src="../js/index.js"></script>
</body>

</html>
