<?php

class Pessoa {
    const nome = "Cristovão";
    
    public function exibirNome() {
        echo self::nome;
    }
}

class cristovao extends Pessoa{
    const nome = "Lira Braga";
    
    public function exibirNome() {
        echo parent::nome;
    }
}

$pessoa = new cristovao();
$pessoa->exibirNome();
        