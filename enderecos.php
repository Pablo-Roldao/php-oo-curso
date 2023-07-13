<?php

use Alura\Banco\Modelo\Endereco;

require_once "autoload.php";

$umEndereco = new Endereco("Petrópolis", "Um bairro", "Uma rua", "71B");

$outroEndereco = new Endereco("Outra cidade", "Outro bairro", "Outra rua", "71C");

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;

echo $umEndereco->cidade . PHP_EOL;