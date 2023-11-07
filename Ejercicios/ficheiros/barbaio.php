<!DOCTYPE html>
<html>
<head>
    <title>Ficheiros</title>
</head>
<body>
    <h1>Bar Baio</h1>

    <form method="POST" action="">
        <label for="nome">Nome:*</label>
        <input type="text" name="nome" id="nome" required><br>

        <br>
        <label for="mail">Mail:</label>
        <input type="text" name="mail" id="mail" >

        <input type="submit" value= "Enviar">
        <input type="reset" value= "Borrar">
        <br>

        <br>
        <label for="mail">Mensaxe:</label><br>
        <textarea name="textarea" rows="10" cols="50"></textarea>
    </form>

    <br>
    <hr size ="3px" color="black" />
    <h3>Mensaxes deixados polos usuarios</h3>
    <hr size ="3px" color="black" />

    <?php
    if (file_exists("datosBar.txt")){
        $nombre_ficheiro= "datosbar.txt";
        
        $ficheiro = fopen ($nombre_ficheiro, "r");
        
        $contenido = fred($file,filesize($file));

        fclose($ficheiro);

        $lineas =explode("-",$contenido);
        krsort($lineas);

        echo "<table>";

        foreach ($lineas as $linea){
            echo  "<tr>";
            echo  "<td>. $linea.</td>";
            echo  "<tr>";
        }

        echo "</table>";
    }
    
    
    ?>

</body>
</html>
