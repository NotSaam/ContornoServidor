<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>
<?php //pintamos directamente o que recibimos, sen comprobaciós...
print "<pre>"; print_r($_REQUEST); print "</pre>\n";

print "<p>Su nombre es $_REQUEST[nombre]</p>\n";
?>
<?php
print "<pre>"; print_r($_REQUEST); print "</pre>\n";

print "<p>Su nombre es $_REQUEST[nombre]</p>\n";
print "<p>Su nombre es " . strip_tags($_REQUEST["nombre"]) . "</p>\n";
?>


<?php
print "<pre>"; print_r($_REQUEST); print "</pre>\n";

if ($_REQUEST["nombre"] == "") {
    print "<p>No ha escrito ningún nombre</p>";
} else {
    print "<p>Su nombre es $_REQUEST[nombre]</p>\n";
}
?>
</body>
</html>