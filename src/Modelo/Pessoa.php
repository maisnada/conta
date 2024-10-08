<?php

namespace Alura\Banco\Modelo;

class Pessoa{

    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf){

        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome():string{

        return $this->nome;
    }

    public function getCpf():string{

        return $this->cpf->recuperaNumero();
    }

    final protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}