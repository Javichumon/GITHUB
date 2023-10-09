<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 en raya</title>
    <style>
        tr{
            border: 1px, solid ,black;
        }
    </style>
</head>
<body>
<?php
    $matriz = array (
        array("X","O","X"),
        array("X","X","X"),
        array("X","O","X")
    );

$max_filas = count($matriz);
echo "<table>";
for ($fila = 0; $fila <$max_filas; $fila++)
{
    echo "<tr>";
    $max_columnas_filas = count($matriz[$fila]);
    for($columna = 0; $columna < $max_columnas_filas; $columna++)
    {
        echo "<td>".$matriz[$fila][$columna]."</td>";
    }
        echo "</tr>";
}
echo "</table>";
?>
</body>
</html>