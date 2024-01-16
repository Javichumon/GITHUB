using System.Drawing;
using System.Threading.Tasks.Dataflow;
using ChessAPI.Model;

namespace ChessAPI
{
    internal class Board
    {
        public Piece[,] board;

        public Board()
        {
            board = new Piece[8, 8];
            //TODO Practica 02_7
            // Este constructor colocará las piezas en el tablero
            board[0, 0] = new Rook(Piece.ColorEnum.BLACK);
            board[0, 1] = new Knight(Piece.ColorEnum.BLACK);
            board[0, 2] = new Bishop(Piece.ColorEnum.BLACK);
            board[0, 3] = new Queen(Piece.ColorEnum.BLACK);
            board[0, 4] = new King(Piece.ColorEnum.BLACK);
            board[0, 5] = new Bishop(Piece.ColorEnum.BLACK);
            board[0, 6] = new Knight(Piece.ColorEnum.BLACK);
            board[0, 7] = new Rook(Piece.ColorEnum.BLACK);

            for (int i = 0; i < 8; i++)
            {
                board[1, i] = new Pawn(Piece.ColorEnum.BLACK);
            }

            for (int i = 0; i < 8; i++)
            {
                board[6, i] = new Pawn(Piece.ColorEnum.WHITE);
            }
            board[7, 0] = new Rook(Piece.ColorEnum.WHITE);
            board[7, 1] = new Knight(Piece.ColorEnum.WHITE);
            board[7, 2] = new Bishop(Piece.ColorEnum.WHITE);
            board[7, 3] = new Queen(Piece.ColorEnum.WHITE);
            board[7, 4] = new King(Piece.ColorEnum.WHITE);
            board[7, 5] = new Bishop(Piece.ColorEnum.WHITE);
            board[7, 6] = new Knight(Piece.ColorEnum.WHITE);
            board[7, 7] = new Rook(Piece.ColorEnum.WHITE);

        }
        public Board(string boardStatus)
        {
            
        }
        
        public Piece GetPiece(int row, int column)
        {
            return board[row, column];
        }



        public void Move(Movement movement)
        {
            if (movement.IsValid())
            {
                _Move(movement);
            }
        }
        // TODO Practica 02_3
        //Implementar el método _move, que no realizará ninguna validación
        //simplemente moverá en la matriz la pieza. Realiza modificaciones
        //en otras clases si lo consideras necesario...
        private void _Move(Movement movement)
        {
            int sourceRow = movement.FromBoardPosition.Row;
            int sourceColumn = movement.FromBoardPosition.Column;
            int destinationRow = movement.ToBoardPosition.Row;
            int destinationColumn = movement.ToBoardPosition.Column;


            board[destinationRow, destinationColumn] = board[sourceRow, sourceColumn];
            board[sourceRow, sourceColumn] = null;
        }

        // TODO Practica 02_4
        //Este método escribira por consola el tablero,
        //haciendo un salto de línea después de cada fila.
        //Para ver el formato del pintado, leer enunciado de la práctica
        public void Draw()
        {
            for (int row = 0; row < 8; row++)
            {
                for (int col = 0; col < 8; col++)
                {
                    if (board[row, col] != null)
                    {

                        Console.Write(board[row, col].GetCode());
                    }
                    else
                    {
                        if ((row + col) % 2 == 0)
                        {
                            Console.Write("|0000|");
                        }
                        else
                        {
                            Console.Write("|####|");
                        }
                    }
                }
                Console.WriteLine();
            }
        }
        // TODO Practica 02_5
        //Este método devuelve una cadena con el estado del tablero. Dicha cadena,
        //ha de tener el formato esperado por la parte Web para poder procesarse
        //y pintarse.



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



    }
}
