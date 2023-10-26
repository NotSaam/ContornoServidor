<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> exemplo de formulario que vai a propia paxina </title>
</head>
<body>

<?php
if (isset($_POST["nome"]) && isset($_POST["contra"])){
?>
<form action="redireccion.php" method="post">
<label for="nombre">Escribe o usuario </label>
<input type="text" name="nome" maxlength="20"/> <br />
<label for="contra"> Contrasinal </label>
<input type="password" name="contra" maxlength="20"/> <br />
<input type="submit" value="enviar"/> <br />
</form>
<?php }
else {
    $nome=$_POST["nome"];
    $contra=$_POST["contra"];
    if ($nome!="jorge"||$contra!="123456"){
        echo "non é valido o usuario e contrasinal <br>";
        echo "<a href='redireccion.php'> volver ao formulario </a>";
    }
    else echo "entrada correcta";
}


?>
</body>
</html>