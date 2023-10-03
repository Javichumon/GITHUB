<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Prueba Vocales</title>
</head>

<body>
    <p>
    <?php
        define("LETRA_NO_ENCONTRADA","a");
?>


<?php
      function validarParametro($parameter)
      {
        $res = LETRA_NO_ENCONTRADA;

        $existe_parametro = contieneClave($parameter, $_GET);

        if ($existe_parametro)
        {
            $name = htmlspecialchars($_GET[$parameter],ENT_QUOTES);

            if (isset($name))
            {
                $res = $name;

            }
        }

        return $res;

      } 

      function contieneClave($clave,$variable_super_global)
      {
          $result = false;

          foreach($variable_super_global as $clave_array=>$valor)
          {
            if ($clave==$clave_array)
            {
                $result = true;
                break;
            }
          }

          return $result;
      }
      
?>


<?php
    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);
    
    require("funciones_y_condiciones.php"); //si no existe se genera un "FATAL ERROR" que no puede ser capturado por un try

    $letra = validarParametro("letra");
    var_dump($letra);

    if ($letra==LETRA_NO_ENCONTRADA)
    {
        echo "<br>No se ha pasado parametro letra por la url<br>";
    }
    else
    {
        $mensaje = 'La letra: '.$letra.' ';
        $es_vocal = esVocal($letra) ? 'es una vocal' : 'no es una vocal';
        echo $mensaje.$es_vocal;
    }
?>

    </p>
</body>

</html>