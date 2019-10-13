<?php

namespace Estacionamento\Enums;

abstract class StatusCartaoEstacionamento
{
    const EM_ABERTO = 0;
    const PAGO = 1;
    const PERDIDO = 2;
}