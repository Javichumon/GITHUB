class NIF {
    constructor(numero, letra) {
        this.numero = numero;
        this.letra = letra;
    }

    esCorrecto() {
        if (isNaN(this.numero) || this.numero.toString().length !== 7) {
            return false;
        }

        const letrasPosibles = "TRWAGMYFPDXBNJZSQVHLCKE";
        const resto = this.numero % 23;
        const letraCorrecta = letrasPosibles.charAt(resto);

        
        return this.letra === letraCorrecta;
    }
}

const nifCorrecto1 = new NIF(2255667, 'B');
const nifCorrecto2 = new NIF(1489562, 'J');
const nifIncorrecto1 = new NIF(1156987, 'A');
const nifIncorrecto2 = new NIF(3569874, 'P');

console.log(`NIF 02255667B es correcto: ${nifCorrecto1.esCorrecto()}`);
console.log(`NIF 01489562J es correcto: ${nifCorrecto2.esCorrecto()}`);
console.log(`NIF 01156987A es correcto: ${nifIncorrecto1.esCorrecto()}`);
console.log(`NIF 03569874P es correcto: ${nifIncorrecto2.esCorrecto()}`);
