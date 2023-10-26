<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    La carta más alta.
    Variables. Sin formularios.
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>La carta más alta</h1>

  <p>Actualice la página para mostrar un nuevo trío de cartas.</p>

<?php
$a      = rand(1, 10);
$b      = rand(1, 10);
$c      = rand(1, 10);
$maximo = max($a, $b, $c);

print "  <p>\n";
print "    <img src=\"img/c$a.svg\" alt=\"$a\" height=\"200\">\n";
print "    <img src=\"img/c$b.svg\" alt=\"$b\" height=\"200\">\n";
print "    <img src=\"img/c$c.svg\" alt=\"$c\" height=\"200\">\n";
print "  </p>\n";
print "\n";
print "  <p>La carta más alta es un <strong>$maximo</strong>.</p>\n";
?>

</body>
</html>
