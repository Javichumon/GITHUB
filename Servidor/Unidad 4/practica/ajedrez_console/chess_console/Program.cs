namespace ChessAPI
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Begin Chess Console Test...");
            ChessGame chess = new ChessGame("ROBL,KNBL,BIBL,QUBL,KIBL,BIBL,KNBL,ROBL,PABL,PABL,PABL,PABL,PABL,PABL,PABL,PABL,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,ROWH,KNWH,BIWH,QUWH,KIWH,BIWH,KNWH,ROWH");
            chess.DrawBoard();
            var code = chess.GetBoardAsStringToChessWeb();
            Console.WriteLine(code);
            chess.TryToMove();
            Console.WriteLine();
            chess.DrawBoard();
            code = chess.GetBoardAsStringToChessWeb();
            Console.WriteLine(code);
            Console.WriteLine("End. Chess Console Test...");
        }
    }
}