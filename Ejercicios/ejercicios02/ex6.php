<!DOCTYPE html>

<head>
    <title>Exercicio 6</title>
</head>



<body>

    <?php
   print "<pre>";
   print_r($_POST);
   print "</pre>";

   $text=$_POST["texto"];
   $clave=$_POST["clave"];
   $criptado=$_POST["criptado"];

    if(strlen($text)<10){
        echo"<p class= 'error' >El texto debe ser mas largo</p>";
    
    }elseif($clave<1 || $clave >99){
        echo"<p class= 'error' >La clave debe ser un numero entre 1 e 99</p>";
    
    }else{
        
    }
    ?>

    </body>

</html>