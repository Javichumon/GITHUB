<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Game List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="img/icon.jpg">
</head>

<body>
    <header>
        <h1 id="welcome">Listado de partidas</h1>
    </header>
    <nav>
        <ul>
            <li><a class="link" href="new_gameView.php">Nueva partida</a></li>
            <li><a class="link" href="gameListView.php">Lista de partidas</a></li>
        </ul>
    </nav>
    <main>
        <div class="tablaContainer">
        <table class="miTabla">
            <?php
            
            require("chessBusinessRules.php");

            $chessBusiness = new ChessBusinessRules();
            $gamesList = $chessBusiness->obtainGames();
            ?>
            <thead>
                <tr>
                    <th class="thColor">ID</th>
                    <th class="thColor">Título</th>
                    <th class="thColor">Jugador Blanco</th>
                    <th class="thColor">Jugador Negro</th>
                    <th class="thColor">Fecha de Inicio</th>
                    <th class="thColor">Fecha de Fin</th>
                    <th class="thColor">Ganador</th>
                    <th class="thColor">Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($gamesList as $game) {
                    echo "<tr>";
                    echo "<td class='listAlignWhite'>" . $game->getID() . "</td>";
                    echo "<td class='listAlignBlack'>";
                    echo "<a href='boardView.php?id=" . $game->getID() . "'>" . $game->getTitle() . "</a>". "</td>";
                    echo "<td class='listAlignWhite'>" . $game->getWhite() . "</td>";
                    echo "<td class='listAlignBlack'>" . $game->getBlack() . "</td>";
                    echo "<td class='listAlignWhite'>" . $game->getStartDate() . "</td>";
                    echo "<td class='listAlignBlack'>" . $game->getEndDate() . "</td>";
                    echo "<td class='listAlignWhite'>" . $game->getWinner() . "</td>";
                    echo "<td class='listAlignBlack'>" . $game->getState() . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        </div>
    </main>
    <footer>
        <p>© Página protegida con derechos de copyright ©</p>
    </footer>
</body>

</html>

