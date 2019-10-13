<?php

namespace Estacionamento\Entidades;

use Estacionamento\Enums\StatusCartaoEstacionamento;

class CartaoEstacionamento
{
    private $horaInicio;
    private $horaFim;
    private $dadosCobranca;
    private $status;

    public function __construct(CobrancaInterface $dadosCobranca)
    {
        $this->dadosCobranca = $dadosCobranca;
        $this->horaInicio = time();
        $this->horaFim = null;
        $this->status = StatusCartaoEstacionamento::EM_ABERTO;
    }
}
