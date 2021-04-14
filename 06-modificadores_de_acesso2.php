<?php

class salao {
    protected $tintura;
    protected $lavar;
    
    private function escovar() {
        echo "Escovar cabelo por R$ 50,00 reais";
    }
    
    public function acao() {// só poderar ser usado devido está dentro da mesma classe
        return $this->escovar();
    }
    
    protected function corte() {
        echo "Corte Masculino por R$30,00 reais";
    }
    
    public function masculino() {
        $this->corte();
    }
}

class barbearia extends salao {
    public function modelo() {
        echo "corte masculino";
    }
    
    public function reacao() {// não poderar ser usado devido o método ser private
        return $this->escovar();
    }
}

$salao = new barbearia();
$salao->masculino();