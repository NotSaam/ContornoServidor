<?php
include "tarefa_comprobar.php";

$haiPreferencias = true;
$array = null;

if (haiCookie()==false){
    if (haiGet()== false){
        $haiPreferencias =false;
    }
    else{
        $array=$_POST;
    }
}else{
    $array = $_COOKIE;
}

if($haiPreferencias == false){
    header("location:tarefa_index.php");
}else{
    foreach($array as $indice => $valor)
    $$indice = $valor;
}

setcookie("tarefa",$tarefa,time()+60*60*24);
?>


<!-- HTML  -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>Lista de tarefas</title>
</head>
<style>
        body {
            background-color: #2d2b2b;
            color: #fca84f;
            font-size: x-large;
        }

        h1 {
            text-align: left;
            margin: 40px;
            color: #fca84f;
        }

</style>
<body>
    <ol>
        <li>
            <?="$tarefa"?> <a href="tarefa_borrar.php">Borrar</a>
        </li>
    </ol>

</body>
</html>

