namespace ChessAPI.Model
{
    public class Bishop : Piece
    {
        public Bishop(ColorEnum color) : base(color)
        {
            
           
        }

        public override int GetScore()
        {
            return Config.BishopPieceValue;
        }

        public override MovementType ValidateSpecificRulesForMovement(Movement movement, Piece[,] board)
        {
            return MovementType.ValidNormalMovement;
        }
    }
}
