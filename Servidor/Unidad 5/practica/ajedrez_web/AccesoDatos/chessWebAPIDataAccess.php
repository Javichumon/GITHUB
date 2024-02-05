<?php
class chessWebAPIDataAccess
{
    public function getBoardState($board)
    {
        $url = "https://localhost:7246/ChessGame?board=" . $board;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 4);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $json = curl_exec($ch);

        if (!$json) {
            return false; // Manejar el error según sea necesario
        }

        curl_close($ch);

        $decodedData = json_decode($json, true);

        // Asegurar que el JSON contiene las claves necesarias
        if (isset($decodedData['valorMaterialPiezasBlancas']) && isset($decodedData['valorMaterialPiezasNegras']) && isset($decodedData['mensajeDistancia'])) {
            return $decodedData; // Devolver los datos decodificados
        } else {
            return false; // Manejar el caso donde el JSON no contiene las claves esperadas
        }
    }
    public function getMovement($board,$fromRow,$fromColumn,$toRow,$toColumn)
    {
        $url = "https://localhost:7246/Movement?board=". $board . "&fromColumn=".$fromColumn . "&fromRow=". $fromRow . "&toColumn=".$toColumn . "&toRow=" . $toRow;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 4);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $json = curl_exec($ch);

        if (!$json) {
            return false; // Manejar el error según sea necesario
        }

        curl_close($ch);

        $decodedData = json_decode($json, true);

        // Asegurar que el JSON contiene las claves necesarias
        if (isset($decodedData['movementStatus']) && isset($decodedData['operationResult']) && isset($decodedData['board'])) {
            return $decodedData; // Devolver los datos decodificados
        } else {
            return false; // Manejar el caso donde el JSON no contiene las claves esperadas
        }
    }
}
?>
