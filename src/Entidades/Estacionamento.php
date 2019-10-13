<?php

namespace Estacionamento\Entidades;

class Estacionamento
{
    private $vagas;
    private $cartoes;
    private $quantidadeVagas;
    
    public function __construct(int $quantidadeVagas)
    {
        $this->quantidadeVagas = $quantidadeVagas;
        $this->vagas = array();
        $this->cartoes = array();
    }
}
