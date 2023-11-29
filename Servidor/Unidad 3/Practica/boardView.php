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
        <li><a class="link" href="new_gameView.php">Nueva partida</a></li>
        <li><a class="link" href="gameListView.php">Lista de partidas</a></li>
    </nav>
    <main>
        
        <p>
            <?php
            function DrawChessGame($board)
            {
                $pieces = explode(",", $board);

                if (count($pieces) != 64) {
                    echo "La cadena de texto debe tener exactamente 64 elementos para llenar el tablero de ajedrez.";
                    return;
                }

                echo '<table>';
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



            $board = "ROBL,KNBL,BIBL,QUBL,KIBL,BIBL,KNBL,ROBL,PABL,PABL,PABL,PABL,PABL,PABL,PABL,PABL,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,ROWH,KNWH,BIWH,QUWH,KIWH,BIWH,KNWH,ROWH";
            DrawChessGame($board);
            ?>
    </main>

    <footer>
        <p>© Página protegida con derechos de copyright ©</p>
    </footer>
</body>

</html>