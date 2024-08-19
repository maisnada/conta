<?php

namespace Alura\Banco\Modelo\Funcionario;

class Dev extends Funcionario{

    public function sobreNivel():void{

        $this->recebeAumento($this->getSalario() * 0.75);
    }

    public function calculaBonificacao():float{

        return 500.0;
    }
}