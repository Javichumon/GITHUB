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
            <label for="jugador_blanco" >Nombre Jugador Piezas Blancas</label>
            <select name="id_jugador_blanco" id="jugador_blanco">
               
                <option value="1">Jugador1</option>
                <option value="2">Jugador2</option>
                
            </select>

            <br><br>
            <label for="jugador_negro" >Nombre Jugador Piezas Negras</label>
            <select name="id_jugador_negro" id="jugador_negro">
                <option value="3">Jugador3</option>
                <option value="4">Jugador4</option>
            </select>

            <br><br>

            <label for="titulo_partida">Título de la Partida</label>
            <input type="text" name="titulo_partida" id="titulo_partida" required>

            <br><br>

            <input type="submit" value="Aceptar" href="boardView.php">
        </form>
    </main>

    <footer>
        <p>© Protegida con derechos de copyright ©</p>
        <footer>
</body>

</html>