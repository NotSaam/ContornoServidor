<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

</body>
</html>
<?php
//este código non é valido ainda que a paxina se vexa mais ou menos ben
//xa que crea unha entidade caracter no medio e o html non estaría ben formado.
$nombre = (isset($_REQUEST["nombre"]))
    ? trim(strip_tags($_REQUEST["nombre"]))
    : "";

if ($nombre == "") {
    print "<p>No ha escrito ningún nombre</p>\n";
} else {
    print "<p>Su nombre es $nombre</p>\n";
}
?>

<?php //deste xeito si que está ben, xa que utiliza a notacion de entidades.
$nombre = (isset($_REQUEST["nombre"]))
    ? trim(strip_tags($_REQUEST["nombre"]))
    : "";
$nombre = str_replace('&', '&amp;', $nombre);

if ($nombre == "") {
    print "<p>No ha escrito ningún nombre</p>\n";
} else {
    print "<p>Su nombre es $nombre</p>\n";
}
?>

<?php //se no formulario, nos valores, ven unha comilla dobre ou simple, esto falla.
$nombre = (isset($_REQUEST["nombre"]))
    ? trim(strip_tags($_REQUEST["nombre"]))
    : "";

if ($nombre == "") {
    print "<p>No ha escrito ningún nombre</p>\n";
} else {
    print "<p>Corrija: <input type=\"text\" value=\"$nombre\"></p>\n";
}
?>

<?php //deste xeito amañase o tema de que veñan comillas dobres ou simples no texto
$nombre = (isset($_REQUEST["nombre"]))
    ? trim(strip_tags($_REQUEST["nombre"]))
    : "";
$nombre = str_replace('"', '&quot;', $nombre);

if ($nombre == "") {
    print "<p>No ha escrito ningún nombre</p>\n";
} else {
    print "<p>Corrija: <input type=\"text\" value=\"$nombre\"></p>\n";
}
?>

<?php //solventa moitos dos problemas anterioes.
$nombre = (isset($_REQUEST["nombre"]))
    ? htmlspecialchars(trim(strip_tags($_REQUEST["nombre"])), ENT_QUOTES, "UTF-8")
    : "";

if ($nombre == "") {
    print "<p>No ha escrito ningún nombre</p>\n";
} else {
    print "<p>Corrija: <input type=\"text\" value=\"$nombre\"></p>\n";
}
?>