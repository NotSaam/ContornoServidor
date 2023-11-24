<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Estudiantes</title>
</head>
<body>
    <h2>Formulario de Estudiantes</h2>
    
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
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $carrera = $_POST["carrera"];

        // Insertar datos en la tabla Estudiantes
        $sql = "INSERT INTO Estudiantes (nombre, apellido, edad, carrera) VALUES ('$nombre', '$apellido', $edad, '$carrera')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Datos insertados correctamente.</p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Cerrar la conexión
        $conn->close();
    }
    ?>

    <!-- Formulario de ingreso de datos -->
    <form action="inserta_estudantes.php"method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" required><br>

        <label for="carrera">Carrera:</label>
        <input type="text" name="carrera" required><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
