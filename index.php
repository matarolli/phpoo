<?php
class Pessoa
{
    public $nome;
    public $idade;
    public function Falar()
    {
        echo $this->nome . ", de " . $this->idade . " anos de idade, acabou de falar...";
    }
}
$pedro = new Pessoa();
$pedro->nome = "Pedro Alcântara";
$pedro->idade = 25;
$pedro->Falar();