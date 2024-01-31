<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname = "laboratorio";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verificar la conexión
  if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
  }

  // Obtener datos del formulario
  $correo = $_POST["username"]; // Cambié el nombre del campo a "correo"
  $clave = $_POST["password"]; // Cambié el nombre del campo a "clave"

  // Consulta SQL utilizando una consulta preparada
  $sql = "SELECT Cod_User, Correo, Cod_Rol FROM usuarios WHERE Correo = ? AND Clave = ?";

  // Preparar la consulta
  $stmt = $conn->prepare($sql);

  // Verificar si hay algún error en la preparación
  if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conn->error);
  }

  // Vincular los parámetros
  $stmt->bind_param("ss", $correo, $clave);

  // Ejecutar la consulta
  $stmt->execute();

  // Obtener resultados de la consulta
  $stmt->store_result();

  if ($stmt->num_rows > 0) {
    $stmt->bind_result($user_id, $user_correo, $user_rol);
    $stmt->fetch();

    $_SESSION["user_id"] = $user_id;
    $_SESSION["correo"] = $user_correo;
    $_SESSION["rol"] = $user_rol;

    header("Location: index.php");
    exit();
  } else {
    $error_message = "Credenciales incorrectas. Inténtalo de nuevo.";
  }

  // Cerrar la consulta y la conexión
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