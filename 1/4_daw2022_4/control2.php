<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>
    
<!-- ESTRUCTURAS DE CONTROL -->

<?php
/** TESTIGO */
print "<p>Comienzo</p>\n";
$hayCinco = false;
for ($i = 0; $i < 3; $i++) {
    $dado = rand(1, 6);
    print "<p>Tirada de dado: $dado</p>\n";
    if ($dado == 5) {
        $hayCinco = true;
    }
}
if ($hayCinco) {
    print "<p>Ha salido al menos un 5.</p>\n";
} else {
    print "<p>No ha salido ningún 5.</p>\n";
}
print "<p>Final</p>\n";
?>



<?php
/** CONTADOR */
print "<p>Comienzo</p>\n";
$cuenta = 0;
for ($i = 0; $i < 3; $i++) {
    $dado = rand(1, 6);
    print "<p>Tirada de dado: $dado</p>\n";
    if ($dado == 5) {
        $cuenta++;
    }
}
print "<p>Han salido $cuenta cinco(s).</p>\n";
print "<p>Final</p>\n";
?>



<?php
/** ACUMULADOR */

print "<p>Comienzo</p>\n";
$total = 0;
for ($i = 0; $i < 3; $i++) {
    $dado = rand(1, 6);
    print "<p>Tirada de dado: $dado</p>\n";
    $total = $total + $dado;
}
print "<p>Ha obtenido $total puntos.</p>\n";
print "<p>Final</p>\n";
?>


</body>
</html>