<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<!-- CONSNTANTES -->

<?php

//https://www.mclibre.org/consultar/php/lecciones/php-matrices.html

define("PI", 3.14);
print "<p>El valor de pi es " . PI . "</p>\n";
?>
<?php
define("AUTOR", "Bartolomé Sintes Marco");
print "<p>Autor: " . AUTOR . "</p>\n";
?>
<?php
const PI = 3.14;
print "<p>El valor de pi es " . PI . "</p>\n";
?>
<?php
const AUTOR = "Bartolomé Sintes Marco";
print "<p>Autor: " . AUTOR . "</p>\n";
?>
<?php
define("PI", 3.14);
print "<p>El valor de pi es PI</p>\n";         // El valor NO se sustituye
print "<p>El valor de pi es {PI}</p>\n";       // El valor NO se sustituye
print "<p>El valor de pi es " . PI . "</p>\n"; // El valor SÍ se sustituye
?>
<?php
define("PI", 3.14);
define("pi", 3.141592);
print "<p>El valor de pi es " . PI . "</p>";
print "<p>El valor de pi es " . pi . "</p>";
?>


<?php
//usar define para definir constantes non é o mesmo que facelo coa propiedad CONST.
$decimales = 6;
if ($decimales == 6) {
    define("PI", 3.141592);
} else {
    define("PI", 3.14);
}
print "<p>El valor de pi es " . PI . "</p>\n";
?>



</body>
</html>
    