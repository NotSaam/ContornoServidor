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
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $carrera = $_POST["carrera"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "universidade";



        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Verificar la conexión
        if (!$conn) {
            die("Conexión fallida: " . mysqli_connect_error());
        }

        // Recuperar datos del formulario
        $nombre = mysqli_real_escape_string($conn, $_POST["nombre"]);
        $apellido = mysqli_real_escape_string($conn, $_POST["apellido"]);
        $edad = mysqli_real_escape_string($conn, $_POST["edad"]);
        $carrera = mysqli_real_escape_string($conn, $_POST["carrera"]);

        // Insertar datos en la tabla Estudiantes
        $sql = "INSERT INTO Estudiantes (nombre, apellido, edad, carrera) VALUES ('$nombre', '$apellido', $edad, '$carrera')";

        if (mysqli_query($conn, $sql)) {
            echo "<p>Datos insertados correctamente.</p>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Cerrar la conexión
        mysqli_close($conn);
    }
    ?>

    <!-- Formulario de ingreso de datos -->
    <form action="inserta_estudantes_procedural.php" method="post">
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
