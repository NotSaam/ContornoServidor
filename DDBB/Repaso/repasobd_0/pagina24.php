<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");

mysqli_query($conexion,"delete from alumnos") or
  die("Problemas en el select:".mysqli_error($conexion));
echo "Se efectuó el borrado de todos los alumnos.";
mysqli_close($conexion);
?>
</body>
</html>