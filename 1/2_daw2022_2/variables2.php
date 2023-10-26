<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
$numero = 5000;
$texto = "cinco mil";
$seEscribe = ["separado", "junto"];
print "<p>El número $numero se escribe $seEscribe[0]: $texto</p>\n";
?>

<?php
$nombre = "Don Pepito";
//ollo, temos unha matriz de dobre dimension...., o primeiro elemento sería ["hello","hola"]
$saludos = [["Hello", "Hola"], ["Goodbye", "Adios"]];
//print "<p>¡$saludos[0][1], $nombre! ¿Cómo está usted?</p>\n";
//este codigo da erro, non se pode chamar directamente ao valor dunha matriz multidimensiona.
?>

<?php
//con esta sintaxis, amañamos o problema anterior.
$nombre = "Don Pepito";
$saludos = [["Hello", "Hola"], ["Goodbye", "Adios"]];
print "<p>¡" . $saludos[0][1] . ", $nombre! ¿Cómo está usted?</p>\n";
?>


<?php
//con esta sintaxis, tamen se amaña o problema da lectura de arrais multidimensionais.
$nombre = "Don Pepito";
$saludos = [["Hello", "Hola"], ["Goodbye", "Adios"]];
print "<p>¡{$saludos[0][1]}, $nombre! ¿Cómo está usted?</p>\n";
?>

</body>
</html>