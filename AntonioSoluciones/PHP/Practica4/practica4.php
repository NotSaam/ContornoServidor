<?php
$tareas = array();
/*Cando traballas con cookies en PHP e necesitas almacenar un array, a función serialize 
permíteche converter ese array nunha cadea que pode ser almacenada nunha cookie. 
Posteriormente, cando necesitas utilizar os datos da cookie, 
podes usar a función unserialize para reconstruír o array orixinal.*/

// lectura do arrai se existe a cookie correspondente
if (isset($_COOKIE["tareas"])) {
    $tareas = unserialize($_COOKIE["tareas"]);  //pasamos a arrai.
}

// comprobar se se enviou unha nova tarefa
if (isset($_GET["tarea"]) && strlen(trim($_GET["tarea"])) > 0) {
    // engadir nova tarefa
    $tarea = $_GET["tarea"];
    array_push($tareas, $tarea);

    // grabar do arrai actual e actualizar a cookie $_COOKIE
    setcookie("tareas", serialize($tareas));
    $_COOKIE["tareas"] = serialize($tareas);
}

// comprobar si se enviou para borrar un índice de tarefa
if (isset($_GET["borrar"])) {
    // borrar tarefa
    $idTarea = $_GET["borrar"];
    array_splice($tareas, $idTarea, 1); //borramos o indice de tarefa pasado e refacemos o arrai

    // grabar do arrai actual e actualizar a cookie e $_COOKIE
    setcookie("tareas", serialize($tareas));
    $_COOKIE["tareas"] = serialize($tareas);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica 4, Lista de tarefas</title>
</head>
<body>
<form action="practica4.php">
    <label for="tarea">Engadir tarefa</label>
    <input type="text" name="tarea" id="tarea">
    <button>Engadir</button>
</form>

<?php
// escribir tarefas;
if (count($tareas) > 0) {
    echo "<h2>Lista de tarefas</h2>";
    echo "<ol>";
    foreach ($tareas as $idTarea => $tarea) {
        echo "<li>$tarea <a href='practica4.php?borrar=$idTarea'>Borrar</a></li>";
    }
    echo "</ol>";
}
?>
</body>
</html>
