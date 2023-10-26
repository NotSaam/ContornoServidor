<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>
    <!-- UNION DE MATRICES -->
<?php
$nombres_1 = ["Alba", "Bernardo"];

$nombres_2 = ["Antonio", "Bárbara", "Carlos"];

print "<pre>"; print_r($nombres_1 + $nombres_2); print "</pre>\n";
print "\n";
print "<pre>"; print_r($nombres_2 + $nombres_1); print "</pre>\n";
?>



<?php
$nombres_1 = [0 => "Alba", 2 => "Bernardo"];

$nombres_2 = [1 => "Antonio", 3 => "Bárbara", 5 => "Carlos"];

print "<pre>"; print_r($nombres_1 + $nombres_2); print "</pre>\n";
print "\n";
print "<pre>"; print_r($nombres_2 + $nombres_1); print "</pre>\n";
?>


<?php
$nombres_1 = ["Alba", "Bernardo"];

$nombres_2 = ["Antonio", "Bárbara", "Carlos"];

$nombres_1 += $nombres_2;

print "<pre>"; print_r($nombres_1); print "</pre>\n";
?>

<?php
$nombres_1 = ["Alba", "Bernardo"];

$nombres_2 = ["Antonio", "Bárbara", "Carlos"];

$nombres_2 += $nombres_1;

print "<pre>"; print_r($nombres_2); print "</pre>\n";
?>

</body>
</html>
    