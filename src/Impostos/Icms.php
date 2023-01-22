<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Icms implements Impostos
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.5;
    }
}