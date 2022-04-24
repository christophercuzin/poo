<?php
namespace App\Vehicle;

use App\Interface\RechargeableInterface;
use App\Interface\LightableInterface;

class ElectricBike extends Vehicle implements RechargeableInterface, LightableInterface
{
    public function charge(int $percentage): int
    {
        return $percentage;
    }

    public function unLoad(int $percentage): int
    {
        return $percentage;
    }

    public function switchOn():bool
    {
        return true;
    }
    
    public function switchOff():bool
    {
        return false;
    }
}
