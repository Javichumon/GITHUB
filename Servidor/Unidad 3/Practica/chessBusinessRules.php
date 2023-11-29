<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

require("chessDataAccess.php");

class ChessBusinessRules
{
    private $_Nombre;

	function __construct()
    {
    }

    function init($nombre)
    {
        $this->_Nombre = $nombre;
    }

    function getNombre()
    {
        return $this->_Nombre;
    }


    function obtain()
    {
        $chessNames = new ChessDataAccess();
        $rs = $chessNames->obtain();
		$nameList =  array();
        foreach ($rs as $names)
        {
            $oNamesBusinessRules = new ChessBusinessRules();
            $oNamesBusinessRules->Init($names['name']);
            array_push($nameList,$oNamesBusinessRules);
        }
        
        return $nameList;
    }
    public function insertGame($db, $gameData) {
        
        return $db->insertGameData($gameData);
    }
}

