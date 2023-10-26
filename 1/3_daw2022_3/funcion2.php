<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>
<!-- FUNCIONS -->
<?php
//array_count_values conta cantos valroes ten unha matriz
$nombres = ["Ana", "Bernardo", "Bernardo", "Ana", "Carmen", "Ana"];

$cuenta = array_count_values($nombres);

print "<pre>\n"; print_r($cuenta); print "</pre>\n";
?>

<?php
//funcion maximo e minimo
$numeros = [10, 40, 15, -1];

$maximo = max($numeros);
$minimo = min($numeros);

print "<pre>"; print_r($numeros); print "</pre>\n";
print "\n";
print "<p>El máximo de la matriz es $maximo.</p>\n";
print "\n";
print "<p>El mínimo de la matriz es $minimo.</p>\n";
?>

<?php
//
$valores = [10, 40, 15, "abc"];

$maximo = max($valores);
$minimo = min($valores);

print "<pre>\n"; print_r($valores); print "</pre>\n";
print "\n";
print "<p>El máximo de la matriz es $maximo.</p>\n";
print "\n";
print "<p>El mínimo de la matriz es $minimo.</p>\n";
?>

<?php
//SORT: FUNCION PARA ORDEAR MATRICES, HAI MOITAS MAIS....
$valores = [5 => "cinco", 1 => "uno", 9 => "nueve"];

print "<p>Matriz inicial:</p>\n";
print "\n";
print "<pre>\n"; print_r($valores); print "</pre>\n";
print "\n";

sort($valores);

print "<p>Matriz ordenada con sort():</p>\n";
print "\n";
print "<pre>\n"; print_r($valores); print "</pre>\n";
print "\n";
?>

<?php
//RORT: FUNCION PARA ORDEAR MATRICES, HAI MOITAS MAIS....
$valores = [5 => "cinco", 1 => "uno", 9 => "nueve"];

print "<p>Matriz inicial:</p>\n";
print "\n";
print "<pre>\n"; print_r($valores); print "</pre>\n";
print "\n";

rsort($valores);

print "<p>Matriz ordenada con rsort():</p>\n";
print "\n";
print "<pre>\n"; print_r($valores); print "</pre>\n";
print "\n";
?>


<?php
//ASORT: FUNCION PARA ORDEAR MATRICES, HAI MOITAS MAIS....

$valores = [5 => "cinco", 1 => "uno", 9 => "nueve"];

print "<p>Matriz inicial:</p>\n";
print "\n";
print "<pre>\n"; print_r($valores); print "</pre>\n";
print "\n";

asort($valores);

print "<p>Matriz ordenada con asort():</p>\n";
print "\n";
print "<pre>\n"; print_r($valores); print "</pre>\n";
print "\n";
?>
</body>
</html>
    