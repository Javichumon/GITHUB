
<?php

require("./AccesoDatos/userDataAccess.php");

function test_alta_usuario()
{
    $u = new UserDataAccess();
    return $u->insertar('alex','normal','passwordalex');
}

function test_verificar_usuario_encontrado()
{
    $perfil_esperado = 'normal';
    $u = new UserDataAccess();
    $perfil = $u->verificar('alex','passwordalex');
    return $perfil === $perfil_esperado;
}


var_dump(test_alta_usuario());
var_dump(test_verificar_usuario_encontrado());