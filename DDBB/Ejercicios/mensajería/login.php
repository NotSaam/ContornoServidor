<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Mensajería</title>
    <link rel="stylesheet" href="../css/mens.css">

</head>

<body>

    <h1>Conexión con el tipo de mensajería</h1>

    <div class="container">
        <form id="login-form" action=".php">
            <label for='login' id="login"><b>Entrar en la cuenta</b></label>
            <input  id="input-login" type="user" placeholder="usuario">
            <input id="input-loginpwd" type="password" placeholder="contraseña">
            <button id="validar" type="submit">Validar</button>
        </form>

        <form id="newuser-form" action="busqueda.php">
            <label for='newuser' id="newuser"><b>Nuevo usuario</b></label>
            <input type="user" placeholder="usuario">
            <input type="password" placeholder="contraseña">
            <input type="password" placeholder=" repetir contraseña">
            <button type="submit">Alta de usuario</button>
        </form>
    </div>

</body>
</html>
