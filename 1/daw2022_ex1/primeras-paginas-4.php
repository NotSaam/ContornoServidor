<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Dado digital.
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Dado digital</h1>

  <p>Actualice la página para mostrar un nuevo valor.</p>

<?php
$dado=rand(1,6);
print "<p style=\"border: black 2px solid; padding: 10px; width:50px; font-size: 300%\"> $dado </p>";
?>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
