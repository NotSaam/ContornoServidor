<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname = "laboratorio";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
  }

  $correo = $_POST["username"];
  $clave = $_POST["password"];

  $sql = "SELECT Cod_User, Correo, Clave, Cod_Rol FROM usuarios WHERE Correo = ?";
  $stmt = $conn->prepare($sql);

  if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conn->error);
  }

  $stmt->bind_param("s", $correo);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows > 0) {
    $stmt->bind_result($user_id, $user_correo, $stored_password, $user_rol);
    $stmt->fetch();

    // Verificar la contraseña
    if ($clave === $stored_password) {
      $_SESSION["user_id"] = $user_id;
      $_SESSION["correo"] = $user_correo;
      $_SESSION["rol"] = $user_rol;

      header("Location: index.php");
      exit();
    } else {
      $error_message = "Credenciales incorrectas. Inténtalo de nuevo.";
    }
  } else {
    $error_message = "Credenciales incorrectas. Inténtalo de nuevo.";
  }

  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="../css/login.css" />
  <link rel="icon" type="image/jpg" href="../img/favicon.png" />
  <title>Inicio de sesión | Laboratorio Dentes</title>
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