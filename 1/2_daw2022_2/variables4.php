<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
//en PHP hai moitas funcións, unha delas e var_dump que nos da información sobre o  tipo de variable.
$nombre = "Pepe";
var_dump($nombre);
?>

<?php
$edad = 25;
var_dump($edad);
?>

<?php
$estudiante = true;
var_dump($estudiante);
?>

<?php
$nombre = "Pepe";
$edad = 25;
var_dump($nombre, $edad);
?>

<?php
//outra función que se pode utilizar é var_Export para imprimir o valor dunha variable.
$nombre = "Pepe";
var_export($nombre);
?>
<?php
$edad = 25;
var_export($edad);
?>
<?php
$estudiante = true;
var_export($estudiante);
?>
<?php
$estudiante = true;
$variable = var_export($estudiante, true);
print "<p>La variable \$estudiante tiene el valor $variable</p>\n";
print "\n";
print "<p>La variable \$estudiante tiene el valor " . var_export($estudiante, true) . "</p>\n";
?>
</body>
</html>