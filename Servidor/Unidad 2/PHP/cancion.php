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
    $vocales = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');

function reemplazarVocales($cadena, $vocal) {
    
    
    $vocales = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    
    $cadenaModificada = str_replace($vocales, $vocal, $cadena);
    
    return $cadenaModificada;
}


$cadena = "el sapo no se lava el pie... ";

echo $cadena;

for ($i=0; $i <5 ; $i++) 
{ 
    $cadenaModificada = reemplazarVocales($cadena, $vocales[$i]);
echo $cadenaModificada;

}
    ?>
    </body>
</html>