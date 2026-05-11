<?php

namespace DanfseNacional\Enums;

enum TpRetPisCofins: int
{
    case PIS_COFINS_CSLL_NAO_RETIDO = 0;
    case PIS_COFINS_RETIDO_TRANSICAO = 1;
    case PIS_COFINS_NAO_RETIDO_TRANSICAO = 2;
    case PIS_COFINS_CSLL_RETIDO = 3;
    case PIS_COFINS_RETIDO_CSLL_NAO_RETIDO = 4;
    case PIS_RETIDO_COFINS_CSLL_NAO_RETIDO = 5;
    case COFINS_RETIDO_PIS_CSLL_NAO_RETIDO = 6;
    case PIS_NAO_RETIDO_COFINS_CSLL_RETIDO = 7;
    case PIS_COFINS_NAO_RETIDO_CSLL_RETIDO = 8;
    case COFINS_NAO_RETIDO_PIS_CSLL_RETIDO = 9;

    public function label(): string
    {
        return match ($this) {
            self::PIS_COFINS_CSLL_NAO_RETIDO => '0 - PIS/COFINS/CSLL Não Retidos',
            self::PIS_COFINS_RETIDO_TRANSICAO => '1 - PIS/COFINS Retido',
            self::PIS_COFINS_NAO_RETIDO_TRANSICAO => '2 - PIS/COFINS Não Retido',
            self::PIS_COFINS_CSLL_RETIDO => '3 - PIS/COFINS/CSLL Retidos',
            self::PIS_COFINS_RETIDO_CSLL_NAO_RETIDO => '4 - PIS/COFINS Retidos, CSLL Não Retido',
            self::PIS_RETIDO_COFINS_CSLL_NAO_RETIDO => '5 - PIS Retido, COFINS/CSLL Não Retido',
            self::COFINS_RETIDO_PIS_CSLL_NAO_RETIDO => '6 -  COFINS Retido, PIS/CSLL Não Retido',
            self::PIS_NAO_RETIDO_COFINS_CSLL_RETIDO => '7 - PIS Não Retido, COFINS/CSLL Retidos',
            self::PIS_COFINS_NAO_RETIDO_CSLL_RETIDO => '8 - PIS/COFINS Não Retidos, CSLL Retido',
            self::COFINS_NAO_RETIDO_PIS_CSLL_RETIDO => '9 -  COFINS Não Retido, PIS/CSLL Retidos',
        };
    }

    public static function labelFor(string $value): string
    {
        $case = self::tryFrom((int) $value);
        return $case ? $case->label() : '-';
    }
}
