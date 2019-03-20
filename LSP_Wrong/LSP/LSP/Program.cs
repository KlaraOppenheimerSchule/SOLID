using System;

namespace LSP
{
    class Program
    {
        static void Main(string[] args)
        {
            var numbers = new int[] { 5, 7, 9, 8, 1, 6, 4 };

            SumCalculator sum = new SumCalculator(numbers);
            Console.WriteLine($"The sum of all the numbers: {sum.Calculate()}");
            Console.WriteLine();

            EvenNumbersSumCalculator firstEvenSum = new EvenNumbersSumCalculator(numbers);
            Console.WriteLine($"The sum of all the even numbers (first option): {firstEvenSum.Calculate()}");
            Console.WriteLine();

            SumCalculator secondEvenSum = new EvenNumbersSumCalculator(numbers);
            Console.WriteLine($"The sum of all the even numbers (second option): {secondEvenSum.Calculate()}");

            Console.ReadLine();
        }
    }
}
