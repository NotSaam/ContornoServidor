<!DOCTYPE html>
<html>

<head>
    <title>Ficheiros</title>
</head>

<body>
    <h1>Bar Baio</h1>

    <form method="POST" action="datosBar.php">
        <label for="nome">Nome:*</label>
        <input type="text" name="nome" id="nome" required><br>

        <br>
        <label for="email">Mail:</label>
        <input type="text" name="email" id="email">

        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
        <br>

        <br>
        <label for="mensagem">Mensaxe:</label><br>
        <textarea name="mensagem" rows="10" cols="50"></textarea>
    </form>

    <br>
    <hr size="3px" color="black" />
    <h3>Mensaxes deixados polos usuarios</h3>
    <hr size="3px" color="black" />

    <?php
    if (file_exists("datosBar.txt")) {
        $nombre_ficheiro = "datosBar.txt";

        if ($ficheiro = fopen($nombre_ficheiro, "r")) {
            $contenido = fread($ficheiro, filesize($nombre_ficheiro));
            fclose($ficheiro);

            if (strlen($contenido) > 0) {
                $lineas = explode("\n", $contenido);
                echo "<table>";

                foreach ($lineas as $linea) {
                    echo  "<tr>";
                    echo  "<td>$linea</td>";
                    echo  "<tr>";
                }
                echo "</table>";
            } else {
                echo "No hay reseñas todavía.";
            }
        } else {
            echo "No se pudo abrir el archivo.";
        }
    } else {
        echo "Todavía no hay reseñas.";
    }
    ?>
</body>

</html>
