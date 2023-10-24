<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Exercicio 2</title>
</head>

<body>
    <h2>Clasificacion da Liga de Fútbol no 2021</h2>

    <?php
    $equipos = array(
        "Racing de Ferrol" => 92,
        "Almeria" => 29,
        "Levante" => 37,
        "Granada" => 35,
        "F.C Barcelona" => 94,
        "Real Mardrid" => 35,
        "Atletico de Madrid" => 78,
        "Valencia" => 77,
        "Sevilla" => 76,
        "Villareal" => 60,
        "Málaga" => 50,
        "Espanyol" => 49,
        "Athlétic Bilbao" => 55,
        "Celta" => 51,
        "Real Sociedad" => 46,
        "Rayo Vallecano" => 49,
        "Getafe" => 37,
        "Eibar" => 35,
        "Elche" => 41,
        "Códoba" => 20
    );

    print "<pre>";
    print_r($equipos);
    print "</pre>\n";

    //Ordenar o array polos valores Mayor a Menor
    arsort($equipos);

    //Ordenar o array polos valores Menor a Mayor
    // asort($equipos);

    print "<br>";
    print "<p>Array ordenado de mayor a menor puntuación</p>";
    print "<pre>";
    print_r($equipos);
    print "</pre>\n";

    //Ordenar equipos alfabéticamente
    ksort($equipos);

    //Imprime equipos ordenados
    print "<br>";
    print "<p>Array ordenado de mayor a menor alfabéticamente</p>";
    print "<pre>";
    print_r($equipos);
    print "</pre>\n";

    //Devolve o array enumerado
    $clasificacion=array_keys($equipos);

    ?>

    <br>
    <form action="ex2.php" method="POST" >

        <label>Elije un equipo para ver su clasificación: </label>
        <select name="equipo">
            <?php
        foreach ($equipos as $nombre => $puntos) { ?>
            <option value="<?php echo $nombre ?>"><?php echo $nombre ?></option>
            <?php } ?>
        </select>
        
        <button>Buscar</button>
    </form>
    
    <?php
    if(isset($_POST["equipo"])){
        $equipos=$_POST["equipo"];
        
        if(isset($equipos[$nombre])){
            $puntos=$equipos[$nombre];
            $posicion=array_search($nombre,$clasificacion)+1;
            echo "<p>El $equipos tiene $puntos, ". " ahora mismo es el $posicion" . "º en la clasificacion de La Liga.</p>";
        }    
        else{
            echo "<p>Equipo inexistente</p>";
        }
}
        ?>

</body>

</html>