<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>


<?php
//definimos unha variable e queremos ver o seu valor, temos que usar comillas dobres.
$cadena = "Hola";
print "<p>La variable contiene el valor: $cadena</p>";
?>

<?php
//se metemos un salto de liña entre comillas dobres, teno en conta, ente comillas simpres, non.
print "<pre>Esto está en\ndos líneas.</pre>";
?>

<?php
print '<pre>Esto está en\ndos líneas.</pre>';
?>

<?php
//podemos xerar codigo html dende php e ahí si que son importantes as comillas simples e dobres.
print "<p><strong style='color: red;'>Hola</strong></p>";
?>
<?php
print '<p><strong style="color: red;">Hola</strong></p>';
?>



</body>
</html>