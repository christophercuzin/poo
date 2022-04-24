<?php

namespace App\Vehicle;

use App\Interface\LightableInterface;

class Car extends Vehicle implements LightableInterface
{

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
   
    private int $energyLevel;
    private string $energy;

    public function __construct(string $color, int $nbSeats, string $energy, bool $hasParkBrake = true)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy) ;
        $this->hasParkBrake = $hasParkBrake;

    }
    

 
    public function getEnergy(): string

    {

        return $this->energy;

    }


    public function setEnergy(string $energy): Car

    {

        if (in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;

    }

    public function getEnergyLevel(): int

    {

        return $this->energyLevel;

    }

    public function setEnergyLevel(int $energyLevel): void

    {

        $this->energyLevel = $energyLevel;

    }

    public function start(): string
    {

            $this-> energyLevel --;
            return 'let\'s start !';
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
?>