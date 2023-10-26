<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
//operadores condicionais.
$edad=21;
$mayorEdad = $edad >=18; //$mayorEdad será true
$menorEdad = !$mayoEdad; // $menorEdad será false

//operadon && (AND)

$carnetconducir=true;
$edad=20;
$puedeconducir=($edad>=18) && $carnetconducir;
//$puedeconducir será verdadeiro, posto que $edd é maio que 18 e $carnet é true.

//operador OR OU ||
$nieva=true;
$llueve=false;
$graniza=false;
$maltiempo=$nieva||$llueve||$graniza; //maltiempo es true si polo menos un dos falores é true.





?>



</body>
</html>