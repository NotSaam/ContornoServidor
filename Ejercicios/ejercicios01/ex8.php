<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Titulo da página</title>
</head>

<body>

    <?php

    $num = $_POST["num"];
    $suma=0;

    for ($i = 2 ;$i<$num;$i+=2){
        $suma += $i;
    }
    echo "Tu numero es " . $num . " y la suma es " .  $suma;
   
   ?>

</body>

</html>