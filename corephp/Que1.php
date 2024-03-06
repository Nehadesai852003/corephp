<!----Write a PHP program to enter marks of five subjects Physics, Chemistry,
Biology, Mathematics and Computer, calculate percentage and grade by if
else write a PHP program for find „Thursday‟ in week using switch
Function.---->  


<!-- PHP program to calculate percentage and grade based on marks: -->

<?php
// Function to calculate percentage
function calculatePercentage($marks) {
    $totalSubjects = count($marks);
     $totalMarks = array_sum($marks);
    $percentage = ($totalMarks / ($totalSubjects * 100)) * 100;
    return $percentage;
}

// Function to calculate grade based on percentage
function calculateGrade($percentage) {
    if ($percentage >= 90) {
        return 'A';
    } elseif ($percentage >= 80) {
        return 'B';
    } elseif ($percentage >= 70) {
        return 'C';
    } elseif ($percentage >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}
// Student's marks in each subject
$physics = 85;
$chemistry = 78;
$biology = 92;
$mathematics = 88;
$computer = 95;

// Array of marks
$marks = array($physics, $chemistry, $biology, $mathematics, $computer);

// Calculate percentage
$percentage = calculatePercentage($marks);

// Calculate grade
$grade = calculateGrade($percentage);

// Display results
echo "Percentage: " . number_format($percentage, 2) . "%\n";
echo "Grade: " . $grade . "\n";
?>

</br>
</br>
</br>




<!-- PHP program to find "Thursday" using switch function: -->


<?php
// Get the current day of the week
$currentDay = date('l');

// Convert the day to lowercase for case-insensitive comparison
$currentDayLowercase = strtolower($currentDay);

// Check the day using switch statement
switch ($currentDayLowercase) {
    case 'monday':
        echo "It's not Thursday, it's Monday.\n";
        break;
    case 'tuesday':
        echo "It's not Thursday, it's Tuesday.\n";
        break;
    case 'wednesday':
        echo "It's not Thursday, it's Wednesday.\n";
        break;
    case 'thursday':
        echo "Yes, today is Thursday!\n";
        break;
    case 'friday':
        echo "It's not Thursday, it's Friday.\n";
        break;
    case 'saturday':
        echo "It's not Thursday, it's Saturday.\n";
        break;
    case 'sunday':
        echo "It's not Thursday, it's Sunday.\n";
        break;
    default:
        echo "Couldn't determine the day.\n";
        break;
}
?>



