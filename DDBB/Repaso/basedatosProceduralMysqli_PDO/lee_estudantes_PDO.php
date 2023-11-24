<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Estudiantes</title>
</head>
<body>
    <h2>Consulta de Estudiantes</h2>

    <?php
    try {
        // Conectar a la base de datos utilizando PDO
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "universidade";

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Consulta para obtener los datos de la tabla Estudiantes
        $sql = "SELECT id_estudiante, nombre, apellido, edad, carrera FROM Estudiantes";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // Verificar si hay resultados
        if ($stmt->rowCount() > 0) {
            // Mostrar los datos en una tabla
            echo "<table border='1'>
                    <tr>
                        <th>ID Estudiante</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Carrera</th>
                    </tr>";

            // Obtener y mostrar cada fila de resultados
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>
                        <td>" . $row["id_estudiante"] . "</td>
                        <td>" . $row["nombre"] . "</td>
                        <td>" . $row["apellido"] . "</td>
                        <td>" . $row["edad"] . "</td>
                        <td>" . $row["carrera"] . "</td>
                    </tr>";
            }

            echo "</table>";
        } else {
            echo "No hay estudiantes registrados.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Cerrar la conexión (PDO cierra automáticamente la conexión cuando el objeto se destruye)
    $conn = null;
    ?>
</body>
</html>
