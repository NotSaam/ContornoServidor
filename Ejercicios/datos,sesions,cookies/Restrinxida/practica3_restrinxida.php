<?php
session_start();
    if (isset($_SESSION['usuario']) && isset($_SESSION['hash'])){
        $usuario=$_SESSION['usuario'];
        $hash=$_SESSION['hash'];
    echo "<h1>Entraches na zona restrinxida</h1>";

    } else {
        header("Location: practica3_autentificacion.php");
    }
?>
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Titulo</title>
    
    <style>
        body {
            background-color: #2d2b2b;
            color: black; 
        }

        h1 {
            text-align: left;
            margin: 40px;
            color: #fca84f;
        }

        </style>
</head>

<body>
    <h1>Paxina restrinxida</h1>
</body>
</html>