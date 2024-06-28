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
  $sistema = isset($_POST['sistema']) ? $_POST['sistema'] : '';
  $numeros = isset($_POST['numeros']) ? $_POST['numeros'] : [];
  $processador = isset($_POST['processador']) ? $_POST['processador'] : '';

  // Display selected system
  echo "<b>Seu sistema operacional é: </b>" . $sistema . "<br><br>";

  // Display selected numbers (if any)
  if (isset($_POST["numeros"])) {
    echo "<b>Os números de sua preferência são:</b><br>";
    foreach ($numeros as $numero) {
      echo $numero . "<br>";
    }
  } else {
    echo "<b>Você não escolheu nenhum número!</b><br>";
  }

  // Display selected processor
  echo "<br><b>Seu processador é: </b>" . $processador . "<br>";
}
?>
