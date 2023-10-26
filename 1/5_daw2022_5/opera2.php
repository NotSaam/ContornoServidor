<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
$nombre = "Pepe";

if ($nombre == "Juan") {
  print "<p>Tu nombre es Juan.</p>\n";
}

if ($nombre != "Juan") {
  print "<p>Tu nombre no es Juan.</p>\n";
}
?>

<?php
$nombrePadre = "Pepe";
$nombreHijo  = "Pepe";

if ($nombrePadre == $nombreHijo) {
  print "<p>El hijo se llama como el padre.</p>\n";
}

if ($nombrePadre != $nombreHijo) {
  print "<p>El hijo no se llama como el padre.</p>\n";
}
?>


<?php
$nombre = "Pepe";

if ("Juan" == $nombre) {
  print "<p>Tu nombre es Juan.</p>\n";
}

if ("Juan" != $nombre) {
  print "<p>Tu nombre no es Juan.</p>\n";
}
?>

<?php
$entero = 6;
$cadena = "6";
$decimal = 6.0;

if ($entero == $cadena && $entero == $decimal) {
    print "<p>$entero, $cadena y $decimal son iguales.</p>\n";
} else {
    print "<p>$entero, $cadena y $decimal son distintos.</p>\n";
}
?>

<?php
$entero = 5;
$decimal = 5.0;

if ($entero == $decimal) {
  print "<p>$entero y $decimal son iguales.</p>\n";
} else {
  print "<p>$entero y $decimal son distintos.</p>\n";
}
?>

<?php
$numero = 5;
$cadena = "5";

if ($numero == $cadena) {
  print "<p>$numero y $cadena son iguales.</p>\n";
} else {
  print "<p>$numero y $cadena son distintos.</p>\n";
}
?>

<?php
$numero = 4 + 1;
$cadena = "4 + 1";

if ($numero == $cadena) {
  print "<p>$numero y $cadena son iguales.</p>\n";
} else {
  print "<p>$numero y $cadena son distintos.</p>\n";
}
?>

<?php
$numero = 5;
$cadena = "5abc def";

if ($numero == $cadena) {
  print "<p>$numero y $cadena son iguales.</p>\n";
} else {
  print "<p>$numero y $cadena son distintos.</p>\n";
}
?>

<?php
$numero = 5;
$cadena = "5+1";

if ($numero == $cadena) {
  print "<p>$numero y $cadena son iguales.</p>\n";
} else {
  print "<p>$numero y $cadena son distintos.</p>\n";
}
?>

<?php
$numero = 5;
$texto = "5";

if ($numero == $texto) {
    print "<p>Las variables son iguales.</p>\n";
}

if ($numero != $texto) {
    print "<p>Las variables no son iguales.</p>\n";
}
?>

<?php
$numero = 5;
$texto = "5";

if ($numero === $texto) {
    print "<p>Las variables son idénticas.</p>\n";
}

if ($numero !== $texto) {
    print "<p>Las variables no son idénticas.</p>\n";
}
?>

<?php
  print "<p>true && true = " . var_export(true && true, 1) . "</p>\n";
  print "\n";
  print "<p>true && false = " . var_export(true && false, 1) . "</p>\n";
  print "\n";
  print "<p>false && true = " . var_export(false && true, 1) . "</p>\n";
  print "\n";
  print "<p>false && false = " . var_export(false && false, 1) . "</p>\n";
  print "\n";
?>

<?php
  print "<p>true || true = " . var_export(true || true, 1) . "</p>\n";
  print "\n";
  print "<p>true || false = " . var_export(true || false, 1) . "</p>\n";
  print "\n";
  print "<p>false || true = " . var_export(false || true, 1) . "</p>\n";
  print "\n";
  print "<p>false || false = " . var_export(false || false, 1) . "</p>\n";
  print "\n";
?>

<?php
  print "<p>!true = " . var_export(!true, 1) . "</p>\n";
  print "\n";
  print "<p>!false = " . var_export(!false, 1) . "</p>\n";
  print "\n";
?>

<?php
print "<p>!true && false = " . var_export(!true && false, 1) . "</p>\n";
print "\n";
print "<p>(!true) && false = " . var_export((!true) && false, 1) . "</p>\n";
print "\n";
print "<p>!(true && false) = " . var_export(!(true && false), 1) . "</p>\n";
print "\n";
?>

<?php
print "<p>!false || true = " . var_export(!false || true, 1) . "</p>\n";
print "\n";
print "<p>(!false) || true = " . var_export((!false) || true, 1) . "</p>\n";
print "\n";
print "<p>!(false || true) = " . var_export(!(false || true), 1) . "</p>\n";
print "\n";
?>

<?php
print "<p>false && true || true = " . var_export(false && true || true, 1) . "</p>\n";
print "\n";
print "<p>(false && true) || true = " . var_export((false && true) || true, 1) . "</p>\n";
print "\n";
print "<p>false && (true || true) = " . var_export(false && (true || true), 1) . "</p>\n";
print "\n";
?>

<?php
print "<p>true || true && false = " . var_export(true || true && false, 1) . "</p>\n";
print "\n";
print "<p>true || (true && false) = " . var_export(true || (true && false), 1) . "</p>\n";
print "\n";
print "<p>(true || true) && false = " . var_export((true || true) && false, 1) . "</p>\n";
print "\n";
?>

<?php
$a = 10;
$b = 20;

if ($a == 10 && $b == 20) {
print "<p>\$a y \$b son iguales.</p>\n";
} else {
print "<p>\$a y \$b son distintos.</p>\n";
}
?>

<?php
$var1 = true;
$var2 = false;
$todo = $var1 && $var2;
if ($todo) {
    print "<p>verdadero</p>\n";
} else {
    print "<p>falso</p>\n";
}
?>
<?php
$var1 = true;
$var2 = false;
$todo = $var1 and $var2;
if ($todo) {
    print "<p>verdadero</p>\n";
} else {
    print "<p>falso</p>\n";
}
?>

<?php
$var1 = true;
$var2 = false;
$todo = ($var1 and $var2);
if ($todo) {
    print "<p>verdadero</p>\n";
} else {
    print "<p>falso</p>\n";
}
?>

</body>
</html>
    