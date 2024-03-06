<!---How can you declare the array (all type) in PHP? Explain with example
Covert a JSON string to array. ---> 


<!----Indexed arrays use numeric indices to access elements.----> 

<?php
// Declaration of an indexed array
$colors = array("Red", "Green", "Blue");

// Alternatively, using short syntax (PHP 5.4 and later)
// $colors = ["Red", "Green", "Blue"];

// Accessing elements
echo $colors[0]; // Output: Red
echo $colors[1]; // Output: Green
echo $colors[2]; // Output: Blue
?>



<!-----ssociative arrays use named keys to access elements.----> 


<?php
// Declaration of an associative array
$person = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);

// Alternatively, using short syntax
// $person = ["name" => "John", "age" => 30, "city" => "New York"];

// Accessing elements
echo $person["name"]; // Output: John
echo $person["age"];  // Output: 30
echo $person["city"]; // Output: New York
?>




<!----Multidimensional arrays contain other arrays as elements.----->


<?php
// Declaration of a multidimensional array
$students = array(
    array("John", 25, "Math"),
    array("Alice", 22, "Physics"),
    array("Bob", 28, "History")
);

// Accessing elements
echo $students[0][0]; // Output: John
echo $students[1][1]; // Output: 22
echo $students[2][2]; // Output: History
?>
