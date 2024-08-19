<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca,Titular};
use Alura\Banco\Modelo\{CPF,Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(new Titular(new CPF('123.456.789-10'), 'Marcelo', new Endereco('ITJ', 'SJ', 'Ant.', '821')));

$conta->deposita(500);

$conta->saca(100);

echo $conta->recuperaSaldo();
