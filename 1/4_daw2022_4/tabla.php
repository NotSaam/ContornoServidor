<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title> titulo da paxina </title>
</head>
<body>
<!-- EXEMPLO DE COMO CREAR UNHA TABOA DENDE PHP CON FORMATO HTML -->

<?php
$columnas = 4;
$filas    = 3;

print "<table border=\"1\">\n";            // Abre la tabla
print "  <caption>Tabla</caption>\n";      // Crea la leyenda <caption>
print "  <tbody>\n";                       // Abre el cuerpo de tabla <tbody>

print "    <tr>\n";                        // Abre la primera fila
print "      <th></th>\n";                 // Crea la primera celda <th> de la primera fila (sin número)
for ($j = 1; $j <= $columnas; $j++) {      // Bucle 1 se ejecuta tantas veces como columnas tenga la tabla
    print "      <th>$j</th>\n";           // Crea las celdas <th> de la primera fila (con número)
}
print "    </tr>\n";                       // Cierra la primera fila

for ($i = 1; $i <= $filas; $i++) {         // Bucle 2 (genera el resto de filas de la tabla)
    print "    <tr>\n";                    // Abre la fila
    print "      <th>$i</th>\n";           // Crea la primera celda <th> de cada fila (con número)
    for ($j = 1; $j <= $columnas; $j++) {  // Bucle 3 se ejecuta tantas veces como columnas tenga la tabla
        print "      <td>$i-$j</td>\n";     // Crea el resto de celdas <td> de cada fila (con números)
    }
    print "    </tr>\n";                   // Cierra la fila
}

print "  </tbody>\n";                      // Cierra el cuerpo de tabla <tbody>
print "</table>\n";                        // Cierra la tabla
?>

</body>
</html>
    