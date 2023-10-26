<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
$x = 3;
$y = 4;
/* esto da erro
print "<p>Suma: $x + $y = $x + $y</p>\n";
print "<p>Multiplicación: $x x $y = $x * $y</p>\n";
*/
?>

<?php
$x = 3;
$y = 4;
print "<p>Suma: $x + $y = " . ($x + $y) . "</p>\n";
print "<p>Multiplicación: $x x $y = " . ($x * $y) . "</p>\n";
?>

<?php
$x = 3;
$y = 4;
$suma = $x + $y;
$producto = $x * $y;
print "<p>Suma: $x + $y = $suma</p>\n";
print "<p>Multiplicación: $x x $y = $producto</p>\n";
?>

<?php
//neste exemplo escapamos o simbolo x para poder poñe o nome da variable e non o valor.
$x = 3;
print "<p>La variable \$x vale $x</p>\n";
?>

<?php
//en html pode interesarno unir varialbe scon valores...
print "<p style=\"font-size: 30px\">Texto grande</p>\n";
?>
<?php
$x = 30;
print "<p style=\"font-size: {$x}px\">Texto grande</p>\n";
?>
<?php
$x = 30;
print "<p style=\"font-size: " . $x . "px\">Texto grande</p>\n";
?>
<?php
$x = 30;
print "<p style=\"font-size: $x" . "px\">Texto grande</p>\n";
?>
</body>
</html>