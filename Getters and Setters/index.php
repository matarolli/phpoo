<?php
class Login
{
    private $email;
    private $senha;

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail()
    {
        $this->email = $email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha()
    {
        $this->senha = $senha;
    }

    public function Logar()
    {
        if ($this->email == "testemail@mail.com" and $this->senha == "123456") {
            echo "Logado com sucesso!";
        } else {
            echo "Email ou senha inválido!";
        }
    }
}

$login = new Login();

$login->setEmail("testemail@mail.com");
$login->setSenha("123456");

$login->Logar();
echo "<br>";

echo $login->getEmail();
