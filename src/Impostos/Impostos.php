<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;
//Esta é uma forma de resolver um problema comum, onde uma classe é dependente de um parâmetro, cria-se uma classe para representar este parâmetro, impedindo a classe que recebe o parâmetro de crescer infinitamente, me pareceu uma solução bem robusta e de fácil manutenção posteriormente, o nome desse método de resolução é "strategy", no caso, foi aplicada uma interface, com um metodo, e os impostos aplicam esta interface, remanejando a função existente, depois, na hora de chamar a classe, é passada o imposto que implementa a interface. Este Strategy, só serve caso já se saiba o parametro a ser passado, ou seja, não é necessário fazer uma validação pra caso não seja passado o parametro pretendido.
interface Impostos
{
    public function calculaImposto(Orcamento $orcamento) : float;
}