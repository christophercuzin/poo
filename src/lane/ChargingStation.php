<?php

namespace App\Lane;

use App\Interface\RechargeableInterface;

class ChargingStation
{
    public function fullCharge(RechargeableInterface $vehicle) 
    {
        $vehicle->charge(100);
    }
}