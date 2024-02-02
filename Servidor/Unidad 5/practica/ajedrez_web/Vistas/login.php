<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

require ("../Negocio/userBusinessRules.php");

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $usuarioBL = new UserBusinessRules();
    $perfil =  $usuarioBL->verificar($_POST['name'],$_POST['password']);

    if ($perfil==="premium" || $perfil==="normal")
    {
        session_start(); //inicia o reinicia una sesión
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['perfil'] = $perfil;
        header("Location: index.php");
    }
    else
    {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>!Ajedrez!</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../styleForm.css">
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
        </ul>
    </nav>
    <main>

    <form class="formLogin" method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label class="labelLogin" for = "name"> Usuario :</label>
        <input  class="inputLogin" id="name" name = "name" type = "text">
        <label class="labelLogin" for = "name"> Contraseña :</label>
        <input class="inputLogin" id = "password" name = "password" type = "password">
        <input class="buttonLogin" type = "submit" value="Login">
    </form>

    <?php
    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);
        if (isset($error))
        {
            print("<div id='divNoAccess'> <p id='noAccess'> No tienes acceso </p></div>");
        }
    ?>
    </main>

<footer>
    <p>© Página protegida con derechos de copyright ©</p>
</footer>
</body>
</html>
