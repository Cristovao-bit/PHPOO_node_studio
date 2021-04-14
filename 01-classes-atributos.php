<?php

class Pessoa {
    public $nome; // atributo
    public $idade;
    
    function falar() {
        echo $this->nome . " de " . $this->idade . " anos falou merda!"; // $this significa este
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Cristovão L. Braga";
$pessoa->idade = 28;
$pessoa->falar();