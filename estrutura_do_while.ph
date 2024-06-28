<!DOCTYPE html>
<html>
<body>

<?php
$cont = 2000;

// Loop until $cont reaches 1999 (inclusive)
do {
  $dobro = $cont * 2; // Calculate double using multiplication
  echo "O dobro de $cont é $dobro <br>"; // Improved output formatting
  $cont++;
} while ($cont <= 1999); // Use <= to include 1999 in the loop

?>

</body>
</html>
