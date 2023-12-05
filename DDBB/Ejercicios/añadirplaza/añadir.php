    <?php

    //Conexion a mysql
    $conn=mysqli_connect("localhost","root","","cursos");
    
    $id=$_GET["id"];
    
    
    $sqlañadir ="UPDATE cursos SET plazas_ocupadas =(plazas_ocupadas + 1) where id_curso=$id";
    $result = $conn->query($sqlañadir);


    header("Location:index.php");
    
    ?>
