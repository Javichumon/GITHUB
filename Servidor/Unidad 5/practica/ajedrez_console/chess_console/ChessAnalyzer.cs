using System;
using System.Collections.Generic;
using ChessAPI.Model;

namespace ChessAPI
{
    public class ChessAnalyzer
    {
        // private readonly Dictionary<string, int> valorMaterialPorPieza = new Dictionary<string, int>
        // {
        //     {"PA", 1},
        //     {"KN", 3},
        //     {"BI", 3},
        //     {"RO", 5},
        //     {"QU", 9},
        //     {"KI", 0}
        // };

         private int ValorMaterialPiezasBlancas;
         private int ValorMaterialPiezasNegras;
         private string MensajeDistancia;

        // public ChessAnalyzer(string boardStatus)
        // {
        //     CalcularValorMaterial(boardStatus);
        // }

        // private void CalcularValorMaterial(string boardStatus)
        // {
        //     string[] pieces = boardStatus.Split(',');

        //     ValorMaterialPiezasBlancas = 0;
        //     ValorMaterialPiezasNegras = 0;

        //     foreach (string pieceCode in pieces)
        //     {
        //         if (pieceCode.Length == 4)
        //         {
        //             string pieceType = pieceCode.Substring(0, 2);
        //             char pieceColor = pieceCode[2];

        //             if (valorMaterialPorPieza.TryGetValue(pieceType, out int valorPieza))
        //             {
        //                 if (pieceColor == 'W')
        //                 {
        //                     ValorMaterialPiezasBlancas += valorPieza;
        //                 }
        //                 else if (pieceColor == 'B')
        //                 {
        //                     ValorMaterialPiezasNegras += valorPieza;
        //                 }
        //                 else
        //                 {
        //                     Console.WriteLine($"Error: Color de pieza no reconocido: '{pieceColor}'.");
        //                 }
        //             }
        //             else
        //             {
        //                 Console.WriteLine($"Error: Valor de pieza no reconocido: '{pieceType}'.");
        //             }
        //         }
        //     }

        //     int distancia = Math.Abs(ValorMaterialPiezasBlancas - ValorMaterialPiezasNegras);
        //     MensajeDistancia = (distancia > 0)
        //         ? $"Van ganando las piezas {(ValorMaterialPiezasBlancas > ValorMaterialPiezasNegras ? "BLANCAS" : "NEGRAS")} por una distancia de {distancia} puntos."
        //         : "Van EMPATE";
        // }
        public ChessAnalyzer(int MaterialPiezasBlancas, int MaterialPiezasNegras, string MensajeDiferencia)
        {
            ValorMaterialPiezasBlancas = MaterialPiezasBlancas;
            ValorMaterialPiezasNegras = MaterialPiezasNegras;
            MensajeDistancia = MensajeDiferencia;
        }
        public string GetAnalysisResult()
        {
        return MensajeDistancia;
        }
    }
}

