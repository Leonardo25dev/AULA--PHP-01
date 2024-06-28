1. Crie a classe base Veículo com as propriedades e métodos especificados.

2. Crie as classes derivadas Carro e Moto que herdam de Veiculo.

3. Implemente os métodos adicionais exibirDetalhes para cada classe
derivada.

4. Crie um script PHP que instancia objetos das classes Carro e Moto e exiba
os detalhes de cada veículo.

5. Adicione um método acelerar na classe Veiculo e sobrescreva-o nas
classes Carro e Moto para exibir uma mensagem diferente para cada tipo de
veículo.


1.  Classe Base Veículo:

class Veiculo {

// Public properties for common vehicle attributes
public $marca;
public $modelo;
public $placa;
public $cor;
public $velocidadeAtual = 0;

// Constructor to initialize vehicle attributes
function __construct($marca, $modelo, $placa, $cor) {
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->placa = $placa;
    $this->cor = $cor;
}

// Method to set the vehicle's speed
function setVelocidade($velocidade) {
    $this->velocidadeAtual = $velocidade;
}

// Base method to accelerate the vehicle (to be overridden by subclasses)
function acelerar() {
    echo "Acelerando o veículo... "; // Default acceleration message
}

// Method to display the vehicle's basic details
function exibirDetalhes() {
    echo "Marca: " . $this->marca . "<br>";
    echo "Modelo: " . $this->modelo . "<br>";
    echo "Placa: " . $this->placa . "<br>";
    echo "Cor: " . $this->cor . "<br>";
    echo "Velocidade atual: " . $this->velocidadeAtual . " km/h<br>";
}
}

2.  Classes Derivadas Carroe Moto:

class Carro extends Veiculo {

// Constructor to initialize car attributes (including type)
function __construct($marca, $modelo, $placa, $cor, $tipo) {
    parent::__construct($marca, $modelo, $placa, $cor); // Call parent constructor
    $this->tipo = $tipo;
}

// Overridden accelerate method for cars
function acelerar() {
    echo "Acelerando o " . $this->tipo . " " . $this->marca . " " . $this->modelo . "... Vrummmmm!<br>";
}

// Overridden exibirDetalhes method for cars (including type)
function exibirDetalhes() {
    parent::exibirDetalhes(); // Call parent method first
    echo "Tipo: " . $this->tipo . "<br>";
}
}

class Moto extends Veiculo {

// Constructor to initialize motorcycle attributes (including cilindrada)
function __construct($marca, $modelo, $placa, $cor, $cilindrada) {
    parent::__construct($marca, $modelo, $placa, $cor); // Call parent constructor
    $this->cilindrada = $cilindrada;
}

// Overridden accelerate method for motorcycles
function acelerar() {
    echo "Acelerando a " . $this->marca . " " . $this->modelo . " " . $this->cilindrada . "cc... Rumm rummmm!<br>";
}

// Overridden exibirDetalhes method for motorcycles (including cilindrada)
function exibirDetalhes() {
    parent::exibirDetalhes(); // Call parent method first
    echo "Cilindrada: " . $this->cilindrada . "cc<br>";
}
}

3.  script PHP para instanciar e exibir detalhes do veículo:

<?php

// Create a Car object
$carro = new Carro("Fiat", "Palio", "ABC-1234", "Vermelho", "Hatch");

// Set the car's speed
$carro->setVelocidade(80);

// Display car details
echo "<h2>Detalhes do Carro:</h2>";
$carro->exibirDetalhes();

// Create a Motorcycle object
$moto = new Moto("Honda", "CG Fan", "DEF-5678", "Preto", 160);

// Set the motorcycle's speed
$moto->setVelocidade(60);

// Display motorcycle details
echo "<br><h2>Detalhes da Moto:</h2>";
$moto->exibirDetalhes();




