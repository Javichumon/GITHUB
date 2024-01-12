<?php
    
        session_start(); // reanudamos la sesión
        if (!isset($_SESSION['name']))
        {
            header("Location: login/Vistas/login.php");
        }
        $perfilUsuario = $_SESSION['perfil'];
    ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Board</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="img/icon.jpg">
</head>

<body>
    <header>
        <h1 id="welcome">¡Que empiece el juego!</h1>
    </header>
    <nav>
        <ul>
            <li><a class="link" href="../../index.php">Inicio</a></li>
            <li><a class="link" href="new_gameView.php">Nueva partida</a></li>
            <?php
           
            if ($perfilUsuario == 'premium') {
                echo '<li><a class="link" href="gameListView.php">Lista de partidas</a></li>';
            }
            ?>
            <?php
            if(!isset($_SESSION['name']))
            {
                echo "<li><a class='link' href='/login/Vistas/login.php'>Abrir sesión </a></li>";
            }else
            {
                echo "<li><a href='login/Vistas/logout.php'> Cerrar sesión </a></li>";
            }
            
            ?>
            <?php
            if (isset($_SESSION['name'])) {

                $user = $_SESSION['name'];

                echo "<li id='username'> Bienvenido " . $user .  "</li>"; 
            }

            ?>
        </ul>
    </nav>
    <main>
        <p>
            <?php
            error_reporting(E_ALL);
            ini_set('display_errors', '1');
            function DrawChessGame($board)
            {
                $pieces = explode(",", $board);

                if (count($pieces) != 64) {
                    echo "La cadena de texto debe tener exactamente 64 elementos para llenar el tablero de ajedrez.";
                    return;
                }

                echo '<table class="chessTable">';
                $index = 0;
                for ($row = 0; $row < 8; $row++) {
                    echo '<tr>';

                    for ($col = 0; $col < 8; $col++) {

                        $class = ($row + $col) % 2 == 0 ? 'white' : 'black';
                        echo '<td class="' . $class . '">';

                        if (!empty($pieces[$index])) {
                            $pieceImage = 'img/' . $pieces[$index] . '.png';
                            echo '<img src="' . $pieceImage . '" alt="' . $pieces[$index] . '">';
                        }

                        echo '</td>';
                        $index++;
                    }
                    echo '</tr>';
                }
                echo '</table>';
            }

            require("chessBusinessRules.php");

            $gameID = isset($_GET['id']) ? $_GET['id'] : null;

            if ($gameID) {
                $chessBusiness = new ChessBusinessRules();

                $boardStates = $chessBusiness->obtainBoardStateByID($gameID);

                $currentBoardIndex = isset($_GET['boardIndex']) ? $_GET['boardIndex'] : 0;

                if (isset($_POST['first'])) {
                    $currentBoardIndex = 0;
                } elseif (isset($_POST['previous']) && $currentBoardIndex > 0) {
                    $currentBoardIndex--;
                } elseif (isset($_POST['next']) && $currentBoardIndex < count($boardStates) - 1) {
                    $currentBoardIndex++;
                } elseif (isset($_POST['last'])) {
                    $currentBoardIndex = count($boardStates) - 1;
                }

                $currentBoard = $boardStates[$currentBoardIndex];

                DrawChessGame($currentBoard);

                echo '<div>';
                echo '<form action="boardView.php?id=' . $gameID . '&boardIndex=' . $currentBoardIndex . '" method="post">';
                echo '<input type="hidden" name="gameID" value="' . $gameID . '">';
                echo '<input type="submit" name="first" value="Primera">';
                echo '<input type="submit" name="previous" value="Anterior">';
                echo '<input type="submit" name="next" value="Siguiente">';
                echo '<input type="submit" name="last" value="Última">';
                echo '</form>';
                echo '</div>';
            } else {
                DrawChessGame("ROBL,KNBL,BIBL,QUBL,KIBL,BIBL,KNBL,ROBL,PABL,PABL,PABL,PABL,PABL,PABL,PABL,PABL,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,ROWH,KNWH,BIWH,QUWH,KIWH,BIWH,KNWH,ROWH");
            }
            ?>
        </p>
    </main>

    <footer>
        <p>© Página protegida con derechos de copyright ©</p>
    </footer>
</body>

</html>

