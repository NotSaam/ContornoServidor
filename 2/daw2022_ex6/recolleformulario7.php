<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>


<?php
//esto funciona correctamente se dende o formulario ven o campo acepto marcado...
// se dende o formulario non o marcaron, dará erro porque ese arrainon ten a posicion definida.
print "<pre>";
print_r($_REQUEST); 
print "</pre>\n";

if ($_REQUEST["acepto"] == "on") {
    print "<p>Desea recibir información</p>\n";
} else {
    print "<p>No desea recibir información</p>\n";
}
?>

<!-- SOLUCION AO TEMA DE QUE OS CMAPOS NON VEÑAN MARCADOS OU NO FORMULARO -->

<?php
//comprobamos coa funcion isset se ese campo está definido.
if (isset($_REQUEST["acepto"])) {
    print "<p>Desea recibir información</p>\n";
} else {
    print "<p>No desea recibir información</p>\n";
}
?>


</body>
</html>