<!DOCTYPE html>
<html>

<head>
    <title>Exercicio 3</title>
</head>

<style>
    
    div {
        position: fixed;
        width: 100%;
        height: 100%;
    }
    
    body {
        margin: 0;
        font-size: 1px;
    }
</style>


<body>
    
    
    
    <?php

for ($i = 0; $i<10; $i++) {
    $rojo=rand(0,255);
    $verde=rand(0,255);
    $azul=rand(0,255);
    $arraycolor[$i]="background-color:rgb($rojo,$verde,$azul)";    
}

    $top=0;
    $franxas=100;
    for ($i = 0; $i<10; $i++) {
    foreach($arraycolor as $color){
        echo "<div style=$color;top:$top%;></div>";
        $top++;           
    }
    }

    ?>


</body>

</html>