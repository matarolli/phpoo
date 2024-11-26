<?php
class Carro
{
    public $marca;
    public $modelo;
    public $ano;

    // Construtor
    public function __construct($marca, $modelo, $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function detalhes()
    {
        return "Carro: $this->marca $this->modelo, Ano: $this->ano.";
    }
}

// Criando objetos
$carro1 = new Carro("Toyota", "Corolla", 2020);
$carro2 = new Carro("Honda", "Civic", 2019);

// Exibindo os detalhes dos carros
echo $carro1->detalhes();
echo "<br>";
echo $carro2->detalhes();
