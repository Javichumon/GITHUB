<?php
    
        session_start(); // reanudamos la sesión
        if (!isset($_SESSION['name'])) {
            header("Location: login/Vistas/login.php");
        }
        $perfilUsuario = $_SESSION['perfil'];
    ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>!Ajedrez!</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="img/icon.jpg">
</head>

<body>
    <header>
        <h1 id="welcome">¡Bienvenido a la mejor página de ajedrez!</h1>
    </header>
    <nav>
        <ul>
            <li><a class="link" href="../../index.php">Inicio</a></li>
            <li><a class="link" href="new_gameView.php">Nueva partida</a></li>
            <?php
           
            if ($perfilUsuario == 'premium') {
                echo '<li><a class="link" href="gameListView.php">Lista de partidas</a></li>';
            }
            ?>
            
            
            <?php
            if(!isset($_SESSION['name']))
            {
                echo "<li><a class='link' href='/login/Vistas/login.php'>Abrir sesión </a></li>";
            }else
            {
                echo "<li><a href='login/Vistas/logout.php'> Cerrar sesión </a></li>";
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
            <?php
            if ($perfilUsuario == 'normal'){
                echo "<h1 id='takePremium'>Si quieres acceder a el listado de partidas...</h1>";
                echo "<h1 id='takePremium'>¡Hazte Premium!</h1>";
            }
            ?>
    </main>

    <footer>
        <p>© Página protegida con derechos de copyright ©</p>
    </footer>
</body>

</html>