<!----Write program to remove duplicate values from array----> 


<?php

// Original array with duplicate values
$originalArray = array(1, 2, 3, 2, 4, 5, 6, 1);

// Remove duplicates using array_unique
$uniqueArray = array_unique($originalArray);

// Convert the resulting array to maintain sequential keys
$uniqueArray = array_values($uniqueArray);

// Print the original and unique arrays
echo "Original Array: ";
print_r($originalArray);

echo "Unique Array: ";
print_r($uniqueArray);

?>
