<?php
session_start();
if(isset($_SESSION["nombre"]) && isset($_SESSION["hash"])){
    $nombre=$_SESSION["nombre"];
    $hash=$_SESSION["hash"];
    if($nombre!="admin" || (password_verify("123456",$hash)==false))
        header("Location:practica3-autentificacion.php");
}
else
    header("Location:practica3-autentificacion.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Práctica 3, Acceso restrinxido</title>
</head>
<body>
    <h1>Página restrinxida</h1>
</body>
</html>