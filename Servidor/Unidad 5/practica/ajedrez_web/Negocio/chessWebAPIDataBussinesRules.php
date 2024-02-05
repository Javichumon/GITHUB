<?php
require("../AccesoDatos/chessWebAPIDataAccess.php");

class chessWebAPIDataBussinesRules
{
    private $chessAccess;

    public function __construct()
    {
        $this->chessAccess = new ChessWebAPIDataAccess();
    }

    public function getBoardState($board)
    {
        $dataAccessObject = new ChessWebAPIDataAccess();
        return $dataAccessObject->getBoardState($board);
        
    }
    public function getMovement($board,$fromRow,$fromColumn,$toRow,$toColumn)
    {
        $dataAccessObject = new ChessWebAPIDataAccess();
        return $dataAccessObject->getMovement($board,$fromRow,$fromColumn,$toRow,$toColumn);
    }
}
?>
