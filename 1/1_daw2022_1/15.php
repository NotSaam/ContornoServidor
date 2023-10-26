<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>

<?php
 //referencias.
 $nome="antonio";
 $ref=&$nome; //estamos definindo unha variable ref que é unha referencia a variable nome.
 echo $ref."<br>";  //vai escribir antonio, porque é refenrecia a variable nome que ten ese valor.
 $ref="Marisa";
 echo $nome, "<br/>"; //vai escribir marisa porque a referencia cambiou o valor.



?>



</body>
</html>