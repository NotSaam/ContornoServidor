<?php
session_start();

$listatarefas = array();

if(isset($_SESSION["listatarefas"])){
    $listatarefas = $_SESSION["listatarefas"];
}

if(isset($_POST["tarefa"]) && strlen(trim($_POST["tarefa"])) > 0){
    $tarefa = $_POST["tarefa"];
    array_push($listatarefas, $tarefa);

    $_SESSION["listatarefas"] = $listatarefas;
}

if (isset($_GET["borrar"])){
    $idTarefa = $_GET["borrar"];
    array_splice($listatarefas, $idTarefa, 1);

    $_SESSION["listatarefas"] = $listatarefas;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Lista de tarefas</title>
    
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 60vh;
            margin: 0;
            background-color: #2d2b2b;
            color: white; 
        }

        .engadir{
            color: black;
        }

        h1 {
            text-align: center;
            color: #fca84f;
        }

        form {
            width: 300px;
            padding: 20px;
            border: 1px solid #fca84f;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fca84f;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: black;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        button {
            background-color: black;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: gainsboro;
            color: black;
        }
    </style>
</head>

<body>
    <h1>LISTA DE TAREFAS</h1>
    <form action='tarefa_index.php' method="POST">
        <label for='tarefa' id="engadir"><b>Engadir tarefa:</b></label>
        <input type='text' id='tarefa' placeholder='Introduce unha tarefa a engadir' name='tarefa'>
        <button type='submit'>Engadir</button>
    </form>

    <?php
    if(count($listatarefas) > 0){
        echo "<h1>Lista de tarefas</h1>";
        echo "<ol>";
        foreach($listatarefas as $idTarefa => $tarefa){
            echo "<li>$tarefa <a href='tarefa_index.php?borrar=$idTarefa'>Borrar</a></li>";
        }
        echo "</ol>";
    }
    ?>
</body>
</html>