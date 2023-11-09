<?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $dni = $_POST["dni"];
        $nota = $_POST["nota"];
        $separador = "<hr>";
        
        
        $mensajeImprimir = "DNI: $dni - Nota: $nota";
        
        $archivo = fopen ("datosNotas.txt", "a");

        if($archivo){
            if(fwrite($archivo,$mensajeImprimir)){
                fclose(($archivo));
                echo "Os datos gardaronse correctamente";
                echo "<a href='barbaio.php'>Volver</a>";
            } else{
                echo "Non hay DNI";
            }
        }else{
            echo "Non se pudo abrir o archivo";
        }
    }
?>
