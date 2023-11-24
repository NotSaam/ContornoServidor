<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"update alumnos
                          set codigocurso=$_REQUEST[codigocurso]
                        where mail='$_REQUEST[mailviejo]'") or
  die("Problemas en el select:".mysqli_error($conexion));
  echo "El curso fue modificado con exito";
?>
</body>
</html>