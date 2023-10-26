<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>
<?php
print "<pre>"; print_r($_REQUEST); print "</pre>\n";


if (isset($_REQUEST["nombre"])) {
    $nombre = trim(strip_tags($_REQUEST["nombre"]));
} else {
    $nombre = "";
}
if ($nombre == "") {
    print "<p>No ha escrito ningún nombre</p>\n";
} else {
    print "<p>Su nombre es $nombre</p>\n";
}
?>

<?php
print "<pre>"; print_r($_REQUEST); print "</pre>\n";

$nombre = (isset($_REQUEST["nombre"]))
    ? trim(strip_tags($_REQUEST["nombre"]))
    : "";
if ($nombre == "") {
    print "<p>No ha escrito ningún nombre</p>\n";
} else {
    print "<p>Su nombre es $nombre</p>\n";
}
?>
</body>
</html>