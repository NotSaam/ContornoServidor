<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select codigo,nombre, codigocurso
                        from alumnos where nombre='$_REQUEST[nombre]'") or
  die("Problemas en el select:".mysqli_error($conexion));

$cant=0;
while ($reg=mysqli_fetch_array($registros))
{
  echo "Nombre:".$reg['nombre']."<br>";
  echo "Curso:";
  switch ($reg['codigocurso']) {
    case 1:echo "PHP";
           break;
    case 2:echo "ASP";
           break;
    case 3:echo "JSP";
           break;
  }
  $cant++;
  echo "<hr>";
}

if ($cant==0)
{
  echo "No existen alumnos con dicho nombre";
}

mysqli_close($conexion);
?>
</body>
</html>