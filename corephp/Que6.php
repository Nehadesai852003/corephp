<!---Write a program for this Pattern:
*****
*
*
*
***** ---> 

<?php

// Function to print the specified pattern
function printPattern() {
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            if ($i == 1 || $i == 5 || $j == 1) {
                echo "*"; 
            } else {
                echo " ";
            }
        }
        echo "\n";
    }
}

// Call the function to print the pattern
printPattern();

?>
