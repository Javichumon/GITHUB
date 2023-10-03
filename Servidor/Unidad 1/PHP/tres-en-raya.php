<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $matriz = array (
        array(4,0,2),
        array(6,7,9),
        array(1,2,2)
    );

$max_filas = count($matriz);

for ($fila = 0; $fila <$max_filas; $fila++)
{
    echo "<table><tr>";
    $max_columnas_filas = count($matriz[$fila]);
    //for($columna = 0; $columna < $max_columnas_filas; $columna++)
    //{
    //    echo "[".$matriz[fila][$columna]."]";
    //}
}

?>
</body>
</html>