<?php
	include 'funcionesFicheros.php';	
?>

<html>
<head>
	<title>Utilizacion de funciones con ficheros</title>
	<meta charset="UTF-8"/>
</head>
<body>
	<p>Escribimos los 3 numeros 2,8,14</p>
	<?php
	escribirTresNumeros(2,8,14);
	?>
	
	<p>El resultado de sumar los 3 numeros es</p>
	<?php
	$suma=obtenerSuma("datosEjercicio.txt");
	echo $suma;
	?>
	
	<p>El array con los 3 numeros es</p>
	<?php
	$array=obtenerArrNum("datosEjercicio.txt");
	for($i=0;$i<=count($array);$i++){
		echo $array[$i].'<br/>';
	}
	?>
	
	<p>Mostramos el contenido del ficheros</p>
	<?php
		leerContenidoFichero("datosEjercicio.txt");
	?>
	
	<p>Escribimos los 3 nuevos numeros 33, 11 y 16 ampliando lo que ya estaba</p>
	<?php
		$array=array(33,11,16);
		escribirNumerosMod($array,"ampliar");
		leerContenidoFichero("datosEjercicio.txt");
	?>
	
	<p>Escribimos los 3 nuevos numeros 4,99,12 sobreescribiendo lo que ya estaba</p>
	<?php
		$array=array(4,99,12);
		escribirNumerosMod($array,"sobreescribir");
		leerContenidoFichero("datosEjercicio.txt");
	?>
</body>