<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>
    
<!-- VARIABLES LOXICAS -->

<?php
/**Los tipos de variables básicos son los siguientes:

lógicas o booleanas (boolean)
enteros (integer)
decimales (float)
cadenas (string)
matrices (arrays)
Existen además los tipos:

objetos (object)
recursos (resource)
nulo (null)
*/
?>

<?php
$autorizado = true;

if ($autorizado == true) { //OLLO CO DOBRE IGUAL, HAI QUE POÑER DOBRE IGUAL E NON =
    print "<p>Usted está autorizado.</p>\n";
}

if ($autorizado == false) {
    print "<p>Usted no está autorizado.</p>\n";
}
?>

<?php
$autorizado = true;

if ($autorizado) { // equivale a $autorizado == true
    print "<p>Usted está autorizado.</p>\n";
}

if (!$autorizado) { // equivale a $autorizado == false
    print "<p>Usted no está autorizado.</p>\n";
}
?>

<?php
$autorizado = false;

if ($autorizado) {  // equivale a $autorizado == true
    print "<p>Usted está autorizado.</p>\n";
}

if (!$autorizado) { // equivale a $autorizado == false
    print "<p>Usted no está autorizado.</p>\n";
}
?>









</body>
</html>