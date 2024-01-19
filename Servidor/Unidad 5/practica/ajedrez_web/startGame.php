<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

require("new_gameView.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    
    $businessRules = new ChessBusinessRules();

    
    $id_white_player = $_POST['id_white_player'];
    $id_black_player = $_POST['id_black_player'];
    $title_game = $_POST['title_game'];

    
    $result = $businessRules->insertGame($id_white_player,$id_black_player,$title_game);
   
} else 
{
    echo 'Acceso no permitido.';
}
?>
