<?php

use Alura\DesignPattern\CalculadoraDeOrcamentos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Orcamento;

require_once 'vendor/autoload.php';

$orcamento = new Orcamento();
$impostoIcms = new Icms();
$impostoIss = new Iss();

$orcamento->valor = 1000;
$orcamento->quantidadeItens = 3;

$calculaDesconto = new \Alura\DesignPattern\CalculadoraDeDescontos();
echo $calculaDesconto->calculaDescontos($orcamento);
//echo $calculadora->calculaImposto($orcamento, $impostoIss);
//echo PHP_EOL;
//echo $calculadora->calculaImposto($orcamento, $impostoIcms);