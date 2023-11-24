<html>
<head>
<title>Problema</title>
</head>
<body>
<form action="pagina26_1_resposta.php" method="post">
Ingrese nombre:
<input type="text" name="nombre"><br>
Ingrese mail:
<input type="text" name="mail"><br>
Seleccione el curso:<br>
<?php
$conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select codigo,nombrecurso from cursos") or
  die("Problemas en el select:".mysql_error());
while ($reg=mysqli_fetch_array($registros))
{
  echo "<input type=\"radio\" name=\"radio1\" value=\"$reg[codigo]\">".$reg['nombrecurso']."<br>";
}
?>
<input type="submit" value="Registrar">
</form>
</body>
</html>
