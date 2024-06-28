<!DOCTYPE html>
<html>
<body>

<form id="formCadastro" name="formCadastro" method="POST" action="recebeForm.php">

  <b>Qual seu sistema operacional?</b><br>
  <input type="radio" name="sistema" value="Windows 8.1"> Windows 8.1<br>
  <input type="radio" name="sistema" value="Windows 10"> Windows 10<br>
  <input type="radio" name="sistema" value="Linux"> Linux<br>
  <input type="radio" name="sistema" value="Mac"> Mac<br><br>

  <b>Escolha os números de sua preferência:</b><br>
  <input type="checkbox" name="numeros[]" value="10"> 10<br>
  <input type="checkbox" name="numeros[]" value="100"> 100<br>
  <input type="checkbox" name="numeros[]" value="1000"> 1000<br><br>

  <b>Qual seu processador?</b><br>
  <select name="processador">
    <option value="Pentium">Pentium</option>
    <option value="AMD">AMD</option>
    <option value="Celeron">Celeron</option>
  </select><br><br>

  <input id="botaoEnviar" type="submit" value="Enviar">
</form>

</body>
</html>

<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Access form data
  $sistema = isset($_POST['sistema']) ? $_POST['sistema'] : ''; // Get selected operating system (if any)
  $numeros = isset($_POST['numeros']) ? $_POST['numeros'] : []; // Get selected numbers (empty array if none)
  $processador = isset($_POST['processador']) ? $_POST['processador'] : ''; // Get selected processor (if any)

  // Process the form data here (e.g., validate, save to database, etc.)
  // ... (Your processing logic here)

  // Display a success message or redirect to another page
  echo "Formulário enviado com sucesso!<br>";
  echo "Sistema Operacional selecionado: $sistema<br>";
  echo "Números selecionados: " . implode(', ', $numeros) . "<br>"; // Display chosen numbers in a comma-separated list
  echo "Processador selecionado: $processador<br>";
}
?>
