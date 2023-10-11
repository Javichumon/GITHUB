
using System;

namespace HelloWorld 
{
    internal class Program
    {   
        //1. Escribe un método “static” en C# que reciba como parámetro un
        //array bidimensional de números y devuelva verdadero si la suma de
        //todas sus filas es la misma.
        static bool SumTotal(int[,] arrayNumeros)
        {
            
        }
        //2. Escribe método “static” en C# que reciba como parámetro un array
        //bidimensional de números y que devuelva el índice de la fila cuya
        //suma de elementos es más grande.
        static int SumBigNumber(int[,] arrayNumeros)
        {
            
        }
        //3. Escribe método “static” en C# que reciba como parámetro un array
        //bidimensional de números y una Lista de enteros y devuelva
        //verdadero si el array bidimensional contiene todos los números de la
        //lista.
        static bool ListCheck(int[,] arrayNumeros,List<int> listadoNuemeros)
        {
            
        }
        static void Main(string[] args)
        {
            //Bucle for
            for (int i = 0; i <= 7; i++)
            {
                Console.WriteLine(i);
            }
            //Bucle While
             int n = 10;
             while (n>0)
             {
                 n--;
                 Console.WriteLine(n);
             }
            //Definir array
             int[] numers = new int[2]{5,25};
             foreach (var item in numers)
             {
                Console.WriteLine(item);
             }
             //Definir array bidimensional
             char[,] board = new char[3,3]
             {
                {'-','-','-'},
                {'-','-','-'},
                {'-','-','-'}
             };

             for (int i = 0; i < 3; i++)
             {
                
                for (int j = 0; j < 3; j++)
                {
                    Console.Write(board[i,j]);
                }

                
                Console.WriteLine("");
             }
             
            //Definir Lista
             var numbers2 = new List<int>(){2,4,6};
             foreach (var item in numbers2)
             {
                Console.WriteLine(item);
             }

            //Definir Try-Catch
            try
            {
                int x = 10;
                int y = x/0;
            }
            catch (System.Exception ex)
            {
                Console.WriteLine(ex.Message);
            }
        }
    }
}