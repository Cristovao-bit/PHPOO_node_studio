<?php
/*
 * Três formas de instanciar:
 * 
 * declarando use, instanciando com barras invertidas ou colocando apelidos
 */

require './classes/produto.php';
require './models/produto.php';

use models\Produto as productModel;// apelido: productModel
use classes\Produto as productClass; // no nome da class coloque sempre maiúscula

$produto = new productModel();
$produto->detalhesProduto();

//$produto = new Produto();
//$produto->detalhesProduto();

//$pessoa = new \classes\Produto(); 
//$pessoa->detalhesProduto()

echo "<hr>";

$produto2 = new productClass();
$produto2->detalhesProduto();