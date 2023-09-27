using System;

namespace HelloWorld // Note: actual namespace depends on the project name.
{
    internal class Program
    {

        public static int Factorial(int x)
        {
            int res = -1;
            if(x==0)
            res = 1;
            else
            {
                if(x>0)
                {
                    res = x;
                    while (x>1)
                    {
                        res = res * (x-1);
                        x--;
                    }
                }
                else
                {
                    x = 0;
                }
            }
            return res;
        }

         public static void numerosPares(int x)
         {
            for (int i = 2; i <= x*2; i++)
            {
                if(i % 2 == 0)
                {
                   Console.WriteLine(Factorial(i));
                }
                
            }
            
         }
        static void Main(string[] args)
        {
            Console.WriteLine("javier");
            
            
                numerosPares(10);
                
            
        }
    }
}