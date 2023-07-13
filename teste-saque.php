<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once "autoload.php";

$conta = new ContaPoupanca(
    new Titular(
        new CPF("123.456.789-10"),
        "Algumm nome",
        new Endereco("Alguma cidade", "Algum bairro", "Alguma rua", "50C")
    )
);

$conta->depositar(1000);
$conta->sacar(100);

echo "R$" . $conta->recuperarSaldo() . PHP_EOL;