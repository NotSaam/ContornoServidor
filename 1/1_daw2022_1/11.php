<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
  echo isset($x); //vai escribir falso poruqe a variable non ta definida.
  $x="maximino";
  echo $x;
  echo "<br>";
  echo isset($x); //pintará true porque a variable si que ta definida.

?>



</body>
</html>