namespace ChessAPI
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Begin Chess Console Test...");
            ChessGame chess = new ChessGame();
            chess.DrawBoard();
            chess.TryToMove();
            Console.WriteLine();
            chess.DrawBoard();
            var code = chess.GetBoardAsStringToChessWeb();
            Console.WriteLine(code);
            Console.WriteLine("End. Chess Console Test...");
        }
    }
}