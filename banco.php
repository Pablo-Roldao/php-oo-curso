<?php

require_once "autoload.php";

use Alura\Banco\Modelo\Conta\{Conta, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

$endereco = new Endereco("Petrópolis", "Um Bairro", "Uma rua", "72B");
$primeiraConta  = new Conta(new Titular(new CPF("123.456.789-10"), "Vinícius Dias", $endereco));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo var_dump($primeiraConta);

$segundaConta  = new Conta(new Titular(new CPF("123.456.789-11"), "Patrícia", $endereco));

echo var_dump($segundaConta);

echo Conta::recuperarNumeroDeContas() . PHP_EOL;