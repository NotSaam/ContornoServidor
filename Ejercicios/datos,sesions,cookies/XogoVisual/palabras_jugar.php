<?php
session_start();

include "palabras_lista.php";

shuffle($$lista);

$palabras=array();

for($i=0;$i<5;$i++){
    array_push($palabras,$lista[$i]);
    echo "<h2>".$lista[$i]."</h2>";
}

$_SESSION["palabras"]=$palabras;
?>

<script>
window.onload=function()
{
//salto automático a seguinte páxina que tarda 10 segundos
setInterval(function(){location="practica5-formulario.php"},1000);
}
</script>



