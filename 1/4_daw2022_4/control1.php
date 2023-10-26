<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>
    
<!-- ESTRUCTURAS DE CONTROL -->

<?php
print "<h1>Tirada de dado</h1>\n";
$dado = rand(1, 6);
print "<p>Ha sacado un $dado.</p>\n";
if ($dado == 6) {
    print "<p>¡Ha conseguido la máxima puntuación!</p>\n";
}
print "<p>¡Hasta la próxima!</p>\n";
?>

<?php
print "<h1>Tirada de dado</h1>\n";
$dado = rand(1, 6);
print "<p>Ha sacado un $dado.</p>\n";
if ($dado == 6) {
    print "<p>¡Ha conseguido la máxima puntuación!</p>\n";
}
print "<p>¡Hasta la próxima!</p>\n";
?>

<?php
print "<p>Comienzo</p>\n";
for ($i = 0; $i < 3; $i++) {
    print "<p>$i</p>\n";
}
print "<p>Final</p>\n";
?>


<?php
for ($contador = 0; $contador < 5; $contador++) {
    print "<p>$contador</p>\n";
}
?>

<?php
print "<p>Comienzo</p>\n";
for ($i = 1; $i < 6; $i = $i + 2) {
    print "<p>$i</p>\n";
}
print "<p>Final</p>\n";
?>

<?php
print "<p>Comienzo</p>\n";
for ($i = 10; $i > 5; $i = $i - 3) {
    print "<p>$i</p>\n";
}
print "<p>Final</p>\n";
?>


<?php
print "<p>Comienzo</p>\n";
for ($i = 1; $i < 6; $i = $i + 2) {
    print "<p>$i</p>\n";
    $i = $i + 3;
}
print "<p>Final</p>\n";
?>


</body>
</html>