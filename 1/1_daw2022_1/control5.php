<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
 //ESTRUCTURAS DE CONTROL MULTIPLE
 //ollo, hai que poñer o break para evitarse entradas indevidas en opcións xa percoriridas.
$dia="1";
switch ($dia){
    case 1:
        $dia="luns";
        break;
    case 2:
      $dia="martes";
        break;
    case 3:
        $dia="mercores";
        break;
    case 4:
        $dia="xoves";
        break;
    case 5:
        $dia="venres";
        break;
    case 6:
         $dia="sabado";
        break;
    case 7:
        $dia="Domingo";
         break;
    default:
    $dia="?";
}
echo $dia;
?>

</body>
</html>