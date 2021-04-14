<?php

class Login {
    public static $user;
    
    public static function verificarLogin() {// $this não se usa com atributos static
        echo 'O usuário ' . self::$user . " está logado!";
    }
    
    public function sairSistema() {
        echo "Sair do sistema";
    }
}

Login::$user = "admin";
Login::verificarLogin();

echo "<hr>";

$login = new Login();
$login->sairSistema();