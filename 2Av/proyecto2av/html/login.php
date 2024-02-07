<?php
session_start();

// Inicializa la variable de mensaje de error
$error_message = "";

// Verifica si se ha enviado el formulario
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

  // Genera el hash de la contraseña
  $hashed_password = password_hash($clave, PASSWORD_DEFAULT);

  // Prepara la consulta para insertar un nuevo usuario
  $sql = "INSERT INTO usuarios (Correo, Clave) VALUES (?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $correo, $hashed_password);

  // Ejecuta la consulta para insertar un nuevo usuario
  $stmt->execute();

  // Verifica si se insertó el usuario correctamente
  if ($stmt->affected_rows > 0) {
    // Usuario insertado correctamente
    $_SESSION["success_message"] = "Usuario registrado correctamente.";
  } else {
    // Error al insertar el usuario
    $_SESSION["error_message"] = "Error al registrar el usuario.";
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
    <?php if (!empty($error_message)) { ?>
      <!-- Muestra el mensaje de error solo si existe -->
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