<?php

abstract class banco { // não podemos instanciar mais essa class devido ela ser abstract, ou seja, só server como modelo
    protected $saldo;
    protected $limite;
    protected $juros;
    
    public function getSaldo() {
        return $this->saldo;
    }
    
    public function setSaldo($e) {
        $this->saldo =  $e;
    }
    
    abstract protected function sacar($s);// podemos colocar também nos métodos abstract
    abstract protected function depositar($d);
}

class bradesco extends banco {
    public function sacar($s) {
        $this->saldo -= $s;
        echo "Saque no 31/03/2021: R$ " . $s;
    }
    
    public function depositar($d) {
        $this->saldo += $d;
        echo "Deposito no dia 31/03/2021: R$ " . $d;
    }
}

$banco = new bradesco();
$banco->setSaldo(1000);
echo "<br> Saldo: " . $banco->getSaldo();
echo "<br>";
$banco->sacar(250);
echo "<br> Saldo: " . $banco->getSaldo();
echo "<br>";
$banco->depositar(1200);
echo "<br> Saldo: " . $banco->getSaldo();