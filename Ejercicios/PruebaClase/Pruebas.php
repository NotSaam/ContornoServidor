<<<<<<< HEAD
<!DOCTYPE html>
<html>
    <head>
        <title>Pruebas PHP</title>
    </head>
    <body>

    <?php

//Funcions Recursivas
    function factorialRecursivo($n){
        if($n<=1)return 1;
        else return $n*factorialRecursivo($n-1);
    }
    echo factorialRecursivo(5);

//Funcions Iterativa
    function factorialIterativo($n){
        $res=1;
        for($i=1;$i<=$n; $i++){
            $res*=$i;
        }
        return $res;
    }
    echo factorialIterativo(5);
    ?>
    
    </body>
=======
<!DOCTYPE html>
<html>
    <head>
        <title>Pruebas PHP</title>
    </head>
    <body>

    <?php

//Funcions Recursivas
    function factorialRecursivo($n){
        if($n<=1)return 1;
        else return $n*factorialRecursivo($n-1);
    }
    echo factorialRecursivo(5);

//Funcions Iterativa
    function factorialIterativo($n){
        $res=1;
        for($i=1;$i<=$n; $i++){
            $res*=$i;
        }
        return $res;
    }
    echo factorialIterativo(5);
    ?>
    
    </body>
>>>>>>> 8bc20870ef4836ed5156d2f09023c91a34ae6a8a
</html>