<?php
/*
 * Polimorfismo: nada mais é que eu reescrever ou substituir um método herdado da classe pai;
 */

class Animal {
    public function andar() {
        echo "O animal andou!";
    }
    
    public function correr() {
        echo "O animal correu!";
    }
}

class Cavalo extends Animal {
    public function andar() {
        //echo "O cavalo andou!";
        $this->correr();
    }
}

$animal = new Cavalo();
$animal->andar();