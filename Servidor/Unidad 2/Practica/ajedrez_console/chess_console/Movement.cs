using System.Data;

namespace ChessAPI
{
    public class Movement
    {
        private BoardPosition _fromBoardPosition;
        private BoardPosition _toBoardPosition;

        public Movement(BoardPosition fromBoardPosition, BoardPosition toBoardPosition)
        {
            _fromBoardPosition = fromBoardPosition;
            _toBoardPosition = toBoardPosition;
        }

        public BoardPosition FromBoardPosition
        {
            get { return _fromBoardPosition; }
            set { _fromBoardPosition = value; }
        }

        public BoardPosition ToBoardPosition
        {
            get { return _toBoardPosition; }
            set { _toBoardPosition = value; }
        }
        /// TODO Practica 02_1
        /// Ha de validar el rango de los 2 objetos BoardPosition encapsulados
        /// en esta clase.
        public bool IsValid()
        {
            return true;
        }
    }
}
