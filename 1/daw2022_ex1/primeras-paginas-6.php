<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Código de color.
    Primeras páginas. Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Código de color</h1>

  <p>Actualice la página para mostrar un nuevo valor.</p>

<?php
$rojo=rand(0,255);
$verde=rand(0,255);
$azul=rand(0,255);
?>
<?php
print "<p style=\"background-color: rgb($rojo,$verde,$azul)\"> bos dias </p>\n";
?>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
