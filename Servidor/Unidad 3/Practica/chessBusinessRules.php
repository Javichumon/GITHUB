<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

require("chessDataAccess.php");

class ChessBusinessRules
{
    private $_Nombre;
    private $_ID;

	function __construct()
    {
    }

    function init($ID,$nombre)
    {
        $this->_Nombre = $nombre;
        $this->_ID = $ID;
    }

    function getNombre()
    {
        return $this->_Nombre;
    }
    function getID()
    {
        return $this->_ID;
    }

    function obtain()
    {
        $chessNames = new ChessDataAccess();
        $rs = $chessNames->obtain();
		$nameList =  array();
        foreach ($rs as $names)
        {
            $oNamesBusinessRules = new ChessBusinessRules();
            $oNamesBusinessRules->init($names['ID'],$names['name']);

            array_push($nameList,$oNamesBusinessRules);
        }
        
        return $nameList;
    }
    public function insertGame($white, $black, $title) {
        
        $dataAcessObject = new ChessDataAccess();
        $insertData = $dataAcessObject->insertGameData($white, $black, $title);
    }
}

