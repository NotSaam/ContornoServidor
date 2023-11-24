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
        try {
            // Conectar a la base de datos utilizando PDO
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "universidade";

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Recuperar datos del formulario
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $edad = $_POST["edad"];
            $carrera = $_POST["carrera"];

            // Preparar la consulta para insertar datos en la tabla Estudiantes
            $stmt = $conn->prepare("INSERT INTO Estudiantes (nombre, apellido, edad, carrera) VALUES (:nombre, :apellido, :edad, :carrera)");

            // Bind parameters
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellido', $apellido);
            $stmt->bindParam(':edad', $edad);
            $stmt->bindParam(':carrera', $carrera);

            // Ejecutar la consulta
            $stmt->execute();

            echo "<p>Datos insertados correctamente.</p>";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        // Cerrar la conexión (PDO cierra automáticamente la conexión cuando el objeto se destruye)
        $conn = null;
    }
    ?>

    <!-- Formulario de ingreso de datos -->
    <form action="inserta_estudantes.php" method="post">
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
