<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<!-- FOREACH.-- MELLOR REVISAR ANTES OS ARRAIS.>

<?php
//VAI DAR ERRO, 
$matriz = ["a", "bb"];
print "<pre>\n";
print_r($matriz);
print "</pre>\n";
for ($i = 0; $i <= 3; $i++) {
    print "<p>$matriz[$i]</p>\n";
}
print "<p>Final</p>\n";
?>

<?php
//RECORRER O ARRAI CORRECTO.
$matriz = ["a", "bb", "ccc"];
print "<pre>\n";
print_r($matriz);
print "</pre>\n";
foreach ($matriz as $valor) {
    print "<p>$valor</p>\n";
}
print "<p>Final</p>\n";
?>

<?php
$matriz = ["uno" => "a", 2 => "bb", "tres" => "ccc"];
print "<pre>\n";
print_r($matriz);
print "</pre>\n";
foreach ($matriz as $indice => $valor) {
    print "<p>$indice - $valor</p>\n";
}
print "<p>Final</p>\n";
?>

<?php
$matriz = [];
print "<pre>\n";
print_r($matriz);
print "</pre>\n";
foreach ($matriz as $indice => $valor) {
    print "<p>$indice - $valor</p>\n";
}
print "<p>Final</p>\n";
?>


</body>
</html>
    