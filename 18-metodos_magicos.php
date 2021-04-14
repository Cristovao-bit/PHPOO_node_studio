<?php
/*
 * clone*
 * construct*
 * invoke
 * tostring
 * get
 * set
 */

class Pessoa {
    private $dados = array();
    
    public function __set($nome, $valor) {
        $this->dados[$nome] = $valor;
    }
    
    public function __get($nome) {
        ;return $this->dados[$nome];
    }
    
    public function __toString() {
        return "Tentei imprimir o objeto";
    }
    
    public function __invoke() {
        return "Objeto como função";
    }
}

$pessoa = new Pessoa();
// invoke
echo $pessoa();

//$pessoa->nome = "Cristovão";
//$pessoa->idade = 50;
//$pessoa->sexo = "M";

// get e set
//echo $pessoa->nome . "<br>";
//echo $pessoa->idade . "<br>";
//echo $pessoa->sexo . "<br>";

// toString
//echo $pessoa;