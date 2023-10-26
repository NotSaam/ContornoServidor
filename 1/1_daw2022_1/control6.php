<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
 //ESTRUCTURAS DE CONTROL condicional compuesta
 //WHILE
//bucle usando while directo.
 $i=1;
 while ($i<=100){
    echo $i."<br>";
    $i++;
 }

$i=10; //valor inicial que lle asignamos
while ($i <=200){
    echo $i."<br>";
    $i+=10;
}

//exemplo de bucles centinelas...
$salir=false; //inicializamos a variable sair a falso.
while ($salir == false){ //ollo, hai que por os == xa que se pos un unico = é unha asignacion.
$n=mt_rand(1,500); //esta función calcula un numero aleatorio entre 1 e 500
echo $n;
$salir = ($n%7==0); // ollo coa operación:
// o proceso calculara numero aleatorios continuamente, para iso, usamos a funcion mt_rand
// hai outras funcions que fan o mesmo ou parecido
// en cada iteración, para o numeroq ue saia, aplicamoslle a funcion MODULO, é dicir
// dividir entre 7 e comprobar se o restoq ue queda é 0.
//por tanto, cando fai $n%7==0 está comprobando se o resto é cero, se é cero, devolve true
// e se a variable centinela sair vale true, o proceso remata.
}


?>

</body>
</html>
