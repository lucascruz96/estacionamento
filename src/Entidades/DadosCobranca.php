<?php

namespace Estacionamento\Entidades;

class DadosCobranca implements CobrancaInterface
{
    private $valorHora;
    private $descontos;
    private $taxas;

    public function __construct(float $valorHora)
    {
        $this->valorHora = $valorHora;
        $this->descontos = array();
        $this->taxas = array();
    }

    public function getTaxas()
    {
        return $this->taxas;
    }

    public function getDescontos()
    {
        return $this->descontos;
    }
}
