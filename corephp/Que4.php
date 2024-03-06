<!---Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21,
o 34 --> 

<?php

// Function to generate and print Fibonacci series up to a given limit
function generateFibonacci($limit) {
    $fibonacciSeries = array(0, 1);

    while (end($fibonacciSeries) + prev($fibonacciSeries) <= $limit) {
        $fibonacciSeries[] = end($fibonacciSeries) + prev($fibonacciSeries);
    }

    // Print the Fibonacci series
    echo implode(', ', $fibonacciSeries);
}

// Set the limit for the Fibonacci series
$limit = 34;

// Call the function to generate and print the Fibonacci series
generateFibonacci($limit);

?>
