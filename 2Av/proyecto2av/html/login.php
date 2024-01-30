<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../css/login.css" />
    <link rel="icon" type="image/jpg" href="../img/favicon.png" />
    <title>Inicio de sesion | Laboratorio Dentes</title>
  </head>
  <body>
    <a id="lab" href="../html/index.html">
      <h1>LABORATORIO DENTES</h1>
    </a>

    <form id="form" action="">
      <h2>Inicio de sesion</h2>
      <div class="input-field">
        <label for="username">Usuario</label>
        <input type="text" id="username" name="username" required />
      </div>
      <div class="input-field">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required />
      </div>
      <div class="submit">
        <input id="submitBoton" type="submit" value="Login" />
      </div>
    </form>
  </body>
</html>