<?php
include "practica1_comprobar.php";

$haiPreferencias = true;
$array = null;

if(haiCookie()==false){
    if(haiGet()==false){
        $haiPreferencias=false;
    }
    else{
        $array=$_GET;
    }
}else{
    $array=$_COOKIE;   
}

if($haiPreferencias==false){
    header("location:practica1_index.php");
}else{
    foreach ($array as $indice=>$valor)
    $$indice=$valor;
}

setcookie("nombre",$nombre,time()+60*60*24);
setcookie("apelidos",$apelidos,time()+60*60*24);
setcookie("fondo",$fondo,time()+60*60*24);
setcookie("letra",$letra,time()+60*60*24);
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