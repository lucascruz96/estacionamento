<?php

namespace Estacionamento\Entidades;

use Estacionamento\Enums\TipoVaga;
use Estacionamento\Enums\TipoVeiculo;
use Estacionamento\Enums\StatusVaga;

class Vaga
{
    private $tipoVeiculo;
    private $tipoVaga;
    private $localizacao;
    private $status;

    public function __construct(Localizacao $localizacao, TipoVaga $tipoVaga, TipoVeiculo $tipoVeiculo)
    {
        $this->localizacao = $localizacao;
        $this->tipoVaga = $tipoVaga;
        $this->tipoVeiculo = $tipoVeiculo;
        $this->status = StatusVaga::DISPONIVEL;
    }
}
