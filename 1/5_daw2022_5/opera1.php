<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
$valor = 9;
print "<p>" . ++$valor . "</p>\n";
?>
<?php
$valor = 9;
print "<p>" . $valor++ . "</p>\n";
?>
<?php
$valor = "b";
print "<p>" . ++$valor . "</p>\n";
?>
<?php
$valor = "z";
print "<p>" . ++$valor . "</p>\n";
?>
<?php
$valor = "a9z";
print "<p>" . ++$valor . "</p>\n";
?>

<?php
print "<p>El resto de 17 dividido entre 3 es " . 17 % 3 . "</p>\n";
?>
<?php
print "<p>El resto de 17 dividido entre 3.1 es " . fmod(17, 3.1) . "</p>\n";
?>

<?php
print "<p>2.6 se redondea con round() a " . round(2.6) . "</p>\n";
print "<p>2.3 se redondea con round() a " . round(2.3) . "</p>\n";
print "<p>-2.6 se redondea con round() a " . round(-2.6) . "</p>\n";
print "<p>-2.3 se redondea con round() a " . round(-2.3) . "</p>\n";
?>
<?php
$numero = 4.3;
if ($numero == round($numero)) {
    print "<p>$numero es un número entero</p>\n";
} else {
    print "<p>$numero no es un número entero</p>\n";
}

$numero = -6;
if ($numero == round($numero)) {
    print "<p>$numero es un número entero</p>\n";
} else {
    print "<p>$numero no es un número entero</p>\n";
}
?>

<?php
print "<p>2.6574 se redondea con round() con dos decimales a " . round(2.6574, 2) . "</p>\n";
print "<p>3141592 redondeado con round() con centenas es " . round(3141592, -2) . "</p>\n";
?>

<?php
print "<p>2.6 se redondea con floor() a " . floor(2.6) . "</p>\n";
print "<p>2.3 se redondea con floor() a " . floor(2.3) . "</p>\n";
print "<p>-2.6 se redondea con floor() a " . floor(-2.6) . "</p>\n";
print "<p>-2.3 se redondea con floor() a " . floor(-2.3) . "</p>\n";
?>

<?php
print "<p>2.6 se redondea con ceil() a " . ceil(2.6) . "</p>\n";
print "<p>2.3 se redondea con ceil() a " . ceil(2.3) . "</p>\n";
print "<p>-2.6 se redondea con ceil() a " . ceil(-2.6) . "</p>\n";
print "<p>-2.3 se redondea con ceil() a " . ceil(-2.3) . "</p>\n";
?>

<?php
print "<p>2<sup>3</sup> = " . pow(2, 3) . "</p>\n";
print "\n";
print "<p>2<sup>3</sup> = " . 2 ** 3 . "</p>\n";
?>

<?php
print "<p>La raíz cuadrada de 25 es " . pow(25, 1 / 2) . "</p>\n";
print "\n";
print "<p>La raíz cuadrada de 25 es " . pow(25, 0.5) . "</p>\n";
print "\n";
print "<p>La raíz cuadrada de 25 es " . 25 ** (1 / 2) . "</p>\n";
print "\n";
print "<p>La raíz cuadrada de 25 es " . 25 ** 0.5 . "</p>\n";
print "\n";
print "<p>La raíz cúbica de 1000 es " . pow(1000, 1 / 3) . "</p>\n";
print "\n";
print "<p>La raíz cúbica de 1000 es " . 1000 ** (1 / 3) . "</p>\n";
?>

<?php
print "<p>La raíz cuadrada de 25 es " . sqrt(25) . "</p>\n";
?>

<?php
print "<p>El máximo es " . max(20, 40, 25.1, 14.7) . "</p>\n";
?>

<?php
print "<p>El mínimo es " . min(20, 40, 25.1, 14.7) . "</p>\n";
?>

<?php
$datos = [20, 40, 25.1, 14.7];
print "<p>El mínimo es " . min($datos) . "</p>\n";
?>

<?php
print "<p>" . number_format(1300, 5) . "</p>\n";
?>
<?php
print "<p>" . number_format(123456.789, 2) . "</p>\n";
?>
<?php
print "<p>" . number_format(123456789123, 0, ",", ".") . "</p>\n";
?>
<?php
print "<p>" . number_format(123456789123456.789, 2, ",", ".") . "</p>\n";
?>

<?php
print "<p>" . mt_rand(1, 6) . "</p>\n";
print "<p>" . mt_rand(1, 6) . "</p>\n";
print "<p>" . mt_rand(1, 6) . "</p>\n";
?>

<?php
print "<p>" . rand(-10, 10) . "</p>\n";
print "<p>" . rand(-10, 10) . "</p>\n";
print "<p>" . rand(-10, 10) . "</p>\n";
?>

<?php
print "<p>" . mt_getrandmax() . "</p>\n";
print "<p>" . mt_rand() . "</p>\n";
print "<p>" . mt_rand() . "</p>\n";
?>

<?php
print "<p>" . getrandmax() . "</p>\n";
print "<p>" . rand() . "</p>\n";
print "<p>" . rand() . "</p>\n";
?>

<?php
print "<p>" . PHP_INT_MAX . "</p>";
print "<p>" . rand(100000, 200000) . "</p>\n";
print "<p>" . mt_rand(100000000000, 200000000000) . "</p>\n";
?>

</body>
</html>
    