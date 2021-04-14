<?php
/*
 * public - fará com que não haja ocultação nenhuma, toda propriedade ou método declarado
 * com public serão acessíveis por todos que quiserem acessá-los
 * 
 * protected - visibilidade protected faz com que todos os herdeiros vejam as propriedades
 * e métodos protegidos como se fossem públicos (só ver dentro da classe ou classes de herança)
 * 
 * private - ao contrário do public, esse modificador faz com que qualquer método ou propriedade
 * seja visível só e somente só pela classe que a declarou
 */

class Veiculo {
    protected $modelo;
    private $cor; // só podemos enxergar dentro da classe que a criou
    public $ano;
    
    public function getCor() {
        return $this->cor;
    }
    
    public function setCor($e) {
        $this->cor = $e;
    }
    
    public function andar() {
        echo "Andou";
    }
    
    public function parar() {
        echo "Parou";
    }
    
}

class carros extends Veiculo {
    public function Limpador() {
        echo "Limpando em 321";
    }
    
    public function getModelo() {
        return $this->modelo;
    }
    
    public function setModelo($e) {
        $this->modelo = $e;
    }
}

class motos extends Veiculo {
    public function darGrau() {
        echo "Dando grau em 321";
    }
}

$veiculo = new carros();
$veiculo->setModelo("Hillux");
echo $veiculo->getModelo();
var_dump($veiculo);
echo "<br>";
$veiculo->setCor("Amarelo");
echo $veiculo->getCor();
var_dump($veiculo);