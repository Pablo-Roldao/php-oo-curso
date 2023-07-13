<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
        if (self::$numeroDeContas > 2) {
            echo "Há mais de uma conta ativa!";
        }
    }

    public function sacar(float $valor): void
    {
        $tarifa = $this->recuperarTarifa();
        $valorSaque = $valor * (1 + $tarifa);
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível!";
            return;
        }
        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valor): void
    {
        if ($valor <= 0) {
            echo "O valor do depósito precisa ser positivo";
            return;
        }
        $this->saldo += $valor;
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    abstract protected function recuperarTarifa(): float;

    public static function recuperarNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}
