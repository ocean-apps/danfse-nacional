<?php

namespace DanfseNacional\Dto;

readonly class Tributacao
{
    public function __construct(
        public ?TribMunicipal $tribMun = null,
        public TribFederal|string|null $tribFed = null,
        public ?TotTrib $totTrib = null,
    ) {}
}
