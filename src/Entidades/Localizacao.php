<?php

namespace Estacionamento\Entidades;

class Localizacao
{
    private $andar;
    private $codigo;
    private $posicao;

    public function __construct(string $andar, string $codigo, int $posicao)
    {
        $this->andar = $andar;
        $this->codigo = $codigo;
        $this->posicao = $posicao;
    }
}
