<?php

namespace App\Lane;

use App\Vehicle\Bicycle;
use App\Vehicle\Skateboard;

final class MotorWay extends HighWay{

    public function __construct()
    {
        parent::__construct(4, 130);
    }
    
    public function addVehicles(Object $typeOfVehicles)
    {
        
        if (!($typeOfVehicles instanceof Bicycle) && !($typeOfVehicles instanceof Skateboard))
        {
            $this->currentVehicles[] = $typeOfVehicles;
        } else {
            $this->currentVehicles;
        }
            
        return $this->currentVehicles;
    }
    
}

?>