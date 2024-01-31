namespace ChessAPI.Model
{
    public class MovementAPI
    {
        public bool MovementStatus {get;set;}
        public string OperationResult {get;set;}
        public string board {get;set;}

        public MovementAPI()
        {
        }
        public MovementAPI(bool MovementStatus,string OperationResult,string board)
        {
            this.MovementStatus = MovementStatus;
            this.OperationResult = OperationResult;
            this.board = board;
        }
    }
}