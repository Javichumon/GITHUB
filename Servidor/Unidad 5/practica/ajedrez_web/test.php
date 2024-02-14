
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

function test_alta_usuario2()
{
    $u = new UserDataAccess();
    return $u->insertar('javier','premium','12345678');
}

function test_verificar_usuario_encontrado2()
{
    $perfil_esperado = 'premium';
    $u = new UserDataAccess();
    $perfil = $u->verificar('javier','12345678');
    return $perfil === $perfil_esperado;
}

function test_alta_usuario3()
{
    $u = new UserDataAccess();
    return $u->insertar('jose','premium','1234');
}

function test_verificar_usuario_encontrado3()
{
    $perfil_esperado = 'premium';
    $u = new UserDataAccess();
    $perfil = $u->verificar('jose','1234');
    return $perfil === $perfil_esperado;
}
function test_alta_usuario4()
{
    $u = new UserDataAccess();
    return $u->insertar('carlos','premium','12345678');
}

function test_verificar_usuario_encontrado4()
{
    $perfil_esperado = 'premium';
    $u = new UserDataAccess();
    $perfil = $u->verificar('carlos','12345678');
    return $perfil === $perfil_esperado;
}
var_dump(test_alta_usuario());
var_dump(test_verificar_usuario_encontrado());
var_dump(test_alta_usuario2());
var_dump(test_verificar_usuario_encontrado2());
var_dump(test_alta_usuario3());
var_dump(test_verificar_usuario_encontrado3());
var_dump(test_alta_usuario4());
var_dump(test_verificar_usuario_encontrado4());