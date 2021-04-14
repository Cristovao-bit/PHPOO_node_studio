<?php

class Login {
    private $nome;
    private $email;
    private $senha;
    
    public function getNome() {
        return $this->nome;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }
    
    public function getSenha() {
        return $this->senha;
    }
    
    public function setSenha($e) {
        $this->senha = $e;
    }
    
    public function __construct($email, $senha, $nome) {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }
    
    public function Logar() {
        if($this->email == "teste@teste.com" and $this->senha == "123456"):
            echo "Logado com sucesso!";
        else:
            echo "Erro ao logar!";
        endif;
    }
}

$login = new Login("teste@teste.com", "123456", "Cristovão L. Braga");
$login->Logar();
echo "<br>";
echo $login->getNome();