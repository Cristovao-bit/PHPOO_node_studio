<?php
/*
 * Referência e clonagem de objetos
 */

class Pessoa {
    public $idade;
    
    public function __clone() {
        echo "Clonagem de objetos ";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

$pessoa2 = clone $pessoa;// quando eu uso a palavra clone a função apresenta junto
$pessoa2->idade = 35;

echo $pessoa2->idade;