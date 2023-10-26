<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
print "<ul><li>Uno</li><li>Dos</li></ul>\n";
?>
 
 <?php
print "<ul>";
print "<li>Uno</li>";
print "<li>Dos</li>";
print "</ul>\n";
?>


<?php
print "<ul>\n  <li>Uno</li>\n  <li>Dos</li>\n</ul>\n";
?>


<?php
print "<ul>
  <li>Uno</li>
  <li>Dos</li>
</ul>\n";
?>

<?php
print "<ul>\n";
print "  <li>Uno</li>\n";
print "  <li>Dos</li>\n";
print "</ul>\n";
?>

<?php
//concatenar cadeas.
print "<p>Pasa" . "tiempos</p>\n";
?>
<?php
  print "<p>3 * 5 + 12 = " . (3 * 5 + 12) . "</p>\n";
?>

<?php
//rand é unha función que devolve un numero aleatroio.
  print "<p>Número al azar entre 1 y 10: " . rand(1, 10) . "</p>\n";
?>

<?php
$cadena = "Pasa";
print "<p>$cadena</p>\n";
$cadena .= "tiempos";
print "<p>$cadena</p>\n";
?>



</body>
</html>