<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
  $nome="Xan Fernandez";
  echo "nome"."<br>";
  echo "$nome"."<br>";

  $frase='antonio dixo " ola " ao chegar';
  echo "$frase"."<br>";

//se queremos usar comillas dobre sempre, daquela hai que escapar o texto...
$frase="Antonio dixo \"ola\" ao chegar a casa";
echo $frase."<br>";

//se queremos usar mezcladas as comillas dobres e simplres...
echo 'Antonio dixo \"ola\" ao chegar a casa ';
echo "<br>";

//dentro dun string, podese meter falores de variables para sustituir os valores...
$dias=15;
$texto="Faltan $dias para que rematen estas clases";
echo $texto;
echo "<br>";
//se queremos meter o $ dentro dun texto, que non forma parte dunha variable, hai que escapalo tamen...
$texto="o prezo do coche son 14000\$";
echo $texto;
echo "<br>";

//podemos sumar varios textos coa axuda do operador ., exemplo...
$nome="Antonio";
$apelidos="Sanchez Garcia";
echo "O Nome completo : ".$nome." e os apleidos son ".$apelidos;

//podemos traballar con valores booleanos..

$verdadeiro=true;
echo $verdadeiro;
echo "<br>";




?>



</body>
</html>