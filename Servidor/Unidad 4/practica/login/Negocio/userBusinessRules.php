<?php

require("../AccesoDatos/userDataAccess.php");

class UserBusinessRules
{

	function __construct()
    {
    }
    function verificar($usuario, $clave)
    {
        $usuariosDAL = new UserDataAccess();
        $res = $usuariosDAL->verificar($usuario,$clave);
        
        return $res;
        
    }
}

