using System;

namespace ChessAPI
{
    public class ChessAnalyzer
    {
        public int ValorMaterialPiezasBlancas { get; private set; }
        public int ValorMaterialPiezasNegras { get; private set; }
        public string MensajeDistancia { get; private set; }

        public ChessAnalyzer(string boardStatus)
        {
            string[] pieces = boardStatus.Split(',');

            ValorMaterialPiezasBlancas = 0;
            ValorMaterialPiezasNegras = 0;

            foreach (string pieceCode in pieces)
            {
                if (pieceCode.Length >= 3) 
                {
                    char pieceType = pieceCode[0];
                    char pieceColor = pieceCode[2];

                    int valorPieza = GetValorMaterialForPiece(pieceType);
                    if (pieceColor == 'w' || pieceColor == 'W')
                    {
                        ValorMaterialPiezasBlancas += valorPieza;
                    }
                    else if (pieceColor == 'b' || pieceColor == 'B')
                    {
                        ValorMaterialPiezasNegras += valorPieza;
                    }
                }
            }

            int distancia = Math.Abs(ValorMaterialPiezasBlancas - ValorMaterialPiezasNegras);
            MensajeDistancia = (distancia > 0)
                ? $"Van ganando las piezas {(ValorMaterialPiezasBlancas > ValorMaterialPiezasNegras ? "BLANCAS" : "NEGRAS")} por una distancia de {distancia} puntos."
                : "Van EMPATE";
        }

        private int GetValorMaterialForPiece(char pieceType)
        {
            switch (pieceType)
            {
                case 'P':
                    return 1;
                case 'H':
                    return 3;
                case 'B':
                    return 3;
                case 'R':
                    return 5;
                case 'Q':
                    return 9;
                default:
                    return 0;
            }
        }
    }
}
