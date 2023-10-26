<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<!-- MATRICES ASOCIATIVAS........ -->
<?php
$cuadrados = [3 => 9, 5 => 25, 10 => 100];

print "<p>El cuadrado de 3 es $cuadrados[3]</p>\n";
//OLLO, cando poñemos cuadrados[3] estamso buscando na matriz o elemento que tñea de 
// indice o valor 3, neste caso, o primeiro, e de ahi que pintaría 9
?>

<?php
$edades = ["Andrés" => 20, "Bárbara" => 19, "Camilo" => 17];

//print "<p>Bárbara tiene $edades["Bárbara"] años</p>\n";
// o anterior daría erro porque non pode levar as comillas.
?>

<?php
$edades = ["Andrés" => 20, "Bárbara" => 19, "Camilo" => 17];

print "<p>Bárbara tiene $edades[Bárbara] años</p>\n";
?>

<?php
//nas asociativas, podemos facer referencia a posicion que ocupa no arrai
//polo indice de posicion...
$edades = ["Andrés" => 20, "Bárbara" => 19, "Camilo" => 17];

print "<p>Bárbara tiene " . $edades["Bárbara"] . " años</p>\n";
print "\n";
print "<p>Camilo tiene {$edades["Camilo"]} años</p>\n";
?>



</body>
</html>
    