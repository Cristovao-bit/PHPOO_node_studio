<?php
/*
 * Herança é um recurso que permite que classes compartilhem atributos e métodos,
 * afim de reaproveitar códigos ou comportamentos generalizados
 */

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;
    
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
}

class motos extends Veiculo {
    public function darGrau() {
        echo "Dando grau em 321";
    }
}

$veiculo = new carros();
$veiculo->modelo = "Gol";
$veiculo->cor = "preto";
$veiculo->ano = 2021;
$veiculo->andar();
echo "<br>";
$veiculo->Limpador();
var_dump($veiculo);
echo "<hr>";
$moto = new motos();
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2021;
$moto->parar();
echo "<br>";
$moto->darGrau();
var_dump($moto);
