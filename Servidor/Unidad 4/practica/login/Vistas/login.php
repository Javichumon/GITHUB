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
        header("Location: chessView.php");
    }
    else
    {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset = "UTF-8">
</head>
<body>


    <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for = "name"> Usuario: </label>
        <input id="name" name = "name" type = "text">
        <label for = "name"> Contraseña: </label>
        <input id = "password" name = "password" type = "password">
        <input type = "submit">
    </form>

    <?php
    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);
        if (isset($error))
        {
            print("<div> No tienes acceso </div>");
        }
    ?>
</body>
</html>