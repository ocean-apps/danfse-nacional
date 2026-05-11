<?php

namespace DanfseNacional\Dto;

readonly class TotTrib
{
    public function __construct(
        public ?TotTribValor $vTotTrib = null,
        public ?TotTribPercent $pTotTrib = null,
        public string $indTotTrib = '',
        public string $pTotTribSN = '',
    ) {}
}
