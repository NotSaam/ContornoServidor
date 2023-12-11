<?php
session_start()
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 5,Lista de palabras</title>
</head>
<body>
<h1>Lembra esta lista de palabras</h1>
<?php
include "practica5-lista.php";//cargamos a lista de palabras.
shuffle($lista);//revolvemos a lista
//recorremos as cinco primeiras palabras e as amosamos
$palabras=array(); //creamos o array vacio cando empezamos o xogo
for($i=0;$i<5;$i++){
    array_push($palabras,$lista[$i]); //metemos no arrai palabras as 5 primeiras baralladas.
    echo "<h2>".$lista[$i]."</h2>";
}
//as palabras coas que xogamos, gardamolas na sesion
$_SESSION["palabras"]=$palabras; //almacenamos o array palabras na sesión.
?>
<script>
window.onload=function()  //función que se executa cando ap axina se cargou por completo
{
    //salto automático a seguinte páxina
    setInterval(function(){location="practica5-formulario.php"},3000); //temporizador de 3 segundos.
}
</script>
</body>
</html>