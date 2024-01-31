<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="../css/index.css" />
  <link rel="icon" type="image/jpg" href="../img/favicon.png" />
  <title>Inicio | Laboratorio Dentes</title>
</head>

<body>
  <div class="encabezado">
    <div class="left">
      <!--  menu -->
      <div id="myNav" class="overlay">

        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!-- Overlay content -->
        <div class="overlay-content">
          <a href="categorias.php">Categorias</a>
          <a href="#">Productos</a>
          <a href="#">Pedidos</a>
          <a href="#">Mi Cuenta</a>
        </div>
      </div>

      <span onclick="openNav()"><img id="iconMen" src="../img/hambug.png"></span>
      <!-- Script menu -->
      <script>
        function openNav() {
          document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
          document.getElementById("myNav").style.width = "0%";
        }
      </script>


      <div class="center">
        <img id="logo" src="../img/logo.png">
      </div>
      <div class="right">
        <a href="login.php">
          <img id="inicioFoto" src="../img/inicioSesion.png">
        </a>
        <img id="carrito" src="../img/Carrito.png">
      </div>
    </div>
</body>

</html>