<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<!-- matrices multidimensionais -->

<?php
$datos = [
    ["nombre" => "pepe", "edad" => 25, "peso" => 80],
    ["nombre" => "juan", "edad" => 22, "peso" => 75]
];

//print "<p>$datos[0][nombre] tiene $datos[0][edad] años.</p>\n";
//o anterior da erro porque php non susitute mais alo da primeira posicion...
?>

<?php
$datos = [
    ["nombre" => "pepe", "edad" => 25, "peso" => 80],
    ["nombre" => "juan", "edad" => 22, "peso" => 75]
];

print "<p>{$datos[1]["nombre"]} pesa {$datos[1]["peso"]} kilos</p>\n";
print "\n";
print "<p>" . $datos[0]["nombre"] . " tiene " . $datos[0]["edad"] . " años</p>\n";
?>

<?php
$datos["nombre"] = "Santiago";
$datos["apellidos"] = "Ramón y Cajal";

//print "$datos";
//esto daría erro para imprimir toda a matriz....
?>

<?php
$datos["nombre"] = "Santiago";
$datos["apellidos"] = "Ramón y Cajal";

//print "{$datos}";
//esto tamen daría erro para imprimir toda a matriz
?>


<?php
//a funcion print_r sirve para amosar todos os datos da matriz.
$datos["nombre"] = "Santiago";
$datos["apellidos"] = "Ramón y Cajal";

print_r($datos);
?>

<?php
//o mesmo que o anterior, pero metemos a etiqueta pre para que en html se vexa ben o formato da matriz
$datos["nombre"] = "Santiago";
$datos["apellidos"] = "Ramón y Cajal";

print "<pre>";
print_r($datos);
print "</pre>";
?>


<?php
$datos[1]["nombre"] = "Santiago";
$datos[1]["apellidos"] = "Ramón y Cajal";
$datos[2]["nombre"] = "Leonardo";
$datos[2]["apellidos"] = "Torres Quevedo";

print "<pre>";
print_r($datos);
print "</pre>";
?>

<?php
$datos["nombre"] = "Santiago";
$datos["apellidos"] = "Ramón y Cajal";

$tmp = print_r($datos, true);
print "<p>La matriz es $tmp</p>\n";
?>

<?php
$datos["nombre"] = "Santiago";
$datos["apellidos"] = "Ramón y Cajal";

print "<p>La matriz es " . print_r($datos, true) . "</p>\n";
?>



</body>
</html>
    