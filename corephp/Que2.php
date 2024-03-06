<!---Write a PHP program to check Leap years between 1901 to 2016 Using
nested if---> 



<?php
// Function to check if a year is a leap year
function isLeapYear($year) {
    if ($year % 4 == 0) {
        // If divisible by 4
        if ($year % 100 == 0) {
            // If divisible by 100
            if ($year % 400 == 0) {
                // If divisible by 400
                return true;
            } else {
                // If not divisible by 400
                return false;
            }
        } else {
            // If not divisible by 100
            return true;
        }
    } else {
        // If not divisible by 4
        return false;
    }
}

// Check and display leap years between 1901 and 2016
echo "Leap years between 2001 and 2026:\n" .  "</br>";?>

<table>
    <?php
    for ($year = 2001; $year <= 2026; $year++) {
        if (isLeapYear($year)) { ?>
    <tr>
        <td>
            <?php  echo $year . "\n" . "</br>"; ?>
        </td>
    </tr>
<?php } } ?>
</table>


