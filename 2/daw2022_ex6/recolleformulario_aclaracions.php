<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
//recolle os datos do formulario1 e pintaos...
print "<pre>";
print_r($_REQUEST);//$_REQUEST ten todos os valores recibidos do formulario
print "</pre>";
?>

<?php #codigo correcto.
print "<p>Su nombre es $_REQUEST[nombre]</p>\n";
?>
<?php #codigo incorrecto, non podemos usar comillas dobres nin simpres para facer referencia
//print "<p>Su nombre es $_REQUEST["nombre"]</p>\n";
?>
<?php #codigo incorrecto, non podemos usar comillas dobres nin simpres para facer referencia
//print "<p>Su nombre es $_REQUEST['nombre']</p>\n";
?>



<?php #codigo correcto.
print "<p>Su nombre es " . $_REQUEST["nombre"] . "</p>\n";
?>
<?php #codigo correcto.
print "<p>Su nombre es " . $_REQUEST['nombre'] . "</p>\n";
?>
<?php #codigo INCORRECTO, nestes casos, precisa comillas.
//print "<p>Su nombre es " . $_REQUEST[nombre] . "</p>\n";
?>
<?php #codigo incorrecto, non se pode escapar nada dentro dunha matriz.
//print "<p>Su nombre es $_REQUEST[\"nombre\"]</p>\n";
?>
<?php #codigo incorrecto, non se pode escapar nada dentro dunha matriz.
//print "<p>Su nombre es " . $_REQUEST[\'nombre\'] . "</p>\n";
?>




</body>
</html>