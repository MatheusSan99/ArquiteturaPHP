<?php

namespace Alura\DesignPattern;

class CalculadoraDeOrcamentos
{
    public function calculaImposto(Orcamento $orcamento, Impostos\Impostos $impostos) : float
    {
        return $impostos->calculaImposto($orcamento);
    }
}