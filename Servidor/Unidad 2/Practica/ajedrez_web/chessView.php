<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess</title>
    <link rel="stylesheet" href="chess_game_style.css">
</head>

<body>
    <h1>Chess</h1>

    <p>
    <?php
        function DrawChessGame($board) {
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


    </p>
</body>

</html>