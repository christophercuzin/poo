<?php

namespace App\Convert;

class Speedometer
{
    public const CONVERt_MILES_TO_KM = 1.609;
    public const CONVERt_KM_TO_MILES = 0.6215;


    public static function convertKmToMiles(float $length): float
    {
        return $length * Speedometer::CONVERt_KM_TO_MILES;
    }

    public static function convertMilesToKm(float $length): float
    {
        return $length * Speedometer::CONVERt_MILES_TO_KM;
    }
}