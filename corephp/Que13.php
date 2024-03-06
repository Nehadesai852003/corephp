<!---Use a for loop to total the contents of an integer array called numbers which
has five elements. Store the result in an integer called total. ---->

<?php

// Define the integer array
$numbers = array(10, 20, 30, 40, 50);

// Initialize the total variable
$total = 0;

// Use a for loop to iterate through the array and calculate the total
for ($i = 0; $i < count($numbers); $i++) {
    $total += $numbers[$i];
}

// Print the total
echo "The total sum of the array elements is: $total";

?>
