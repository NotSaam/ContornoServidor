<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cursos</title>
</head>
<body>
    <h2>Formulario de Cursos</h2>
    
    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Conectar a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "universidade";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Recuperar datos del formulario
        $nombreCurso = $_POST["nombre_curso"];
        $descripcion = $_POST["descripcion"];

        // Insertar datos en la tabla Cursos
        $sql = "INSERT INTO Cursos (nombre_curso, descripcion) VALUES ('$nombreCurso', '$descripcion')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Datos del curso insertados correctamente.</p>";
        } else {
            echo "Error al insertar datos del curso: " . $conn->error;
        }

        // Cerrar la conexión
        $conn->close();
    }
    ?>

    <!-- Formulario de ingreso de datos del curso -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nombre_curso">Nombre del Curso:</label>
        <input type="text" name="nombre_curso" required><br>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" rows="4" cols="50" required></textarea><br>

        <input type="submit" value="Agregar Curso">
    </form>
</body>
</html>
