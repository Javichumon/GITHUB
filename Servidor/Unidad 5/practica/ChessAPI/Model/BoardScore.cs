namespace ChessAPI.Model;
public class BoardScore
{
    public int ValorMaterialPiezasBlancas { get;set;}
    public int ValorMaterialPiezasNegras { get;set;}
    public string MensajeDistancia { get;set;}

    public BoardScore()
    {
        this.ValorMaterialPiezasBlancas = 0;
        this.ValorMaterialPiezasNegras = 0;
        this.MensajeDistancia = string.Empty;
    }

    public BoardScore(int MaterialPiezasBlancas, int MaterialPiezasNegras, string MensajeDiferencia)
    {
        ValorMaterialPiezasBlancas = MaterialPiezasBlancas;
        ValorMaterialPiezasNegras = MaterialPiezasNegras;
        MensajeDistancia = MensajeDiferencia;
    }
    public string GetScore()
    {
        return MensajeDistancia;
    }
}