<?php
session_start();

if (isset($_SESSION['user']) && isset($_SESSION['password'])) {
    $user = $_SESSION['user'];
    $password = $_SESSION['password'];
    echo "<h1>Entraste en la zona restringida</h1>";
} else {
    header("Location: practica3_autentificacion.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Página Restringida</title>
    
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
    <h1>Página Restringida</h1>
</body>
</html>
