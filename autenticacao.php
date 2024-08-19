<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();

$diretoro = new Diretor('Marcelo', new CPF('123.456.789-10'), 1200);

$autenticador->tentaLogin($diretoro, '4321');