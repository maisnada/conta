<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa,CPF};

abstract class Funcionario extends Pessoa{
    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario){

        parent::__construct($nome, $cpf);  
        $this->salario = $salario;
    }

    public function getSalario():float{

        return $this->salario;
    }

    public abstract function calculaBonificacao():float;

    public function recebeAumento(float $valor):void{

        if($valor <= 0){

            echo 'Valor de ser mair que 0';

            return;
        }

        $this->salario += $valor;
    }
}