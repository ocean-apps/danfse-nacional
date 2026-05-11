<?php

namespace DanfseNacional\Dto;

readonly class TotTribValor
{
    public function __construct(
        public string $vTotTribFed = '',
        public string $vTotTribEst = '',
        public string $vTotTribMun = '',
    ) {}
}
