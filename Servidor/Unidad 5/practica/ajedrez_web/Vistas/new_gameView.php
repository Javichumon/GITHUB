<?php
    
        session_start(); // reanudamos la sesión
        if (!isset($_SESSION['name']))
        {
            header("Location: login.php");
        }
        $perfilUsuario = $_SESSION['perfil'];
    ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>New Game</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../styleForm.css">
    <link rel="icon" type="image/png" href="../img/icon.jpg">
</head>

<body>
    <header>
        <h1 id="welcome">¡Empieza una nueva partida!</h1>
    </header>
    <nav>
        <ul>
            <li><a class="link" href="index.php">Inicio</a></li>
            <li><a class="link" href="new_gameView.php">Nueva partida</a></li>
            <?php
            if ($perfilUsuario == 'premium') {
                echo '<li><a class="link" href="gameListView.php">Lista de partidas</a></li>';
            }
            ?>
            <?php
            if(!isset($_SESSION['name']))
            {
                echo "<li><a class='link' href='login.php'><img src='img/login.png' alt='Login'></a></li>";
            }else
            {
                echo "<li><a href='logout.php'> Cerrar sesión </a></li>";
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
        
        <h2>Crear Nueva Partida</h2>
        <form class="formNewGame" action="../Negocio/startGame.php" method="post">
            <?php
        require("../Negocio/chessBusinessRules.php");
                $playerNameBL = new ChessBusinessRules();
                $playerName = $playerNameBL->obtain();
                
                echo '<label class="labelNewGame" for="white_player">Nombre Jugador Piezas Blancas</label>';
                echo '<select class="selectNewGame" name="id_white_player" id="white_player">';

                foreach ($playerName as $names)
                {
                    echo "<option value=\"{$names->getID()}\">{$names->getName()}</option>";
                    
                }

                echo '</select><br><br>';

                echo '<label class="labelNewGame" for="black_player">Nombre Jugador Piezas Negras</label>';
                echo '<select class="selectNewGame" name="id_black_player" id="black_player">';

                foreach ($playerName as $names)
                {
                    echo "<option value=\"{$names->getID()}\">{$names->getName()}</option>";
                    
                }

                echo '</select><br><br>';
        ?> 

            <label class="labelNewGame" for="title_game">Título de la Partida</label>
            <input class="inputNewGame" type="text" name="title_game" id="title_game" required>

            <br><br>

            <input class="btnNewGame" type="submit" name="aceptar" value="Aceptar">
        </form>

        <?php
            if (isset($_POST['aceptar'])) 
            {
            header("Location: ../Vistas/boardView.php");
            }
        ?>
    </main>

    <footer>
        <p>© Página protegida con derechos de copyright ©</p>
    </footer>
</body>

</html>