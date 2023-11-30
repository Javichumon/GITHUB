function generarArrayAleatorio() {
    const array = [];
    for (let i = 0; i < 15; i++) {
      array.push(Math.floor(Math.random() * 10) + 1);
    }
    return array;
  }
  
  function mostrarAsteriscos(array) {
    for (let i = 0; i < array.length; i++) {
      const num = array[i];
      const asteriscos = '*'.repeat(num);
      console.log(`Posición ${i + 1}: ${asteriscos}`);
    }
  }
  
  const numerosAleatorios = generarArrayAleatorio();

  mostrarAsteriscos(numerosAleatorios);
  