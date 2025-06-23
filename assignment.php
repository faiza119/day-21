<?php
// -------- 1. Grade Checker Using Conditionals --------
echo "<h2>1. Grade Checker</h2>";
$marks = 85; // change this value to test

// Using if-else
if ($marks >= 90 && $marks <= 100) {
    echo "Grade: A<br>";
} elseif ($marks >= 80 && $marks <= 89) {
    echo "Grade: B<br>";
} elseif ($marks >= 70 && $marks <= 79) {
    echo "Grade: C<br>";
} else {
    echo "Grade: Fail<br>";
}

// Using switch (approx logic by dividing marks)
$grade = floor($marks / 10);
echo "Using switch: ";
switch ($grade) {
    case 10:
    case 9:
        echo "Grade: A<br>";
        break;
    case 8:
        echo "Grade: B<br>";
        break;
    case 7:
        echo "Grade: C<br>";
        break;
    default:
        echo "Grade: Fail<br>";
}

// -------- 2. Loop Practice --------
echo "<h2>2. Loop Practice</h2>";

// For loop: 1 to 10
echo "Numbers from 1 to 10 (for loop):<br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<br>";

// While loop: even numbers from 1 to 20
echo "Even numbers from 1 to 20 (while loop):<br>";
$j = 2;
while ($j <= 20) {
    echo $j . " ";
    $j += 2;
}
echo "<br>";

// -------- 3. PHP Function --------
echo "<h2>3. Function to Calculate Square</h2>";

function square($num) {
    return $num * $num;
}

echo "Square of 5 is: " . square(5) . "<br>";
echo "Square of 9 is: " . square(9) . "<br>";
?>
