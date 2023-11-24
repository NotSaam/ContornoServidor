<html>
<head>
<title>Problema</title>
</head>
<body>

<?php

$conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select * from alumnos
                        where mail='$_REQUEST[mail]'") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{
?>

<form action="pagina25_resultado.php" method="post">
Ingrese nuevo mail:
<input type="text" name="mailnuevo" value="<?php echo $reg['mail'] ?>">
<br>
<input type="hidden" name="mailviejo" value="<?php echo $reg['mail'] ?>">
<input type="submit" value="Modificar">
</form>

<?php
}
else
  echo "No existe alumno con dicho mail";
?>
</body>
</html>