namespace ChessAPI
{
    internal class ChessGame
    {
        private Board board;


        public ChessGame(string tablero)
        {
            board = new Board();
        }

        public void DrawBoard()
        {
            this.board.Draw();
        }

        public void TryToMove()
        {
            // TODO Practica 02_6
            //Instancia un movimiento dentro del tablero, desde una posición
            //en la que haya una pieza hasta otro. De momento no se realizan
            //validaciones salvo que sea una posición que esté dentro del tablero.
            var fromPosition = new BoardPosition(0, 0);
            var toPosition = new BoardPosition(5, 0);
            var movement = new Movement(fromPosition, toPosition);
            this.board.Move(movement);
            // this.board.Move(movement);
        }

        public string GetBoardAsStringToChessWeb()
        {
            return board.GetBoardState();
        }

    }
}
