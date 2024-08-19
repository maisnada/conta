<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes{

    private $totalBonificacoes = 0;

    public function adicionarBonificacoes(Funcionario $funcionario){

       $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function getTotalBonificacoes():float{

        return $this->totalBonificacoes;
    }

}