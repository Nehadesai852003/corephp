<!---Write a PHP program to find the largest of three numbers using ternary
Operator.--->



<?php

// Function to find the largest of three numbers using ternary operator
function findLargest($num1, $num2, $num3) {
    $largest = ($num1 > $num2) ? ($num1 > $num3 ? $num1 : $num3) : ($num2 > $num3 ? $num2 : $num3);
    return $largest;
}

// Example usage
$num1 = 10;
$num2 = 25;
$num3 = 15;

$result = findLargest($num1, $num2, $num3);

echo "The largest number among $num1, $num2, and $num3 is: $result";

?>
