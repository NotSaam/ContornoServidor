<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>
<!-- BUSCAR VALORES NUNHA MATRIZ -->
<?php
//in_array para buscar valores nunha matriz... devolve true se o valor existe.
$valores = [10, 40, 15, -1];

print "<pre>\n"; print_r($valores); print "</pre>\n";

if (in_array(15, $valores)) {
  print "<p>15 está en la matriz \$valores.</p>\n";
} else {
  print "<p>15 no está en la matriz \$valores.</p>\n";
}
print "\n";

if (in_array(25, $valores)) {
  print "<p>25 está en la matriz \$valores.</p>\n";
} else {
  print "<p>25 no está en la matriz \$valores.</p>\n";
}
print "\n";

if (in_array("15", $valores, true)) {
  print "<p>\"15\" está en la matriz \$valores.</p>\n";
} else {
  print "<p>\"15\" no está en la matriz \$valores.</p>\n";
}
?>


<?php
//funcion array_search busca o valor na matriz e se o atopa devolve o indice correspondente.
//funcion array_keys vusca o valor na matriz e se o atopa devolve a matriz cos indices...
$valores = [10, 40, 15, 30, 15, 40, 15];

print "<pre>\n"; print_r($valores); print "</pre>\n";
print "\n";

$encontrado = array_search(15, $valores);
print "<p>$encontrado</p>\n";
print "\n";

$encontrados = array_keys($valores, 15);
print "<pre>\n"; print_r($encontrados); print "</pre>\n";
?>

<?php
//reindexar unha matriz.... array_values
$nombres = ["a" => "Ana", "b" => "Bernardo", "c" => "Carmen", "d" => "David"];

print "<p>Matriz inicial:</p>\n";
print "\n";
print "<pre>\n"; print_r($nombres); print "</pre>\n";
print "\n";

$reindexada = array_values($nombres);

print "<p>Matriz reindexada con array_values():</p>\n";
print "\n";
print "<pre>\n"; print_r($reindexada); print "</pre>\n";
print "\n";
?>


<?php
//funcion shuflle para baraxar os valores dunha arrai
$numeros = [0, 1, 2, 3, 4, 5];

print "<p>Matriz inicial:</p>\n";
print "\n";
print "<pre>\n"; print_r($numeros); print "</pre>\n";
print "\n";

shuffle($numeros);

print "<p>Matriz barajada con shuffle():</p>\n";
print "\n";
print "<pre>\n"; print_r($numeros); print "</pre>\n";
print "\n";
?>


<?php
$numeros = ["a" => 1, "b" => 2, "c" => 3, "d" => 4];

print "<p>Matriz inicial:</p>\n";
print "\n";
print "<pre>\n"; print_r($numeros); print "</pre>\n";
print "\n";

shuffle($numeros);

print "<p>Matriz barajada con shuffle():</p>\n";
print "\n";
print "<pre>\n"; print_r($numeros); print "</pre>\n";
print "\n";
?>

<?php
//extraer ao azar un indice da matriz.....
$cuadrados = [2 => 4, 3 => 9, 7 => 49, 10 => 100];

$indice = array_rand($cuadrados);

print "<p>$indice</p>\n";
?>

<?php
//obter o valor corresponden a un indice sacado ao chou da matriz.
$cuadrados = [2 => 4, 3 => 9, 7 => 49, 10 => 100];

$indice = array_rand($cuadrados);

print "<p>$indice - $cuadrados[$indice]</p>\n";
?>

<?php
//a funcion array_unique elimina valores repetidos.
$inicial = [0, 0, 1, 3, 1, 3, 2, 1];

$final = array_unique($inicial);

print "<pre>\n"; print_r($final); print "</pre>\n";
?>
</body>
</html>
    