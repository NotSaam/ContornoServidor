<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
  //definir constantes
  define ("PI",3.1416);
  echo PI; // sen $, as contastantes non levan $
 echo "<br";
  //tamen se pode definir con const
  const PI=3.1416;
  echo PI;
  echo "<br";


  // concepto de variables de variables....

  $x="variable1";
  $$x=5;
  echo $variable1; //vai escribir 5 xa que se creou unha variable ao facer $$x chamada varaible1

  

?>



</body>
</html>