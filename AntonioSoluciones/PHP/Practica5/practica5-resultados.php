<?php
session_start();
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comprobación</title>
</head>
<body>
<?php
//comprobar si se temos gardada a sesión coas palabras.
if(isset($_SESSION["palabras"])){
    $palabras=$_SESSION["palabras"]; //arrai cos datos que temos almacenados na sesión.
    //comprobar si se recibiu o arrai
    if(isset($_GET["result"])){
        //comprobar acertos
        $aciertos=0;
        $result=$_GET["result"];  //result é o arrai que se recibe do formulario onde metemos os valores
        foreach($palabras as $i=>$palabra){
            //buscar a palabra nos datos almacenados na sesión
            if(array_search($palabra,$result)!==false) {
                $aciertos++;
                echo "<p>Atinaches <strong>$palabra</strong></p>";
            }
            else{
                echo "<p>Fallaches <strong>$palabra</strong></p>";
            }
        }
        echo "<h2>Número de acertos: $aciertos</h2>";
        if($aciertos==5) echo "<h2>Atinachelas todas!</h2>";

    }
    //si no se pasan resultados, volvemos a empezar
    else header("Location:practica5-jugar.php");
}
//se non hai almacenado resultados, voltamos a empezar
else header("Location:practica5-jugar.php");
?>
<a href="practica5-jugar.php">Volver a xogar</a>
</body>
</html>