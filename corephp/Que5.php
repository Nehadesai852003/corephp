<!--Write a program to find whether a number is Armstrong or not Write a
program to print the below format :
5 9
2610
3711
4812 ---> 

<!---//Armstrong Number Checker:----> 


<?php

// Function to check if a number is Armstrong or not
function isArmstrong($num) {
    $originalNum = $num;
    $sum = 0;

    // Calculate the sum of cubes of digits
    while ($num > 0) {
        $digit = $num % 10;
        $sum += $digit ** 3;
        $num = (int)($num / 10);
    }

    // Check if the sum is equal to the original number
    return $originalNum === $sum;
}

// Example usage
$numberToCheck = 371;

if (isArmstrong($numberToCheck)) {
    echo "$numberToCheck is an Armstrong number.";
} else {
    echo "$numberToCheck is not an Armstrong number.";
}

?>


<!----Print the specified format:---->

<?php

// Function to print the specified format
function printFormat() {
    for ($i = 5; $i <= 12; $i++) {
        for ($j = 9; $j <= $i; $j++) {
            echo $j;
        }
        echo "\n";
    }
}

// Call the function to print the format
printFormat();

?>
