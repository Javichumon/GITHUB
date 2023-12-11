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
		$conexion = mysqli_connect('localhost', 'root', '12345');
		if (mysqli_connect_errno()) {
			echo "Error al conectar a MySQL: " . mysqli_connect_error();
		}
		mysqli_select_db($conexion, 'chess_game');
		$query = mysqli_prepare($conexion, "SELECT ID, name FROM T_Players");
		$query->execute();
		$result = $query->get_result();
		return $result;
	}
	function insertGameData($white, $black, $title)
	{
	
		
		$conexion = mysqli_connect('localhost', 'root', '12345');
		if (mysqli_connect_errno()) {
			echo "Error al conectar a MySQL: " . mysqli_connect_error();
		}
		mysqli_select_db($conexion, 'chess_game');
		$query = mysqli_prepare($conexion, "INSERT INTO T_Matches (white,black,title)VALUES(".$white.",".$black.",'".$title."')"
	);


		$query->execute();
		
	}
	function obtainGames()
    {
        $conexion = mysqli_connect('localhost', 'root', '12345');
        if (mysqli_connect_errno()) {
            echo "Error al conectar a MySQL: " . mysqli_connect_error();
        }
        mysqli_select_db($conexion, 'chess_game');
        $query = mysqli_prepare($conexion, "SELECT ID, title, white, black, startDate, endDate, winner, state FROM T_Matches");
        $query->execute();
        $result = $query->get_result();
        return $result;
    }
}
