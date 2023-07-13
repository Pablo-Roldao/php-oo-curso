<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{CPF, Pessoa};

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function aumentarSalario(float $valor): void
    {
        if ($valor <= 0) {
            echo "O valor do aumento deve ser positivo.";
            return;
        }
        $this->salario += $valor;
    }
    
    public function alteraNome(string $novoNome): void
    {
        $this->validaNome($novoNome);
        $this->nome = $novoNome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao(): float;

}
