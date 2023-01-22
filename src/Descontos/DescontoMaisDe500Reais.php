<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

class DescontoMaisDe500Reais extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento) : float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.5;
        }
            return 0;
    }
}