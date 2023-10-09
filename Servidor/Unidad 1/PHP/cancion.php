<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canción</title>
</head>
<body>
    <p>
<?php

function reemplazarVocales($cadena, $vocal) {
    
    $vocales = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    
    
    $cadenaModificada = str_replace($vocales, $vocal, $cadena);
    
    return $cadenaModificada;
}


$cadena = "el sapo no se lava el pie... ";

echo $cadena;

$cadenaModificada = reemplazarVocales($cadena, "a");
echo $cadenaModificada;
$cadenaModificada = reemplazarVocales($cadena, "e");
echo $cadenaModificada;
$cadenaModificada = reemplazarVocales($cadena, "i");
echo $cadenaModificada;
$cadenaModificada = reemplazarVocales($cadena, "o");
echo $cadenaModificada;
$cadenaModificada = reemplazarVocales($cadena, "u");

echo $cadenaModificada;
    ?>
    </body>
</html>