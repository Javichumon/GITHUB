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
        // Estado del tablero
        $board = "KNBL,BIBL,QUBL,KIBL,BIBL,KNBL,ROBL,PABL,PABL,PABL,PABL,PABL,PABL,PABL,PABL,ROBL,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,ROWH,KNWH,BIWH,QUWH,KIWH,BIWH,KNWH,ROWH";

        echo "<table>";
        for ($a = 0; $a < 8; $a++) {
            for ($i = 0; $i < 8; $i++) {
                if(($a+$i) % 2)
                {
                    echo "<td class='black'></td>";
                }
                else 
                {
                    echo "<td class='white'></td>";
                    
                }
            }
            echo "<tr>";
        }
        echo "</table>";        

        
        function DrawChessGame($board)
        {

        }

        ?>
    </p>
</body>

</html>