<?php
$error1="";
$id=null;
if(isset($_GET["id"])){
    $id=$_GET["id"];
}
else{
    header("location:practica6-index.php");
}

$mysqli=new mysqli("127.0.0.1", "root", "", "cursos");
if($mysqli){
    $sql="UPDATE cursos ".
        "SET plazas_ocupadas=plazas_ocupadas+1 ".
        "WHERE id_curso=$id";
    if($mysqli->query($sql)==false)
        $error1="Fallo al modificar la base de datos";
    else
        $mysqli->close();
}
else{
    $error1="No se pudo realizar la conexión con la base de datos";
}
?>
<?php
if($error1){
    echo "<h1 class='error'>$error1</h1>";
}
else{
    header("location:practica6-index.php");
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="practica6-estilos.css"/>
</head>
<body>
</body>
</html>