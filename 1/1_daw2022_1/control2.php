<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
 //ESTRUCTURAS DE CONTROL condicional compuesta
 

$aprobados=0;
$nota=6;
if ($nota>=5){
    echo "aprobado";
    $aprobados++;
}
else {
    echo "suspenso";
    $suspensos++;
}

?>

</body>
</html>
