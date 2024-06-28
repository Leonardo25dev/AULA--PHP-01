<!DOCTYPE html>
<html>
<body>

<form id="formCadastro" name="formCadastro" method="POST" action="recebeForm.php">

  Campo 1: <input type="text" name="campo1"><br>
  Campo 2: <input type="text" name="campo2"><br>
  <input type="submit" value="Enviar">
</form>

</body>
</html>

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
