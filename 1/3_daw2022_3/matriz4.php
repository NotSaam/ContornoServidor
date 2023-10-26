<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
//engadimos valores a unha matriz... e colocase na posición que lle toca
$nombres = ["Alba", "Bernardo"];

$nombres[] = "Carlos";

print "<p>$nombres[1]</p>\n";
print "\n";
print "<p>$nombres[2]</p>\n";
?>

<?php
$nombres = [4 => "Alba", 6 => "Bernardo"];

$nombres[] = "Carlos";

print "<p>$nombres[7]</p>\n";
?>

<?php
$nombres = ["a" => "Alba", "b" => "Bernardo"];

$nombres[] = "Carlos";

print "<p>$nombres[0]</p>\n";
?>

<?php
$nombres = ["Alba", "Bernardo"];

$nombres[3] = "Carlos";

print "<p>$nombres[1]</p>\n";
print "<p>$nombres[3]</p>\n";
?>

</body>
</html>
    