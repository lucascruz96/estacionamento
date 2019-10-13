<?php

namespace Estacionamento\Entidades;

interface CobrancaInterface
{
    public function getTaxas();
    public function getDescontos();
}
