<?php

namespace DanfseNacional\Dto;

readonly class Obra
{
    public function __construct(
        public ?EnderecoObra $end = null,
    ) {}
}
