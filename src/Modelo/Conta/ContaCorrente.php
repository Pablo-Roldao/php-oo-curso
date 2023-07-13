<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{

    protected function recuperarTarifa(): float
    {
        return 0.05;
    }

    public function transferir(float $valor, Conta $contaDestino): void
    {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente!";
            return;
        }

        $this->sacar($valor);
        $contaDestino->depositar($valor);
    }

}