<!---Get random values from array--->




<?php

// Original array
$originalArray = array("Apple", "Banana", "Cherry", "Orange", "Grapes");

// Get a random key from the array
$randomKey = array_rand($originalArray);

// Access the value using the random key
$randomValue = $originalArray[$randomKey];

// Print the random value
echo "Random Value: $randomValue";

?>
