<?php

namespace DanfseNacional\Dto;

readonly class EnderecoObra
{
    public function __construct(
        public string $CEP = '',
        public string $xLgr = '',
        public string $nro = '',
        public string $xCpl = '',
        public string $xBairro = '',
    ) {}
}
