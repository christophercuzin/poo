<?php

namespace App\Vehicle;

use App\Interface\LightableInterface;

class Truck extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    public const ALLOWED_CURRENT_STORAGE = [
        'in filling',
        'full',
    ];
   
    private int $energyLevel;
    private string $energy;
    private int $storageCapacity;
    private string $currentStorage;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }
    

 
    public function getEnergy(): string

    {

        return $this->energy;

    }


    public function setEnergy(string $energy): Truck

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

    public function getStorageCapacity(): int{

        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getCurrentStorage(): string {

        return $this->currentStorage;
    }

    public function setCurrentStorage(string $currentStorage): Truck
    {
        if (in_array($currentStorage, self::ALLOWED_CURRENT_STORAGE))
        {
            $this->currentStorage = $currentStorage;
        }
        return $this;
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