<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into alumnos(nombre,mail,codigocurso) values ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[radio1])") or
  die("Problemas en el select".mysqli_error($conexion));

echo "El alumno fue dado de alta.";
?>
</body>
</html>
