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
print "<p> O seu nome ven sendo:-> $_REQUEST[nombre]</p>\n";
//no caso de que no campo do formulario non se metera nada de informacion
// quedaría o texto o seu nome ven sendo.... en blanco...
?>

<?php #podemos solventar o problema anterior, facendo unha comprobacion previa
//para saber se o valor ven ou non ven definido.
print "<pre>"; 
print_r($_REQUEST); 
print "</pre>\n";

if ($_REQUEST["nombre"] == "") {
    print "<p>No ha escrito ningún nombre</p>";
} else {
    print "<p>Su nombre es $_REQUEST[nombre]</p>\n";
}
?>

</body>
</html>