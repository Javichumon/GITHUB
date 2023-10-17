using System;

namespace HelloWorld 
{
    internal class Program
    {   
        //1. Escribe un método “static” en C# que reciba como parámetro un
        //array bidimensional de números y devuelva verdadero si la suma de
        //todas sus filas es la misma.
        static bool SumaFilasIguales(int[,] matriz)
        {
        int numFilas = matriz.GetLength(0);
        int numColumnas = matriz.GetLength(1);

        int sumaReferencia = 0;
        for (int columna = 0; columna < numColumnas; columna++)
        {
            sumaReferencia += matriz[0, columna];
        }

        for (int fila = 1; fila < numFilas; fila++)
        {
            int sumaFilaActual = 0;
            for (int columna = 0; columna < numColumnas; columna++)
            {
                sumaFilaActual += matriz[fila, columna];
            }

            if (sumaFilaActual != sumaReferencia)
            {
                return false; 
            }
        }

        return true; 
        }
        //2. Escribe método “static” en C# que reciba como parámetro un array
        //bidimensional de números y que devuelva el índice de la fila cuya
        //suma de elementos es más grande.
        static int EncontrarFilaMaxima(int[,] matriz)
        {
        int numFilas = matriz.GetLength(0);
        int numColumnas = matriz.GetLength(1);

        int indiceFilaMaxima = 0;
        int sumaMaxima = 0;

        for (int fila = 0; fila < numFilas; fila++)
        {
            int sumaFilaActual = 0;
            for (int columna = 0; columna < numColumnas; columna++)
            {
                sumaFilaActual += matriz[fila, columna];
            }

            if (sumaFilaActual > sumaMaxima)
            {
                sumaMaxima = sumaFilaActual;
                indiceFilaMaxima = fila;
            }
        }

        return indiceFilaMaxima;
        }

        //3. Escribe método “static” en C# que reciba como parámetro un array
        //bidimensional de números y una Lista de enteros y devuelva
        //verdadero si el array bidimensional contiene todos los números de la
        //lista.
        static bool ContieneTodosNumeros(int[,] matriz, List<int> numeros)
    {
        int numFilas = matriz.GetLength(0);
        int numColumnas = matriz.GetLength(1);

        foreach (int numero in numeros)
        {
            bool encontrado = false;

            for (int fila = 0; fila < numFilas; fila++)
            {
                for (int columna = 0; columna < numColumnas; columna++)
                {
                    if (matriz[fila, columna] == numero)
                    {
                        encontrado = true;
                        break;
                    }
                }

                if (encontrado)
                    break;
            }

            if (!encontrado)
                return false;
        }

        return true; 
    }
    //Este seria la forma alternativa que he encontrado por internet de hacer el ejercicio 3 
    //Usando HashSet que en este caso sirve para comprobar la coleccion de numeros dentro
    //Del array bidimensional, asi haciendo una comprobacion de si todos los nuemros de la lista
    //Son iguales a los del array.
        static bool ContieneTodosNumerosConHashSet(int[,] matriz, List<int> numeros)
    {
        int numFilas = matriz.GetLength(0);
        int numColumnas = matriz.GetLength(1);

        
        HashSet<int> numerosSet = new HashSet<int>(numeros);

        
        for (int fila = 0; fila < numFilas; fila++)
        {
            for (int columna = 0; columna < numColumnas; columna++)
            {
                int elemento = matriz[fila, columna];
                if (numerosSet.Contains(elemento))
                {
                    
                    numerosSet.Remove(elemento);

                    
                    if (numerosSet.Count == 0)
                    {
                        return true;
                    }
                }
            }
        }

        return false; 
    }

        static void Main(string[] args)
        {
            int[,] matriz = {
            {1, 2, 3},
            {4, 5, 6},
            {7, 8, 9}
        };

        List<int> numeros = new List<int> { 1, 2, 3, 4, 5 };

        bool resultado = SumaFilasIguales(matriz);
        Console.WriteLine("¿La suma de todas las filas es la misma? " + resultado);

        int indiceFilaMaxima = EncontrarFilaMaxima(matriz);
        Console.WriteLine("El índice de la fila con la suma máxima es: " + indiceFilaMaxima);

        bool contieneTodos = ContieneTodosNumeros(matriz, numeros);
        Console.WriteLine("El array bidimensional contiene todos los números de la lista: " + contieneTodos);
        

            // //Bucle for
            // for (int i = 0; i <= 7; i++)
            // {
            //     Console.WriteLine(i);
            // }
            // //Bucle While
            //  int n = 10;
            //  while (n>0)
            //  {
            //      n--;
            //      Console.WriteLine(n);
            //  }
            // //Definir array
            //  int[] numers = new int[2]{5,25};
            //  foreach (var item in numers)
            //  {
            //     Console.WriteLine(item);
            //  }
            //  //Definir array bidimensional
            //  char[,] board = new char[3,3]
            //  {
            //     {'-','-','-'},
            //     {'-','-','-'},
            //     {'-','-','-'}
            //  };

            //  for (int i = 0; i < 3; i++)
            //  {
                
            //     for (int j = 0; j < 3; j++)
            //     {
            //         Console.Write(board[i,j]);
            //     }

                
            //     Console.WriteLine("");
            //  }
             
            // //Definir Lista
            //  var numbers2 = new List<int>(){2,4,6};
            //  foreach (var item in numbers2)
            //  {
            //     Console.WriteLine(item);
            //  }

            // //Definir Try-Catch
            // try
            // {
            //     int x = 10;
            //     int y = x/0;
            // }
            // catch (System.Exception ex)
            // {
            //     Console.WriteLine(ex.Message);
            // }
        }
    }
}