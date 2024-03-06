<!--How can you tell if a number is even or odd without using any Condition or
loop? ---> 


<?php

function checkEvenOrOdd($number) {
    $isEven = ($number / 2) == (int)($number / 2);

    if ($isEven) {
        echo "$number is even.";
    } else {
        echo "$number is odd.";
    }
}

// Example usage
$numberToCheck = 7;
checkEvenOrOdd($numberToCheck);

?>
