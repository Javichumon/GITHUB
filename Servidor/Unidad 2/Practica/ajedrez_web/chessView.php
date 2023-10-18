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


        echo "<table>";
        for ($a = 1; $a <= 4; $a++) {
            echo "<tr>";
            for ($i = 1; $i <= 4; $i++) {
                echo "<td class='white'></td>";
                echo "<td class='black'></td>";
            }
            echo "<tr>";
            for ($i = 1; $i <= 4; $i++) {
                echo "<td class='black'></td>";
                echo "<td class='white'></td>";
            }
        }
        echo "</table>";
        ?>
    </p>
</body>

</html>