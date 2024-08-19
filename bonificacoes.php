<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Funcionario\Dev;
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\ControladorDeBonificacoes;

$funcionario1 = new Dev('Marcelo', new CPF('123.456.789-10'), 1200);

$funcionario2 = new Gerente('Rosa Fe', new CPF('123.456.789-10'), 1400);

$controlador = new ControladorDeBonificacoes();

$controlador->adicionarBonificacoes($funcionario1);

$controlador->adicionarBonificacoes($funcionario2);

echo $controlador->getTotalBonificacoes();