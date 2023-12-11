<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de localidades</title>
    <style>
        .error{
            color:red;
        }
        .pagina{
            background-color: lightgray;
            font-size:.7em;
        }
        table{
            border-collapse: collapse;
            width:100%;
        }
        td{
            border:1px solid black;
        }
        td:first-of-type{
            font-weight:bold;
        }
        td:last-of-type{
            text-align: right;
            padding-right:10px;
        }
        th{
            background-color: black;
            color:white;
        }
        .paginaActual{
            border:1px solid black;
        }
    </style>
</head>
<body>
<?php
if (isset($_GET["provincia"])==false)
    header("Location:form-practica1.php");
else {
    $mysqli = new mysqli("127.0.0.1", "root", "", "geografia");
    if ($mysqli) {
        $provincia = $_GET["provincia"];
        //paso a maisculas da  provincia
        $provincia=strtoupper($provincia);
        //agora cambiamos os acentos por se hai fallos.
        $provincia=strtr($provincia,'áéíóúü','ÁÉÍÓÚÜ');

        $sql = "SELECT l.nombre localidad, poblacion " .
            "FROM localidades l " .
            "JOIN provincias p USING(n_provincia) " .
            "WHERE UPPER(p.nombre)='$provincia' " .
            "ORDER BY localidad";
        $res=$mysqli->query($sql);
        if($res->num_rows==0){
            echo "<p class='error'>No existe esa provincia</p>";
        }
        else{
            //****poñemos un encabezado
            echo "<h1>Localidades de $provincia</h1>";
            //hai que controlar o numero de paxina na que estou, almaceno a paxina en pg
            //a paxina na que estou vaise recargar tantas veces como paxinas teña de consulta...
            //e en cada chamada a refrescar datos dunha paxina, teño que pasar en que páxina tou.
            if(isset($_GET["pg"])) {
                $pg = $_GET["pg"]; //se na chamada xa me ven o valor de PG, alamceno 
                if($pg<=0 || is_numeric($pg)==false) $pg=1; //sería o caso de chegar a esta páxina sen vir de refrescar datos.
            }
            else
                $pg=1;
            //*******preparación da barra de paxinación
            //variable coa  parte común dos enlaces, falta calcular
            //a páxina para cada un deles

            $direccion="practica2-listado.php?provincia=$provincia&pg=";  
            //cada vez que avance páxina, esta vai ser a dirección desa nova paxina de resutlados.

            echo "<p class='pagina'>Página: ";

            if($pg>1)
                //botón da paxina anterior, símbolo <
                echo "<a href='$direccion".($pg-1)."'>&lt;</a>";//uso entidades para representar o <

            $total_pg=(int)($res->num_rows/25+1);//cálculo do total das paxinas, divido os resultados da select entre 25.
            //botons para ir a unha páxina concreta

            for($i=1;$i<=$total_pg;$i++){
                if($i==$pg) //para que a paxina na que estou siguado se amose marcada...
                    echo " <span class='paginaActual'>$i</span> ";
                else
                    echo "<a href='$direccion".$i."'>$i </a>";
            }
            if($pg<$total_pg)
                //botón da páxina seguinte, símbolo >
                echo "<a href='$direccion".($pg+1)."'>&gt;</a>";
            echo "</p>";

            //***********cálculo da posición da fila segúndo a páxina desexada
            $posicion=($pg-1)*25;
            $res->data_seek($posicion);//despraza o punteiro de lectura de datos ao rexistro indicado en ($posicion)

            //*******listado de localidades, como moitos, deben listarse 25
            $cont=1;
            $fila=$res->fetch_assoc();//desprazase rexistro a rexistro, dende a posicion marcada anteriormente
            echo "<table><tr><th>Localidad</th>".
                 "<th>Población</th></tr>";
            while($fila && $cont<=25){  //so pinta os 25 primeiros rexistros.
                echo "<tr><td>{$fila['localidad']}</td>";
                echo "<td>{$fila['poblacion']} habitantes</td>";
                $fila=$res->fetch_assoc();
                $cont++;
            }
            echo "</table>";
        }
    }
}
?>
</body>
</html>