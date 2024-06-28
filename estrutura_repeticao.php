<!DOCTYPE html>
<html>
<body>

<?php
// Define an associative array with month names and their average temperatures
$temperaturas = [
    "Outubro" => 27,
    "Novembro" => 28,
    "Dezembro" => 19
];

// Iterate over the array using a foreach loop
foreach ($temperaturas as $mes => $temperatura) {
    echo "A temperatura média de $mes foi de $temperatura graus<br />";
}
?>

</body>
</html>
