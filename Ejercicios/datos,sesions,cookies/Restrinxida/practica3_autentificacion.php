<?php
session_start();

if(isset($_SESSION["user"])  && isset($_SESSION["password"]) ){
    $user=$_SESSION["user"];
    $password=$_SESSION["password"];
    
    if($user == "admin" || $password == "123456"){
        $_SESSION["user"] = $user;
        $_SESSION["hash"]=password_hash($password,PASSWORD_DEFAULT);
        header("Location:practica3_restrinxida.php");
    }else
    echo "<h1>Datos Erroneos<h1>";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Titulo</title>
    
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 60vh;
            margin: 0;
            background-color: #2d2b2b;
            color: black; 
        }

        h1 {
            text-align: center;
            margin-bottom: 10%;
            color: #fca84f;
        }

        form {
            width: 300px;
            padding: 20px;
            border: 1px solid #fca84f;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fca84f;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        button {
            background-color: black;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: gainsboro;
            color: black;
        }
    </style>
</head>

<body>
    <h1>FORMULARIO DE INICO DE SESION</h1>
    <form action='practica3_autentificacion.php' method="POST">
        <label for='user'>Nombre de usuario:</label>
        <input type='text' id='user' placeholder='Introduce un usuario' name='user'>

        <label for='password'>Contraseña</label>
        <input type='password' id='password' placeholder='Introduce tu contraseña' name='password'>

        <button type='submit'>Comprobar</button>
    </form>

</body>
</html>
