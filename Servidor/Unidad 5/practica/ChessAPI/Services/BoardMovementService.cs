using ChessAPI.Model;
public class BoardMovementService : IBoardMovementService
{
    public MovementAPI IsValid(string board, int fromRow, int fromColumn, int toRow, int toColumn)
    {
        Board b = new Board(board);
        var movements = b.IsValid( fromRow, fromColumn, toRow, toColumn);

        return movements;
    }
}