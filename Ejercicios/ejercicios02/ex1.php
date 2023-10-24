<!DOCTYPE html>
<html>
    <head>
        <title>Exercicio 1</title>
    </head>
    <body>

    <?php
    print "<pre>";
    print_r($_POST);
    print "</pre>\n";

    $suma=0;

     $articulo=$_POST['articulo'];

    if(count($articulo)>0){
        foreach($articulo as $producto =>$valor){
            echo "$producto, precio: $valor &euro; <br>";
            $suma=$suma + $valor;
        }
    }
    echo "<p> Total : $suma &euro; </p>";

    ?>    
    </body>
</html>