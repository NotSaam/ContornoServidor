<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>
    
<!-- VARIABLES DE CADEAS -->

<?php
$saludo = "Hola, Don Pepito";
print "<p>$saludo</p>\n";

$saludo[0] = "M";
print "<p>$saludo</p>\n";

$saludo[14] = "n";
print "<p>$saludo</p>\n";
?>

<?php
$saludo = "Hola, Don Pepito";
print "<p>$saludo</p>\n";

$saludo[16] = "n";
print "<p>$saludo</p>\n";

$saludo[25] = "!";
print "<pre>$saludo</pre>\n";
?>

<?php
$saludo = "Hola, Don Pepito";
print "<p>$saludo</p>\n";

$saludo[4] = "";
print "<p>$saludo</p>\n";
?>


<!-- VARIABLES LOXICAS -->

<?php
$autorizado = 5;

if ($autorizado == true) {
    print "<p>Usted está autorizado.</p>\n";
}

if ($autorizado == false) {
    print "<p>Usted no está autorizado.</p>\n";
}
?>
<?php
$autorizado = 0.0;

if ($autorizado == true) {
    print "<p>Usted está autorizado.</p>\n";
}

if ($autorizado == false) {
    print "<p>Usted no está autorizado.</p>\n";
}
?>

<?php
$autorizado = "a ver qué pasa";

if ($autorizado == true) {
    print "<p>Usted está autorizado.</p>\n";
}

if ($autorizado == false) {
    print "<p>Usted no está autorizado.</p>\n";
}
?>

<?php
$autorizado = "";

if ($autorizado == true) {
    print "<p>Usted está autorizado.</p>\n";
}

if ($autorizado == false) {
    print "<p>Usted no está autorizado.</p>\n";
}
?>

<?php
$autorizado = "NO";

if ($autorizado == true) {
    print "<p>Usted está autorizado.</p>\n";
}

if ($autorizado == false) {
    print "<p>Usted no está autorizado.</p>\n";
}
?>

<?php
$autorizado = "false";

if ($autorizado == true) {
    print "<p>Usted está autorizado.</p>\n";
}

if ($autorizado == false) {
    print "<p>Usted no está autorizado.</p>\n";
}
?>

<?php
$autorizado["nombre"] = "Pepe";

if ($autorizado == true) {
    print "<p>Usted está autorizado.</p>\n";
}

if ($autorizado == false) {
    print "<p>Usted no está autorizado.</p>\n";
}
?>

<?php
$autorizado["nombre"] = "";

if ($autorizado == true) {
    print "<p>Usted está autorizado.</p>\n";
}

if ($autorizado == false) {
    print "<p>Usted no está autorizado.</p>\n";
}
?>

</body>
</html>