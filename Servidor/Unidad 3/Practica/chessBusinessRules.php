<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

require("chessDataAccess.php");

class ChessBusinessRules
{
    private $_Name;
    private $_ID;
    private $_Title;
    private $_White;
    private $_Black;
    private $_StartDate;
    private $_EndDate;
    private $_Winner;
    private $_State;
    
	function __construct()
    {
    }

    function init($ID,$name)
    {
        $this->_Name = $name;
        $this->_ID = $ID;
    }

    function initGame($ID, $title, $white, $black, $startDate, $endDate, $winner, $state)
    {
        $this->_ID = $ID;
        $this->_Title = $title;
        $this->_White = $white;
        $this->_Black = $black;
        $this->_StartDate = $startDate;
        $this->_EndDate = $endDate;
        $this->_Winner = $winner;
        $this->_State = $state;
    }

    function getName()
    {
        return $this->_Name;
    }
    function getID()
    {
        return $this->_ID;
    }
    function getStartDate()
    {
        return $this->_StartDate;
    }

    function getEndDate()
    {
        return $this->_EndDate;
    }

    function getWinner()
    {
        return $this->_Winner;
    }

    function getState()
    {
        return $this->_State;
    }
    function getTitle()
    {
        return $this->_Title;
    }
    function getWhite()
    {
        return $this->_White;
    }
    function getBlack()
    {
        return $this->_Black;
    }
    function obtainGames()
    {
        $chessGames = new ChessDataAccess();
        $rs = $chessGames->obtainGames();
        $gamesList = array();
        foreach ($rs as $game) {
            $oGameBusinessRules = new ChessBusinessRules();
            $oGameBusinessRules->initGame($game['ID'], $game['title'], $game['white'], $game['black'], $game['startDate'], $game['endDate'], $game['winner'], $game['state']);
            array_push($gamesList, $oGameBusinessRules);
        }

        return $gamesList;
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
    public function insertGame($white, $black, $title) 
    {
        $dataAcessObject = new ChessDataAccess();
        $insertData = $dataAcessObject->insertGameData($white, $black, $title);
    }
}

