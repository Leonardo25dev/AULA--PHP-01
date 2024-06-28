<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get form data from $_POST
  $campo1 = $_POST['campo1'];
  $campo2 = $_POST['campo2'];
  // ... (Get data for remaining fields)

  // Process the form data here (e.g., validate, save to database, etc.)
  // ...

  // Display a message or redirect to another page
  echo "Formulário enviado com sucesso!";
}
?>


Campo 3: <input type="text" name="campo3"><br>
Campo 4: <input type="email" name="email"><br>
Campo 5: <input type="password" name="senha"><br>
