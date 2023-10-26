<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>
    
<!-- VARIABLES ENTEIRAS -->

<?php
//ollo co valor da constante predefinida PHP_INT_SIZE e PHP_INT_MAX
$lado = 14;
$area = $lado * $lado;

print "<p>Un cuadrado de lado $lado cm \ntiene un área de $area cm<sup>2</sup>.</p>\n";
?>

<?php
$maximo = PHP_INT_MAX;
print "<p>El mayor entero que se puede guardar en una variable entera es $maximo</p>\n";

$demasiado = (int)($maximo+1);
print "<p>Si se intenta guardar 1 más, el resultado es $demasiado</p>\n";
?>

<?php
$lado = 14.5;
$area = $lado * $lado;

print "<p>Un cuadrado de lado $lado cm \ntiene un área de $area cm<sup>2</sup>.</p>\n";
?>


<?php
$maximo = 10 **308;  // 10^308
print "<p>10<sup>308</sup> se puede guardar en una variable decimal: $maximo</p>\n";
print "\n";
$demasiado = 10 * $maximo;
print "<p>Si se intenta guardar 10<sup>309</sup>, el resultado es $demasiado</p>\n";
?>


<?php
$prueba = 1000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000;
print "<p>Si se intenta guardar 10<sup>309</sup>, el resultado es $prueba\n";
?>



</body>
</html>