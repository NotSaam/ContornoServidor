<?php

	function escribirTresNumeros($num1,$num2,$num3){
		//Creamos el archivo 
		$archivo=fopen("datosEjercicio.txt","w");
		//introducimos los datos
		fputs($archivo,$num1.PHP_EOL);
		fputs($archivo,$num2.PHP_EOL);
		fputs($archivo,$num3.PHP_EOL);
	}

	function obtenerSuma($rutaArchivo){
		//Abrimos el archivo para lectura
		$archivo=fopen($rutaArchivo,"r");
		$suma=0;
		while(!feof($archivo)){
			$linea=fgets($archivo);
			$suma=$suma+$linea;
		}
		return $suma;
	}
	
	function obtenerArrNum($rutaArchivo){
		//Abrimos el archivo para lectura
		$archivo=fopen($rutaArchivo,"r");
		//Creamos el array
		$array;
		$i=0;
		while(!feof($archivo)){
			$linea=fgets($archivo);
			$array[$i]=$linea;
			$i=$i+1;
		}
		
		return $array;
	}
	
	function escribirNumerosMod($array,$cadena){
		//abrimos el fichero en el modo indicado
		if ($cadena == "sobreescribir"){
			$modo="w";
		}else if ($cadena == "ampliar"){
			$modo="a";
		}
		
		$archivo=fopen("datosEjercicio.txt",$modo);
		
		//recorremos array e insertamos
		for($i=0;$i<count($array);$i++){
			$num=$array[$i];
			fwrite($archivo,$num.PHP_EOL);
		}
	}
	
	function leerContenidoFichero($rutaArchivo){
		//Abrimos el archivo para lectura
		$archivo=fopen($rutaArchivo,"r");
		
		while(!feof($archivo)){
			$linea=fgets($archivo);
			echo $linea.PHP_EOL;
		}
	}
?>