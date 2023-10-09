<?php
ini_set('display_errors', 'On');
ini_set('html_errors', '0');

class Calculadora
{

    function __construct()
    {

    }

    function factorial($x)
    {
        $res = -1;
        if($x==0)
        {
            $res = 1;
        }
        else
        {
          if($x>0)
          {
            $res = $x;
            while($x>1)
            {
                $res=$res * ($x -1);
                $x--;
            }
          }
          else
          {
            throw new Exception("error");
          }  
        }
        return $res;
    }
    function coeficienteBinomial($n,$k)
    {
        $aux_n= $this->factorial($n);
        $aux_k=$this->factorial($k);
        $aux_n_k=$this->factorial($n - $k);
        $aux_total=$aux_k * $aux_n_k;
        $calculo = $aux_n / $aux_total;
        return $calculo;
    }
    function convierteBinarioDecimal($binario)
    {
       $decimal = bindec($binario);
       return $decimal;
    }

    function sumaNumerosPares($numeros)
    {
      $contador = 0;
      for ($i=0; $i <count($numeros) ; $i++) { 
        if($numeros[$i] % 2 == 0)
        {
        $contador = $contador + $numeros[$i];
        }
        return $contador; 
      }
    }
    
    function esPalindromo($cadena)
    {
      if (strlen($cadena)<2) {

        return false;

    }
    $cadena=strtolower(str_replace([" ", ",", "."], "", $cadena));

 

    for ($i=0;$i<strlen($cadena);$i++) {

        if ($cadena[$i]!=$cadena[strlen($cadena)-$i-1]) {

            return false;

        }

    }

    return true;
    }
  }