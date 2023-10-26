<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>
<?php
$edad = 15;
print $edad;
?>

<?php
$edad = 15;
print "<p>$edad</p>\n";
$edad = 20;
print "<p>$edad</p>\n";
?>

<?php
$radio = 15;
$perimetro = 2 * 3.14 * 15;
print $perimetro;
?>

<?php
$radio = 15;
$perimetro = 2 * 3.14 * $radio;
print $perimetro;
?>

<?php
$edad = 15;
$edad = 2 * $edad;
print $edad;
?>

<?php
$Edad = 15;
$edad = 20;
print $Edad;
?>

<?php
$edad = 15;
print "<p>$edad</p>\n";
$edad = "quince";
print "<p>$edad</p>\n";
?>

<?php
$cadena1 = "Pasa";
$cadena2 = "tiempos";
$cadena3 = $cadena1 . $cadena2;
print "<p>$cadena3</p>\n";
?>

<?php
$cadena1 = "Corre";
$cadena2 = "ve";
$cadena3 = "idile";
$cadena4 = $cadena1 . $cadena2 . $cadena3;
print "<p>$cadena4</p>\n";
?>

<?php
$nombre = "Don Pepito";
print "<p>¡Hola, " . $nombre . "! ¿Cómo está usted?</p>\n";
?>

<?php
$nombre = "Don Pepito";
print "<p>¡Hola, $nombre! ¿Cómo está usted?</p>\n";
?>

<?php
$semanas = 5;
print "<p>$semanas semanas son " . (7 * $semanas) . " días.</p>\n";
?>




</body>
</html>