<?php
class Login
{
    private $email;
    private $senha;

    // Método GET para obter o email
    public function getEmail()
    {
        return $this->email;
    }

    // Método SET para definir o email, com validação
    public function setEmail($email)
    {
        $emailValidado = filter_var($email, FILTER_VALIDATE_EMAIL);
        if ($emailValidado) {
            $this->email = $emailValidado;
        } else {
            echo "Email inválido!<br>";
        }
    }

    // Método GET para obter a senha
    public function getSenha()
    {
        return $this->senha;
    }

    // Método SET para definir a senha
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    // Método para verificar o login
    public function Logar()
    {
        if ($this->email == "testemail@mail.com" and $this->senha == "123456") {
            echo "Logado com sucesso!<br>";
        } else {
            echo "Email ou senha inválido!<br>";
        }
    }
}

// Criando um objeto da classe Login
$login = new Login();

// Definindo email e senha
$login->setEmail("testemail@mail.com");
$login->setSenha("123456");

// Tentando fazer login
$login->Logar();

// Exibindo o email cadastrado
echo $login->getEmail();
