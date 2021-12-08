<?php

namespace App\Helpers;

abstract class Currency
{

    public const REAIS_CENTS_FACTOR = 100;

    public static function convertCentsToReais(int $currencyInCents): float
    {
        return $currencyInCents / self::REAIS_CENTS_FACTOR;
    }

}
