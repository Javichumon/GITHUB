<?php

require("../AccesoDatos/chessAccessDatos.php");

class ChessBusinessRules
{
    private $_ID;

	function __construct()
    {
    }

    function init($id)
    {
        $this->_ID = $id;
    }

    function getID()
    {
        return $this->_ID;
    }

    function obtener()
    {
        $chessDAL = new ChessDataAccess();
        $rs = $chessDAL->obtener();

		$chessList =  array();

        foreach ($rs as $chess)
        {
            $oChessBusinessRules = new ChessBusinessRules();
            $oChessBusinessRules->Init($chess['ID']);
            array_push($chessList,$oChessBusinessRules);
         
        }
        
        return $chessList;
        
    }
}

