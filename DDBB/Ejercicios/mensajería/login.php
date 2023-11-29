<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/mens.css">
</head>

<body>

    <h1>Conexión con el tipo de mensajería</h1>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mensajes";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST["user"]) && isset($_POST["contraseña"])) {
        $user = $_POST["user"];
        $contraseña = $_POST["contraseña"];

        $query = "INSERT INTO usuarios(usuario, pass) VALUES ('$user', '$contraseña')";
        $result = $conn->query($query);

        if ($result) {
            echo "Registro completado con exito. Ya puedes iniciar sesión en tu cuenta";
        } else {
            echo "Error al registrar el usuario: " . $conn->error;
        }
    }
    ?>

    <div class="container">
        <form id="login-form" action="buzon.php" method="POST">
            <label for='login' id="login"><b>Entrar en la cuenta</b></label>
            <input name="user" id="input-login" type="text" placeholder="usuario">
            <input name="contraseña" id="input-login" type="password" placeholder="contraseña">
            <button id="validar" type="submit">Validar</button>
        </form>

        <form id="newuser-form" action="login.php" method="POST">
            <label for='newuser' id="newuser"><b>Nuevo usuario</b></label>
            <input id="input-login" name="user" type="text" placeholder="usuario">
            <input id="input-login" name="contraseña" type="password" placeholder="contraseña">
            <input id="input-login" name="repetir_contraseña" type="password" placeholder="repetir contraseña">
            <button type="submit">Alta de usuario</button>
        </form>
    </div>

</body>
</html>
