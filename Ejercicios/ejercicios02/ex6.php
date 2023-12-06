<!DOCTYPE html>

<head>
    <title>Exercicio 6</title>
</head>



<body>

<?php
print "<pre>";
print_r($_POST);
print "</pre>";

if (isset($_POST["submit"])) {
    $text = $_POST["texto"];
    $clave = $_POST["clave"];
    $criptado = $_POST["criptado"];

    if (strlen($text) < 10) {
        echo "<p class='error'>El texto debe ser más largo</p>";
    } elseif ($clave < 1 || $clave > 99) {
        echo "<p class='error'>La clave debe ser un número entre 1 e 99</p>";
    } else {
        if ($criptado == "encriptar") {
            $resultado = encriptarTexto($text, $clave);
            echo "<p>Texto encriptado: $resultado</p>";
        } elseif ($criptado == "desencriptar") {
            $resultado = desencriptarTexto($text, $clave);
            echo "<p>Texto desencriptado: $resultado</p>";
        }
    }
}

function encriptarTexto($text, $clave)
{
    $textoEncriptado = '';
    for ($i = 0; $i < strlen($text); $i++) {
        $caracter = $text[$i];
        $caracterEncriptado = chr(ord($caracter) + $clave);
        $textoEncriptado .= $caracterEncriptado;
    }
    return $textoEncriptado;
}

function desencriptarTexto($text, $clave)
{
    $textoDesencriptado = '';
    for ($i = 0; $i < strlen($text); $i++) {
        $caracter = $text[$i];
        $caracterDesencriptado = chr(ord($caracter) - $clave);
        $textoDesencriptado .= $caracterDesencriptado;
    }
    return $textoDesencriptado;
}
?>


    </body>

</html>