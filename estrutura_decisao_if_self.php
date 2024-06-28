<!DOCTYPE html>
<html>
<body>

<?php
// Define the age and identity variables
$idade = 17;
$identidade = true;

// Check if the person is 18 or older and has a valid ID
if ($idade >= 18 && $identidade === true) {
    echo 'Seja bem-vindo!';
} else {
    // If either condition is not met, display an appropriate message
    if ($idade < 18) {
        echo 'Você precisa ter 18 anos ou mais para entrar.';
    } else if ($identidade !== true) {
        echo 'Você precisa apresentar uma identidade válida.';
    }
}
?>

</body>
</html>
