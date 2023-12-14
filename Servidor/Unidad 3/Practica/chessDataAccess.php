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

        $queryMatches = mysqli_prepare($conexion, "INSERT INTO T_Matches (white, black, title) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($queryMatches, "iss", $white, $black, $title);
        $queryMatches->execute();

        $gameID = mysqli_insert_id($conexion);

        $initialBoard = "ROBL,KNBL,BIBL,QUBL,KIBL,BIBL,KNBL,ROBL,PABL,PABL,PABL,PABL,PABL,PABL,PABL,PABL,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,ROWH,KNWH,BIWH,QUWH,KIWH,BIWH,KNWH,ROWH";

        $queryBoardStatus = mysqli_prepare($conexion, "INSERT INTO T_Board_Status (IDGame, board) VALUES (?, ?)");
        mysqli_stmt_bind_param($queryBoardStatus, "is", $gameID, $initialBoard);
        $queryBoardStatus->execute();

        mysqli_close($conexion);

        return $gameID;
    }

	function obtainGames()
    {
        $conexion = mysqli_connect('localhost', 'root', '12345');
        if (mysqli_connect_errno()) {
            echo "Error al conectar a MySQL: " . mysqli_connect_error();
        }
        mysqli_select_db($conexion, 'chess_game');
        $query = mysqli_prepare($conexion, "SELECT T_Matches.ID, T_Matches.title, T_Matches.white, T_Matches.black, T_Matches.startDate, T_Matches.endDate, T_Matches.winner, T_Matches.state FROM T_Matches left JOIN T_Board_Status ON T_Matches.ID = T_Board_Status.IDGame group by t_matches.ID");

        $query->execute();
        $result = $query->get_result();
        return $result;
    }
	
	function obtainBoardStateByID($gameID)
    {
        $conexion = mysqli_connect('localhost', 'root', '12345');
        if (mysqli_connect_errno()) {
            echo "Error al conectar a MySQL: " . mysqli_connect_error();
        }
        mysqli_select_db($conexion, 'chess_game');
        $query = mysqli_prepare($conexion, "SELECT board FROM T_Board_Status WHERE IDGame = ? ORDER BY ID ASC");
        mysqli_stmt_bind_param($query, "i", $gameID);
        $query->execute();
        $result = $query->get_result();

        $boardStates = array();
        while ($row = $result->fetch_assoc()) {
            $boardStates[] = $row['board'];
        }

        return $boardStates;
    }
	
}
?>
