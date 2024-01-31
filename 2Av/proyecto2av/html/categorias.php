<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="../css/login.css" />
  <link rel="icon" type="image/jpg" href="../img/favicon.png" />
  <title>Categorias | Laboratorio Dentes</title>
</head>

<body>
  <a id="lab" href="index.php">
    <h1>LABORATORIO DENTES</h1>
  </a>

  <form id="form" action="login.php" method="post">
    <h2>Inicio de sesión</h2>
    <?php if (isset($error_message)) { ?>
      <div class="error-message"><?php echo $error_message; ?></div>
    <?php } ?>
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