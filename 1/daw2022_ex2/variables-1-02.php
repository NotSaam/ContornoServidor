<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Círculo de color.
    Variables. Sin formularios.
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Círculo de color</h1>

  <p>Actualice la página para mostrar un nuevo círculo.</p>

<?php
$color = "rgb(" . rand(0, 255) . ", " . rand(0, 255) . ", " . rand(0, 255) . ")";

print "  <p>Color: $color</p>\n";
print "\n";
print "  <p>\n";
print "    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n";
print "      width=\"100\" height=\"100\">\n";
print "      <circle cx=\"50\" cy=\"50\" r=\"50\" fill=\"$color\" />\n";
print "    </svg>\n";
print "  </p>\n";
?>

  
</body>
</html>
