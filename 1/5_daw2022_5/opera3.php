<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
$cadena1 = "1234567";
$cadena2 = "abcdefg";
$patron = "/^[[:digit:]]+$/";

if (preg_match($patron, $cadena1)) {
    print "<p>La cadena $cadena1 son sólo números.</p>\n";
} else {
    print "<p>La cadena $cadena1 no son sólo números.</p>\n";
}

if (preg_match($patron, $cadena2)) {
    print "<p>La cadena $cadena2 son sólo números.</p>\n";
} else {
    print "<p>La cadena $cadena2 no son sólo números.</p>\n";
}
?>



<?php
$cadena = "aaAA";
$patron1 = "/^[a-z]+$/";
$patron2 = "/^[a-z]+$/i";

if (preg_match($patron1, $cadena)) {
    print "<p>La cadena $cadena son sólo letras minúsculas.</p>\n";
} else {
    print "<p>La cadena $cadena no son sólo letras minúsculas.</p>\n";
}

if (preg_match($patron2, $cadena)) {
    print "<p>La cadena $cadena son sólo letras minúsculas o mayúsculas.</p>\n";
} else {
    print "<p>La cadena $cadena no son sólo letras minúsculas o mayúsculas.</p>\n";
}
?>



<?php
$cadena = "Esto es una cadena de prueba";
$patron = "/de/";
$encontrado = preg_match_all($patron, $cadena, $coincidencias, PREG_OFFSET_CAPTURE);

if ($encontrado) {
    print "<pre>"; print_r($coincidencias); print "</pre>\n";
    print "<p>Se han encontrado $encontrado coincidencias.</p>\n";
    foreach ($coincidencias[0] as $coincide) {
        print "<p>Cadena: '$coincide[0]' - Posición: $coincide[1]</p>\n";
    }
} else {
    print "<p>No se han encontrado coincidencias.</p>\n";
}
?>




</body>
</html>
    