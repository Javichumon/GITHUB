<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>New Game</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
        <form action="boardView.php" method="post">
            <label for="white_player">Nombre Jugador Piezas Blancas</label>
            <select name="id_white_player" id="white_player">

                <option value="1">Jugador1</option>
                <option value="2">Jugador2</option>

            </select>

            <br><br>
            <label for="black_player">Nombre Jugador Piezas Negras</label>
            <select name="id_black_player" id="jblack_player">
                <option value="3">Jugador3</option>
                <option value="4">Jugador4</option>
            </select>

            <br><br>

            <label for="title_game">Título de la Partida</label>
            <input type="text" name="title_game" id="title_game" required>

            <br><br>

            <input type="submit" value="Aceptar" href="boardView.php">
        </form>
    </main>

    <footer>
        <p>© Página protegida con derechos de copyright ©</p>
    </footer>
</body>

</html>