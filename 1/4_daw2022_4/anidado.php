<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<!-- BUCLES ANIDADOS -->

<?php
print "<p>Comienzo</p>\n";
for ($i = 1; $i < 3; $i++) {               // Bucle exterior

    for ($j = 10; $j < 12; $j++) {         // Bucle interior
        print "<p>i: $i -- j: $j</p>\n";
    }

}

print "<p>Final</p>\n";
?>


<?php
//BUCLE ANIDADO CON VARIABLES INDEPENDENTES
print "<p>Comienzo</p>\n";
for ($i = 1; $i < 3; $i++) {
    for ($j = 0; $j < $i; $j++) {
        print "<p>i: $i -- j: $j</p>\n";
    }
}
print "<p>Final</p>\n";
?>


















</body>
</html>
    