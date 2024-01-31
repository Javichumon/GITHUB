using ChessAPI.Model;

public interface IBoardService
{
    public BoardScore GetScore(string board); 

    public bool isValid();
}