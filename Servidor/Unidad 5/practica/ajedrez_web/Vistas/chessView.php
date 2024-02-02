<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>!Ajedrez!</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="icon" type="image/png" href="../img/icon.jpg">
</head>

<body>
    <header>
        <h1 id="welcome">¡Bienvenido a la mejor página de ajedrez!</h1>
    </header>
    <nav>
        <ul>
            <li><a class="link" href="index.php">Inicio</a></li>
            <li><a class="link" href="new_gameView.php">Nueva partida</a></li>
            <li><a class="link" href="gameListView.php">Lista de partidas</a></li>
            <?php
            if(isset($_SESSION['name']))
            {
                echo "<li><a class='link' href='login.php'><img src='../img/login.png' alt='Login'></a></li>";
            }else
            {
                echo "<li><a href='logout.php'> Cerrar sesión </a></li>";
            }
            
            ?>
        </ul>
    </nav>
    <main>

    <?php
    
        session_start(); // reanudamos la sesión
        if (!isset($_SESSION['name']))
        {
            header("Location: login.php");
        }
    ?>


    <h1> Listado de chesss </h1>
    <?php echo "Bienvenido: ".$_SESSION['name']; ?>
    <br>
    

    <?php
    
        require("../Negocio/chessBusinessRules.php");

        $chessBL = new ChessBusinessRules();
        $chessData = $chessBL->obtain();
        
        foreach ($chessData as $chess)
        {
            echo "<div>";
            print($chess->getID());
            echo "</div>";
        }
    ?>
    </main>

<footer>
    <p>© Página protegida con derechos de copyright ©</p>
</footer>
</body>

</html>