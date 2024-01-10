<!doctype html>
<html>
<head>

</head>

<body>
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
    <a href="logout.php"> Cerrar sesión </a>

    <?php
    
        require("../Negocio/chessBusinessRules.php");

        $chessBL = new ChessBusinessRules();
        $chessData = $chessBL->obtener();
        
        foreach ($chessData as $chess)
        {
            echo "<div>";
            print($chess->getID());
            echo "</div>";
        }
    ?>
</body>

</html>