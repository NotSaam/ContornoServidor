<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");
	
$registros=mysqli_query($conexion,"select count(alu.codigo) as cantidad,
                                          nombrecurso,
					  codigocurso 
					  from alumnos as alu
                                      inner join cursos as cur on cur.codigo=alu.codigocurso
                                      group by alu.codigocurso") or
  die("Problemas en el select:".mysqli_error($conexion));
while ($reg=mysqli_fetch_array($registros))
{
  echo "Nombre del curso:".$reg['nombrecurso']."<br>";
  echo "Cantidad de inscriptos:".$reg['cantidad']."<br>";
  $registros2=mysqli_query($conexion,"select nombre 
                                           from alumnos 
                                           where codigocurso=$reg[codigocurso]") or
    die("Problemas en el select:".mysqli_error($conexion));
  while ($reg2=mysqli_fetch_array($registros2))
  {
     echo $reg2['nombre']."-";
  }
  echo "<hr>";
}
mysqli_close($conexion);
?>
</body>
</html>