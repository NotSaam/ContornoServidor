<?php
session_start();

// Lectura del array si existe la sesión correspondiente
if (isset($_SESSION["tareas"])) {
    $tareas = $_SESSION["tareas"];
} else {
    $tareas = array();
}

// Comprobar si se envió una nueva tarea
if (isset($_GET["tarea"]) && strlen(trim($_GET["tarea"])) > 0) {
    // Añadir nueva tarea
    $tarea = $_GET["tarea"];
    array_push($tareas, $tarea);

    // Actualizar la sesión con el nuevo array de tareas
    $_SESSION["tareas"] = $tareas;

}

// Comprobar si se envió para borrar un índice de tarea
if (isset($_GET["borrar"])) {
    // Borrar tarea
    $idTarea = $_GET["borrar"];
    unset($tareas[$idTarea]); // Eliminamos el índice de tarea

    // Reindexar el array
    $tareas = array_values($tareas);

    // Actualizar la sesión con el nuevo array de tareas
    $_SESSION["tareas"] = $tareas;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica 4, Lista de tareas usando sesiones</title>
</head>
<body>
<form action="practica4_sesion.php">
    <label for="tarea">Añadir tarea</label>
    <input type="text" name="tarea" id="tarea">
    <button>Añadir</button>
</form>

<?php
// Escribir tareas
if (count($tareas) > 0) {
    echo "<h2>Lista de tareas</h2>";
    echo "<ol>";
    foreach ($tareas as $idTarea => $tarea) {
        echo "<li>$tarea <a href='practica4_sesion.php?borrar=$idTarea'>Borrar</a></li>";
    }
    echo "</ol>";
}
?>
</body>
</html>
