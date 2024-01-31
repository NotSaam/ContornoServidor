<?php
session_start();

// Verificar si el formulario se envió
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Conexión a la base de datos (reemplaza estos valores con los tuyos)
  $servername = "tu_servidor";
  $username = "tu_usuario";
  $password = "tu_contraseña";
  $dbname = "tu_base_de_datos";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verificar la conexión
  if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
  }

  // Obtener datos del formulario
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Consulta SQL para verificar las credenciales
  $sql = "SELECT id, username FROM usuarios WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);

  // Verificar si se encontraron resultados
  if ($result->num_rows > 0) {
    // Iniciar sesión y redirigir a la página principal
    $row = $result->fetch_assoc();
    $_SESSION["user_id"] = $row["id"];
    $_SESSION["username"] = $row["username"];
    header("Location: index.php"); // Cambia esto con la página a la que deseas redirigir
    exit();
  } else {
    $error_message = "Credenciales incorrectas. Inténtalo de nuevo.";
  }

  // Cerrar la conexión a la base de datos
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
  <a id="lab" href="../html/index.html">
    <h1>LABORATORIO DENTES</h1>
  </a>

  <form id="form" action="" method="post">
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