<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
//FUNCIONS
//RANGE XERA UNHA MATRIZ, NESTE CASO DE 3 ELEMENTOS..
$valores = range(1, 10, 3);

print "<pre>\n"; print_r($valores); print "</pre>\n";
?>

<?php
$valores = range(0.5, 1.5, 0.4);

print "<pre>\n"; print_r($valores); print "</pre>\n";
?>

<?php
//funcion array_merge fusiona matrices, se os indices son numericos, faino "ben"
$uno = [1, 2, 4];
$dos = [1, 3, 9];

$final = array_merge($uno, $dos);

print "<pre>\n"; print_r($final); print "</pre>\n";
?>

<?php
//funcion array_merge, fusiona matrices, cando son indices asociativos.. quedase co ultimo.
$uno = ["a" => 1, "b" => 2, "c" => 4];
$dos = ["a" => 2, "b" => 4, "c" => 6];

$final = array_merge($uno, $dos);

print "<pre>\n"; print_r($final); print "</pre>\n";
?>

<?php
//funcion array_merge fusionando matrices numericas e non numericas...
$uno = [1 => 1, "b" => 2, "c" => 4];
$dos = [1 => 100, "b" => 4, "c" => 6];

$final = array_merge($uno, $dos);

print "<pre>\n"; print_r($final); print "</pre>\n";
?>


<?php
//funcion count conta os elementos dunha matriz.
$nombres[1] = "Ana";
$nombres[10] = "Bernardo";
$nombres[25] = "Carmen";

$elementos = count($nombres);

print "<p>La matriz tiene $elementos elementos.</p>\n";
print "\n";
print "<pre>\n"; print_r($nombres); print "</pre>\n";
?>

<?php
//funcion count con matrices multidimensionais, considera a matriz coma un vector de vectores e 
//devolve simplemente o numero de elementos do primeiro indice.
$datos["pepe"]["edad"] = 25;
$datos["pepe"]["peso"] = 80;
$datos["juan"]["edad"] = 22;
$datos["juan"]["peso"] = 75;
$datos["ana"]["edad"]  = 30;

$elementos = count($datos);

print "<p>La matriz tiene $elementos elementos.</p>\n";
print "\n";
print "<pre>\n"; print_r($datos); print "</pre>\n";
?>

<?php
//para contar todos os elementos dunha matriz multidimensional utiliar a funcion count co parametro recursive
$datos["pepe"]["edad"] = 25;
$datos["pepe"]["peso"] = 80;
$datos["juan"]["edad"] = 22;
$datos["juan"]["peso"] = 75;
$datos["ana"]["edad"]  = 30;

$elementos = count($datos, COUNT_RECURSIVE);

print "<p>La matriz tiene $elementos elementos.</p>\n";
print "\n";
print "<pre>\n"; print_r($datos); print "</pre>\n";
?>
<?php
$datos["pepe"]["edad"] = 25;
$datos["pepe"]["peso"] = 80;
$datos["juan"]["edad"] = 22;
$datos["juan"]["peso"] = 75;
$datos["ana"]["edad"]  = 30;

$elementos = count($datos, COUNT_RECURSIVE) - count($datos);

print "<p>La matriz tiene $elementos elementos.</p>\n";
print "\n";
print "<pre>\n"; print_r($datos); print "</pre>\n";
?>

</body>
</html>
    