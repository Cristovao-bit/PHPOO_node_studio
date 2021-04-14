<?php

class Login {
    private $email; // atributo
    private $senha; // atributo
    
    public function getEmail() {
        return $this->email;
    } 
    
    public function getSenha() {
        return $this->senha;
    }
    
    public function setEmail($e) {
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }
    
    public function setSenha($r) {
        $this->senha = $r;
    }
    
    public function logar() { // metodo
        if($this->email == "teste@teste.com.br" and $this->senha == "123456"):
            echo "Logado com sucesso!";
        else:
            echo "Erro ao logar!";
        endif;
    }
}

$login = new Login();
$login->setEmail("teste@teste.com.br");
$login->setSenha("123456");
$login->logar();
echo "<br>";
echo $login->getEmail();