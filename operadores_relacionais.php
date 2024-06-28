<!DOCTYPE html>
<html>
<body>

<?php
// Initialize variables
$a = 1;
$b = 1; // Assign value to $b
$c = "Léo";
$d = "Léo";

// Demonstrate comparison operators

// Equal: ==
echo "$a == $b: "; // Output: 1 == 1:
echo ($a == $b) ? "TRUE" : "FALSE"; // Check and print result
echo "<br>";

// Identical: ===
echo "$a === $b: "; // Output: 1 === 1:
echo ($a === $b) ? "TRUE" : "FALSE"; // Check and print result
echo "<br>";

// Not equal: != or <>
echo "$a != $c: "; // Output: 1 != "Léo":
echo ($a != $c) ? "TRUE" : "FALSE"; // Check and print result
echo "<br>";

// Less than: <
echo "$a < $b: "; // Output: 1 < 1:
echo ($a < $b) ? "TRUE" : "FALSE"; // Check and print result
echo "<br>";

// Greater than: >
echo "$a > $b: "; // Output: 1 > 1:
echo ($a > $b) ? "TRUE" : "FALSE"; // Check and print result
echo "<br>";

// Less than or equal: <=
echo "$a <= $b: "; // Output: 1 <= 1:
echo ($a <= $b) ? "TRUE" : "FALSE"; // Check and print result
echo "<br>";

// Greater than or equal: >=
echo "$a >= $b: "; // Output: 1 >= 1:
echo ($a >= $b) ? "TRUE" : "FALSE"; // Check and print result
echo "<br>";
?>

</body>
</html>
