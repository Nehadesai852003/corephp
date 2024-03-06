<!----Declare a Multi Dimensioned array of floats called balances having Three
rows and five columns.---->


<?php

// Declare a multidimensional array of floats
$balances = array(
    array(10.5, 20.3, 15.8, 30.2, 25.6),
    array(12.1, 22.7, 18.4, 32.0, 28.5),
    array(11.0, 21.5, 17.2, 31.1, 26.8)
);

// Alternatively, using short syntax (PHP 5.4 and later)
// $balances = [
//     [10.5, 20.3, 15.8, 30.2, 25.6],
//     [12.1, 22.7, 18.4, 32.0, 28.5],
//     [11.0, 21.5, 17.2, 31.1, 26.8]
// ];

// Print the multidimensional array
echo "Multidimensional Array (balances):\n";
print_r($balances);

?>
