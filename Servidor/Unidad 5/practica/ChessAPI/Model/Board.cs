namespace ChessAPI.Model
{
    public class Board
    {
        public Piece[,] board;

        public Board(string boardStatus)
        {
            string[] pieces = boardStatus.Split(',');

            board = new Piece[8, 8];

            int index = 0;

            for (int row = 0; row < 8; row++)
            {
                for (int col = 0; col < 8; col++)
                {
                    if (index < pieces.Length)
                    {
                        string pieceCode = pieces[index++];

                        if (pieceCode == "")
                        {
                            board[row, col] = null;
                        }
                        else if (pieceCode.Length >= 4)
                        {
                            string pieceType = pieceCode.Substring(0, 2);
                            string pieceColor = pieceCode.Substring(2, 2);

                            Piece piece = CreatePiece(pieceType, pieceColor);

                            board[row, col] = piece;
                        }
                        else
                        {
                            Console.WriteLine($"Error: Código de pieza no válido: '{pieceCode}'.");
                        }
                    }
                }
            }
        }

        private Piece CreatePiece(string pieceType, string pieceColor)
        {
            if (string.IsNullOrWhiteSpace(pieceType))
            {
                return null;
            }

            if (pieceColor.ToUpper() == "WH" || pieceColor.ToUpper() == "BL")
            {
                Piece.ColorEnum colorEnum = (pieceColor.ToUpper() == "WH") ? Piece.ColorEnum.WHITE : Piece.ColorEnum.BLACK;

                switch (pieceType.ToUpper())
                {
                    case "PA":
                        return new Pawn(colorEnum);
                    case "KN":
                        return new Knight(colorEnum);
                    case "BI":
                        return new Bishop(colorEnum);
                    case "RO":
                        return new Rook(colorEnum);
                    case "QU":
                        return new Queen(colorEnum);
                    case "KI":
                        return new King(colorEnum);

                    default:
                        Console.WriteLine($"Error: Tipo de pieza no reconocido: '{pieceType}'.");
                        return null;
                }
            }
            else
            {
                Console.WriteLine($"Error: No se pudo convertir el color '{pieceColor}' a Piece.ColorEnum.");
                return null;
            }
        }
        public BoardScore GetScore()
        {
            int ValorMaterialPiezasBlancas = 0;
            int ValorMaterialPiezasNegras = 0;
            int Distancia = 0;

            for (int row = 0; row < 8; row++)
            {
                for (int col = 0; col < 8; col++)
                {
                    Piece piece = board[row, col];

                    if (piece != null)
                    {
                        if (piece._color == Piece.ColorEnum.WHITE)
                        {
                            ValorMaterialPiezasBlancas += piece.GetScore();
                        }
                        else if (piece._color == Piece.ColorEnum.BLACK)
                        {
                            ValorMaterialPiezasNegras += piece.GetScore();
                        }
                    }
                }
            }
            String MensajeDiferencia = $"Van Empatados";
            
            if (ValorMaterialPiezasBlancas > ValorMaterialPiezasNegras)
            {
                Distancia = ValorMaterialPiezasBlancas - ValorMaterialPiezasNegras;
                MensajeDiferencia = $"Van ganando las piezas blancas por: {Distancia}";
            }
            else if (ValorMaterialPiezasNegras > ValorMaterialPiezasBlancas)
            {
                Distancia = ValorMaterialPiezasNegras - ValorMaterialPiezasBlancas;
                MensajeDiferencia = $"Van ganando las piezas negras por: {Distancia}";
            }

            BoardScore MensajeValor = new BoardScore(ValorMaterialPiezasBlancas, ValorMaterialPiezasNegras, MensajeDiferencia);
            return MensajeValor;
        }
        public string GetBoardState()
        {
            List<string> pieces = new List<string>();

            for (int row = 0; row < 8; row++)
            {
                for (int col = 0; col < 8; col++)
                {
                    Piece piece = board[row, col];
                    if (piece != null)
                    {
                        string pieceCode = piece.GetCode();
                        pieceCode = pieceCode.Replace("|", "");
                        pieces.Add(pieceCode);
                    }
                    else
                    {
                        pieces.Add("");
                    }
                }
            }
            string result = string.Join(",", pieces);

            return result;
        }
        public Piece GetPiece(int row, int column)
        {
            return board[row, column];
        }
        public MovementAPI IsValid(int fromRow, int fromColumn, int toRow, int toColumn)
        {
            Movement movement = new Movement(fromColumn,fromRow,toRow,toColumn);
            Piece piece = board[fromColumn, fromRow];
            if(movement.IsValid())
            {
                if(piece.Validate(movement, board)!= Piece.MovementType.InvalidNormalMovement)
                {
                    board[movement.toRow, movement.toColumn] = board[movement.fromRow, movement.fromColumn];
                    board[movement.fromRow, movement.fromColumn] = null;
                    return new MovementAPI(true,"OK",GetBoardState());
                }
            }
            return new MovementAPI(false,"Error",GetBoardState());
        }
        
    }
}