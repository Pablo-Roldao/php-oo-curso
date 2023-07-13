<?php


require_once "autoload.php";

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, EditorVideo, Funcionario, Gerente};
use Alura\Banco\Servico\ControladorBonificacoes;

$umaFuncionaria = new Gerente(
    "Patrícia",
    new CPF("123.456.789-13"),
    3000
);

$umDiretor = new Diretor(
    "Ana Paula",
    new CPF("123.456.789-14"),
    5000
);

$umDesenvolvedor= new Desenvolvedor(
    "Mateus Silva",
    new CPF("123.456.789-15"),
    5000
);
$umDesenvolvedor->sobeDeNivel();

$umEditor = new EditorVideo(
    "Paulo",
     new CPF("132.465.798-89"),
     3500
);

$controlador = new ControladorBonificacoes();
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umDesenvolvedor);
$controlador->adicionaBonificacaoDe($umEditor);

echo "R$" . $controlador->recuperaTotal() . PHP_EOL;
