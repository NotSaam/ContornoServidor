<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Círculos de color.
    Variables. Sin formularios.
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Círculos de color</h1>

  <p>Actualice la página para mostrar tres nuevos círculos.</p>

<?php
$rojo  = rand(64, 255);
$verde = rand(64, 255);
$azul  = rand(64, 255);

print "  <p>\n";
print "    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n";
print "      width=\"400\" height=\"300\" viewBox=\"-200 -120 400 300\">\n";
print "      <text x=\"100\" y=\"-90\" text-anchor=\"start\" font-size=\"20\">Verde: $verde</text>\n";
print "      <text x=\"-100\" y=\"-90\" text-anchor=\"end\" font-size=\"20\">Azul: $azul</text>\n";
print "      <text x=\"0\" y=\"155\" text-anchor=\"middle\" font-size=\"20\">Rojo: $rojo</text>\n";
print "      <path fill=\"rgb($rojo, 0, 0)\" stroke=\"black\" stroke-width=\"1\" d=\"M -73.85 36.92 A 75 75, 0, 1, 0, 73.85 36.92 A 75 75 0, 0, 1, 0 33.44 A 75 75 0, 0, 1, -73.85 36.92\" />\n";
print "      <path fill=\"rgb(0, $verde, 0)\" stroke=\"black\" stroke-width=\"1\" d=\"M 73.85 36.92 A 75 75, 0, 1, 0, 0 -93.44 A 75 75 0, 0, 1, 33.85 -16.92 A 75 75 0, 0, 1, 73.85 36.92\" />\n";
print "      <path fill=\"rgb(0, 0, $azul)\" stroke=\"black\" stroke-width=\"1\" d=\"M 0 -93.44 A 75 75, 0, 1, 0, -73.85 36.92 A 75 75 0, 0, 1, -33.85 -16.92 A 75 75 0, 0, 1, 0 -93.44\" />\n";
print "      <path fill=\"rgb($rojo, $verde, 0)\" stroke=\"black\" stroke-width=\"1\" d=\"M 73.85 36.92 A 75 75, 0, 0, 0, 33.85 -16.92 A 75 75 0, 0, 1, 0 33.44 A 75 75 0, 0, 0, 73.85 36.92\" />\n";
print "      <path fill=\"rgb($rojo, 0, $azul)\" stroke=\"black\" stroke-width=\"1\" d=\"M -73.85 36.92 A 75 75, 0, 0, 0, 0 33.44 A 75 75 0, 0, 1, -33.85 -16.92 A 75 75 0, 0, 0, -73.85 36.92\" />\n";
print "      <path fill=\"rgb(0, $verde, $azul)\" stroke=\"black\" stroke-width=\"1\" d=\"M 0 -93.44 A 75 75, 0, 0, 0, -33.85 -16.92 A 75 75 0, 0, 1, 33.85 -16.92 A 75 75 0, 0, 0, 0 -93.44\" />\n";
print "      <path fill=\"rgb($rojo, $verde, $azul)\" stroke=\"black\" stroke-width=\"1\" d=\"M 0 33.44 A 75 75, 0, 0, 0, 33.85 -16.92 A 75 75 0, 0, 0, -33.85 -16.92 A 75 75 0, 0, 0, 0 33.44\" />\n";
print "    </svg>\n";
print "  </p>\n";
?>

  
</body>
</html>
