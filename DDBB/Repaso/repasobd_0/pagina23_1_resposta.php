<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select codigo from cursos
                        where nombrecurso='$_REQUEST[nombrecurso]'") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{
  mysqli_query($conexion,"delete from cursos where nombrecurso='$_REQUEST[nombrecurso]'") or
    die("Problemas en el select:".mysqli_error($conexion));
  echo "Se efectuó el borrado del curso ingresado.";
}
else
{
  echo "No existe un curso con dicho nombre.";
}
mysqli_close($conexion);
?>
</body>
</html>