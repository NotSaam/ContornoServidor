<!DOCTYPE html>

<head>
    <title>Exercicio 7.</title>
</head>

<body>

<?php

print "<pre>";
print_r($_POST);
print "</pre>";


$combinada = [];
for ($i = 1; $i <= 100; $i++) {
    echo "<br>Combinacion $i : ";
    $j = 1;
    while ($j <= 6) {
        $num = rand(1, 49);
        if (!in_array($num, $combinada)) {
            array_push($combinada, $num);
            echo $num . " ";
            $j++;
        }
    }
    $combinada = []; 
}


$cerocerto=0;
$unacerto=0;
$dousacerto=0;
$tresacerto=0;
$catrocerto=0;
$cincocerto=0;
$seiscerto=0;






?>
    </body>

</html>
