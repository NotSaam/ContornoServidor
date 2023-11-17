<?php
session_start();
    $haypreferencias=true;

if(!isset($_SESSION["nombre"]) || !isset($_SESSION["apelidos"]) || !isset($_SESSION["fondo"]) || !isset($_SESSION["letra"]) ){
        if(!isset($_POST["nombre"]) || !isset($_POST["apelidos"]) || !isset($_POST["fondo"]) || !isset($_POST["letra"]) ){
            $haypreferencias=false;
        } else {
            $_SESSION["nombre"] = $_POST["nombre"];
            $_SESSION["apelidos"] = $_POST["apelidos"];
            $_SESSION["fondo"] = $_POST["fondo"];
            $_SESSION["letra"] = $_POST["letra"];
        }
    }
        $nombre = $_SESSION["nombre"];
        $apelidos = $_SESSION["apelidos"];
        $letra = $_SESSION["letra"];
        $fondo = $_SESSION["fondo"];

    if($haypreferencias==false){
        header("Location: practica2_index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>Titulo</title>
</head>
<style>
    body{
        background-color:<?=$fondo?>;
        color:<?=$letra?>;
    }
    a{
        background-color:white;
    }
</style>
<body>
    <h1>Hola <?="$nombre $apelidos"?></h1>
    <p><a href="practica1_borrar.php">Volver a cambiar as preferencias</a></p>

</body>
</html>