let lista = [];
        
        for (let i = 0; i < 15; i++) {
            let random = Math.random();
            random = random * 10 + 1;
            random = Math.trunc(random);
            lista[i] = random;
        }
        document.getElementById("numeros").innerHTML = lista;

        let listaSinRepetir = [];
        let repetido;
        for (let i = 0; i < 10; i++) {
            while (!listaSinRepetir[i]) {
                repetido = true;
                while (repetido == true) {
                    let random2 = Math.random();
                    random2 = random2 * 10 + 1;
                    random2 = Math.trunc(random2);
                    for (let j = 0; j < listaSinRepetir.length; j++) {
                        if (listaSinRepetir[j] == random2) {
                            repetido = true;
                            break;
                        } else {
                            repetido = false;
                        }
                    }
                    listaSinRepetir[i] = random2;
                }

            }
        }
        document.getElementById("numerosSinRepetir").innerHTML = listaSinRepetir;
