<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>New Game</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="img/icon.jpg">
</head>

<body>
    <header>
        <h1 id="welcome">¡Empieza una nueva partida!</h1>
    </header>
    <nav>
        <li><a class="link" href="new_gameView.php">Nueva partida</a></li>
        <li><a class="link" href="gameListView.php">Lista de partidas</a></li>
    </nav>
    <main>
        
        <h2>Crear Nueva Partida</h2>
        <form action="startGame.php" method="post">
            <?php
        require("chessBusinessRules.php");
                $playerNameBL = new ChessBusinessRules();
                $playerName = $playerNameBL->obtain();
                
                echo '<label for="white_player">Nombre Jugador Piezas Blancas</label>';
                echo '<select name="id_white_player" id="white_player">';

                foreach ($playerName as $names){
                    echo "<option value=\"{$names->getID()}\">{$names->getNombre()}</option>";
                    
               }

                echo '</select><br><br>';

                echo '<label for="black_player">Nombre Jugador Piezas Negras</label>';
                echo '<select name="id_black_player" id="black_player">';

                foreach ($playerName as $names){
                    echo "<option value=\"{$names->getID()}\">{$names->getNombre()}</option>";
                    
               }

                echo '</select><br><br>';
        ?> 

            <label for="title_game">Título de la Partida</label>
            <input type="text" name="title_game" id="title_game" required>

            <br><br>

            <input type="submit" name="aceptar" value="Aceptar">
        </form>

        <?php
            if (isset($_POST['aceptar'])) {
        
            header("Location: boardView.php");
        }
        ?>
    </main>

    <footer>
        <p>© Página protegida con derechos de copyright ©</p>
    </footer>
</body>

</html>