<?php

class Speedometer
{
    public const MILES_CONVERSION = 0.621;

    public const KM_CONVERSION = 1.61;

    public static function convertToMiles(int $km): float
    {
        return $km * self::MILES_CONVERSION;
    }

    public static function convertToKm(int $miles): float
    {
        return $miles * self::KM_CONVERSION;
    }
}