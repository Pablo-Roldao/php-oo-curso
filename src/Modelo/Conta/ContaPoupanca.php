<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{

    protected function recuperarTarifa(): float
    {
        return 0.03;
    }

}