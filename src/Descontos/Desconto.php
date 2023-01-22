<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;
//Aqui a função é diferente da strategy, se aplica quando não se sabe exatamente a regra de negócio a ser aplicada, como se fosse um loop entre as regras, até atingir a desejada, e no final pra quebrar a cadeia, é criado uma classe onde não se aplica nenhuma regra, e o construtor é redefinido por essa última classe, este padrão se chama Chain of Responsability
abstract class Desconto
{
    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }
    abstract public function calculaDesconto(Orcamento $orcamento) : float;
}