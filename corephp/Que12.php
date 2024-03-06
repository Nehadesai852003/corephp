<!---Write a PHP script which decodes the following JSON string---->



<?php

// JSON string to be decoded
$jsonString = '{"name": "John", "age": 25, "city": "New York"}';

// Decode the JSON string
$data = json_decode($jsonString, true); // The second parameter (true) is used to get an associative array

// Check if decoding was successful
if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
    echo "Error decoding JSON: " . json_last_error_msg();
} else {
    // Print the decoded data
    echo "Decoded Data:\n";
    print_r($data);
}

?>


