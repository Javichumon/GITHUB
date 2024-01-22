public class BoardScore
{
        private int ValorMaterialPiezasBlancas;
        private int ValorMaterialPiezasNegras;
        private string MensajeDistancia;

        public BoardScore(int MaterialPiezasBlancas, int MaterialPiezasNegras, string MensajeDiferencia)
        {
            ValorMaterialPiezasBlancas = MaterialPiezasBlancas;
            ValorMaterialPiezasNegras = MaterialPiezasNegras;
            MensajeDistancia = MensajeDiferencia;
        }
        public string GetAnalysisResult()
        {
        return MensajeDistancia;
        }
}