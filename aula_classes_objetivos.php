abstract class Veiculo {
    protected $marca;
    protected $modelo;
    protected $placa;
    protected $ano;
    protected $velocidadeMaxima;

    public function __construct($marca, $modelo, $placa, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->placa = $placa;
        $this->ano = $ano;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function setPlaca($placa) {
        $this->placa = $placa;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function getVelocidadeMaxima() {
        return $this->velocidadeMaxima;
    }

    public function setVelocidadeMaxima($velocidadeMaxima) {
        $this->velocidadeMaxima = $velocidadeMaxima;
    }

    abstract function acelerar($velocidade);
}

<?php




