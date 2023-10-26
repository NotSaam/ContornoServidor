<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
 //ESTRUCTURAS DE CONTROL MULTIPLE
 
$suspensos=0;
$aprobados=0;
$nota=3;
if ($nota<5):
    echo "suspenso";
    $suspensos++;
elseif($nota<7):
    echo "aprobado";
    $aprobados++;
elseif($nota<9):
    echo "notable";
    $aprobados++;
else{
    echo "sobresaliente";
    $aprobados++;
}

?>

</body>
</html>