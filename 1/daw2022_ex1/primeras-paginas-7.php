<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Saludo.
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Saludo</h1>
   <?php
   $tamano=rand(200,800);
   ?>
   <?php
   print "<p><span style=\"border:_black 2px solid; padding:10px; font-size:".$tamano."%\"> hola </span></p>\n";
?>
<?php
print "  <p><span style=\"border: black 2px solid; padding: 10px; font-size: ". rand(200, 800) . "%\">¡Hola!</span></p>\n";
?>


  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
