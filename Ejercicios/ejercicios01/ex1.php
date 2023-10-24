<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Titulo da página</title>
    </head>
    <body>
        
        <?php

    $numrand= rand (0 || 1);
    $img1="/fotos/flor1.jpg";
    $img2="fotos/flor.jpg";

    if ($numrand == 0){
        echo "<img src=$img1>";
    } else{
        echo "<img src=$img2";
    }

        ?>