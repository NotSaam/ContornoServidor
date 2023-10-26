<?php
/**
 * Primeras páginas. Sin formularios. 5 - primeras-paginas-5.php
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Dado digital gráfico.
    
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Dado digital gráfico chulada</h1>

  <p>Actualice la página para mostrar un nuevo valor.</p>

<?php

  $valor=rand(1,6);
?>
<img src="img/<?php print $valor.".svg";?>">
  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
