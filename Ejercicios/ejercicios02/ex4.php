<!DOCTYPE html>
<html>

<head>
    <title>Exercicio 4</title>
</head>
<style>
th{
    background-color: black;
    color: white;
}
.a{
    background-color: gainsboro;
    font-weight: bold;
}
</style>

<body>
    
<?php

    function table($sitios){
            echo "<table border =1>";
            echo "\t<tr>";
            echo "\t<th>Indices</th>";
            echo "\t<th>Valores</th>";
            echo "\t</tr>";
        
            foreach ($sitios as $nombres =>$valor){
                echo  "\t<tr>";
                echo  "\t<td class=a>" . $nombres . "</td>"."<td>".$valor ." </td> </tr>";
            }
            echo "</table><br>";
    }
        
        $sitios = array(
            "Palencia" => 8000,
            "Valladolid" => 306000,
            "Murcia" => 439000,
            "Albacete" => 170000,
            "Barcelona" => 160000,
            "A Coruña" => 25000,
        );
        table($sitios);
        
        $material = array(
            "Au"=>"Oro",
            "Ag"=>"Plata",
            "Hg"=>"Mercurio",
            "H"=>"Hidrogeno",
        ); 
        table($material);
?>

</body>
</html>