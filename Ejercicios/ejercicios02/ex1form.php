<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Exercicio 1</title>
</head>

<style>
    label {
        font-size: 20 px;
    }
</style>


<body>

    <form action="ex1.php" method="post">

        <h2>Seleccione los artículos que desea comprar</h2>
        
        <input type="checkbox" id="rojo" name="articulo['Boligrafo rojo']" value="0.35">
        <label for="rojo">Boligrafo rojo(35 céntimos)</label>
        <br>
        
        <input type="checkbox" id="azul" name="articulo['Bolígrafo azul']" value="0.35">
        <label for="azul">Bolígrafo Azul (35 céntimos) </label>
        <br>
        
        <input type="checkbox" id="grueso" name="articulo['Lapicero grueso']" value="0.27">
        <label for="grueso">Lapicero grueso (27 céntimos)</label>
        <br>       
        
        <input type="checkbox" id="fino" name="articulo['Lapicero fino']" value="0.30">
        <label for="fino">Lapicero fino (30 céntimos)</label>
        <br>
        
        
        <input type="checkbox" id="goma" name="articulo['Lapicero  goma']" value="0.35">
        <label for="goma">Goma de borrar (35 céntimos)</label>
        <br>
        
        <input type="submit" value="Enviar">



    </form>
</body>

</html>