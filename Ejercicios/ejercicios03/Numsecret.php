<!DOCTYPE html>
<html>
    <head>
        <title>Adivinar numero</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>

    <?php
$min = 1;
$max = 100;
$numeroSecreto = rand($min, $max);
$intentos = 0;

if (isset($_POST['adivinar'])) {
    $intentos++;
    $numeroAdivinado = $_POST['numero'];

    if (is_numeric($numeroAdivinado)) {
        if ($numeroAdivinado < $numeroSecreto) {
            echo "El número secreto es mayor que $numeroAdivinado. ¡Sigue intentándolo!";
        } elseif ($numeroAdivinado > $numeroSecreto) {
            echo "El número secreto es menor que $numeroAdivinado. ¡Sigue intentándolo!";
        } else {
            echo "¡Felicidades! Has adivinado el número secreto: $numeroSecreto. Necesitaste $intentos intentos.";
        }
    } else {
        echo "Por favor, ingresa un número válido.";
    }
} else {
    echo "Adivina el número secreto entre 1 y 100.";
}
echo '<a href="numsecretform.php">Sigue jugando</a>';

?>

    </body>
</html>