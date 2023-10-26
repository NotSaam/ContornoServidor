<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>


 <?php
  //as cadeas delimitanse por comillas dobres
 print "<p>Esto es una cadena.</p>\n";
 ?>

<?php
// ou por comillas simplres
print '<p>Esto es otra cadena.</p>\n';
//non se poden mixturar dobres e sinxelas.
?>

<?php
print "<p>Esto es una comilla simple: '</p>\n";
?>

<?php
print '<p>Esto es una comilla doble: "</p>\n';
?>

<?php
//se queremos usar o mesmo tipo de comilla, temos que escapar o valor
print "<p>Esto es una comilla simple: ' y esto una comilla doble: \"</p>";
?>

<?php
print '<p>Esto es una comilla simple: \' y esto una comilla doble: "</p>';
?>

<?php
print "<p>Esto es una comilla simple: \' y esto una comilla doble: \"</p>";
?>

<?php
print '<p>Esto es una comilla simple: \' y esto una comilla doble: \"</p>';
?>


</body>
</html>