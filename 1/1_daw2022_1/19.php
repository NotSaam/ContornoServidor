<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
//OPERADORES DE BIR.

$x=97; //$x en binario é 01100001
$y=74; //$y en binario é 01001100
echo $x&$y; //resulta 01000000=64
echo "\n";
echo $x|$y; //resulta 01101101=107
echo "\n";
$x=$x>>2; //ahora $x vale 00011000 = 24;
echo $x;
echo "\n";
$y="y"<<2; //ahor a$y vale 100110000=296
echo $y;
echo "\n";
//CONCATENACION

$x="hola";
$y =" a todo el mundo";
$z=$x.$y; //$z vale "hola a todo el mundo

$texto="hola";
$texto .="a todo el mundo amigos y ";
$texto .=" amigas";


?>



</body>
</html>