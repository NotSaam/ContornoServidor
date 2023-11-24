<html>
<head>
<title>Problema</title>
</head>
<body>

<?php
$conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select * from cursos
                        where codigo=$_REQUEST[codigo]") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{
?>

<form action="pagina25_1_resultado.php" method="post">
Ingrese el nuevo nombre del curso:
<input type="text" name="nombrecurso" value="<?php echo $reg['nombrecurso'] ?>">
<input type="hidden" name="codigo" value="<?php echo $reg['codigo'] ?>">
<br>
<input type="submit" value="Modificar">
</form>

<?php
}
else
  echo "No existe un curso con dicho codigo";
?>
</body>
</html>
