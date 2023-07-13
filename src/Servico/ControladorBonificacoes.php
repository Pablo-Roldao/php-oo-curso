<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorBonificacoes {
    private float $totalBonificacoes = 0;
    
    public function adicionaBonificacaoDe(Funcionario $funcionario): void
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}