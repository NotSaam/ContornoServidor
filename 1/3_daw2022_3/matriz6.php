<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<!-- borrar matrices -->

<?php
$datos = ["Santiago", "Ramón y Cajal", 1852];

print "<p>$datos[0] $datos[1] nació en $datos[2].<p>\n";
?>

<?php
$nombres[-3] = "Alba";

print "<p>{$nombres[-3]}<p>\n";
print "\n";
print "<p>" . $nombres[-3] . "<p>\n";
?>

<?php
$nombres[1.7] = "Alba";

print "<p>$nombres[1]<p>\n";
?>

<?php
$nombres[1.7] = "Alba";

print "<p>" . $nombres[1.2] . "<p>\n";
?>

<?php
$nombres[1.7] = "Alba";

print "<p>{$nombres[1.2]}<p>\n";
print "\n";
print "<p>" . $nombres[1.2] . "<p>\n";
?>

<?php
$datos["pepe"]["edad"] = 25;
$datos["pepe"]["peso"] = 80;
$datos["juan"]["edad"] = 22;
$datos["juan"]["peso"] = 75;

print "<pre>\n"; print_r($datos); print "</pre>\n";
?>

<?php
$datos[0]["nombre"] = "pepe";
$datos[0]["edad"] = 25;
$datos[0]["peso"] = 80;
$datos[1]["nombre"] = "juan";
$datos[1]["edad"] = 22;
$datos[1]["peso"] = 75;

print "<pre>\n"; print_r($datos); print "</pre>\n";
?>

<?php
//borrar matriz
$matriz = [5 => 25, -1 => "negativo", "número 1" => "cinco"];

print "<pre>\n"; print_r($matriz); print "</pre>\n";

unset($matriz[5]);

print "<pre>\n"; print_r($matriz); print "</pre>\n";
?>

<?php
$matriz = [5 => 25, -1 => "negativo", "número 1" => "cinco"];

print "<pre>\n"; print_r($matriz); print "</pre>\n";

unset($matriz);

print "<pre>\n"; print_r($matriz); print "</pre>\n";
?>

<?php
$nombres = ["Alba", "Bernardo"];

print "<pre>\n"; print_r($nombres); print "</pre>\n";

unset($matriz[3]);

print "<pre>\n"; print_r($nombres); print "</pre>\n";
?>


<?php
// DUPLICAR UNHA MATRIZ.
$cuadrados = [5 => 25, 9 => 81];

$cuadradosCopia = $cuadrados;

$cuadrados[] = 100;

print "<p>Matriz inicial (modificada):</p>\n";
print "<pre>\n"; print_r($cuadrados); print "</pre>\n";
print "\n";

print "<p>Copia de la matriz inicial (sin modificar):</p>\n";
print "<pre>\n"; print_r($cuadradosCopia); print "</pre>\n";
?>


</body>
</html>
    