using ChessAPI.Model;

public interface IBoardMovementService
{
public MovementAPI IsValid(string board, int fromRow, int fromColumn, int toRow, int toColumn);
}