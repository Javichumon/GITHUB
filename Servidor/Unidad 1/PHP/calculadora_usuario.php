<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <p>
<?php
ini_set('display_errors', 'On');
ini_set('html_errors', '0');

require("calculadora.php");
function test_factorial_1()
{
    
    $calculadora = new Calculadora();
    $x = $calculadora->factorial(4);
    return ($x);
}

$texto = "El resultado es: " .test_factorial_1();
echo $texto;

function test_Binomial_1()
{
    
    $calculadora = new Calculadora();
    $x = $calculadora->coeficienteBinomial(6,2);
    return ($x);
}
    
$texto = " El resultado es: " .test_Binomial_1();
echo $texto;

function test_Binario_Decimal_1()
{
    
    $calculadora = new Calculadora();
    $x = $calculadora->convierteBinarioDecimal(1111);
    return ($x);
}
$texto = " El resultado es: " .test_Binario_Decimal_1();
echo $texto;

function test_Nuemros_Pares_1()
{
    
    $calculadora = new Calculadora();
    $vector = array(1,2,3,4,5,6,7,8);
    $x = $calculadora->sumaNumerosPares($vector);
    return ($x);
}

$texto = " El resultado es: " .test_Nuemros_Pares_1();
echo $texto;

function test_palindromo()
{
    
    $calculadora = new Calculadora();
    $x = $calculadora->esPalindromo("Somos o no somos");
    return ($x);
}

$texto = " El resultado es: " .test_palindromo();
echo $texto;


?>
</p>
</body>
</html>

