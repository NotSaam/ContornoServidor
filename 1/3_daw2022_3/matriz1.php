<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<!-- MATRICES DE SEMPRE.... -->

<?php
// Notación compacta
$nombres = ["Ana", "Bernardo", "Carmen"];
?>

<?php
// Notación compacta
$nombres = ["Ana", "Bernardo", "Carmen", ];
?>

<?php
$nombres = ["Ana", "Bernardo", "Carmen"];

print "<p>$nombres[1]</p>\n";
print "<p>$nombres[0]</p>\n";
?>

<?php
$nombres = ["Ana", "Bernardo", "Carmen"];

print "<p>$nombres[1]</p>\n";

$nombres[1] = "David";

print "<p>$nombres[1]</p>\n";
//SE FACEMOS REFERENCIA A UNHA POSICION QUE NON EXISTE NA MATRIZ, DA ERRO.
?>

<?php
//definimos unha matriz vacia.
$nombres = [];
?>
<?php
//crea unha matriz dun elemento
$apellidos[1] = "García";

print "<p>$apellidos[1]</p>\n";
?>

</body>
</html>
    