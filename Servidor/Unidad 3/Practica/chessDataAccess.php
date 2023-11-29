<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);
class ChessDataAccess
{
	
	function __construct()
    {
    }

	function obtain()
	{
		$conexion = mysqli_connect('localhost','root','12345');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'chess_game');
		$query = mysqli_prepare($conexion, "SELECT name FROM T_Players");
        $query->execute();
        $result = $query->get_result();
		return $result;

	}
	function insertGameData($gameData)
	{

		$id = null;
        $title = $gameData['title_game'];
        $white = $gameData['id_white_player'];
        $black = $gameData['id_black_player'];
        $startDate = $gameData['start_datetime'];
        $endDate = null; 
        $state = 'En Curso'; 


		$conexion = mysqli_connect('localhost','root','12345');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'chess_game');
		$query = mysqli_prepare($conexion, "INSERT INTO T_Games (ID,title,white,black,startDate,endDate,state)
		VALUES (?,?,?,?,?,?,? )");
        $query->execute();
        $result = $query->get_result();
		if ($query) {
            return true;
        } else {
            return false;
        }
}
}



















