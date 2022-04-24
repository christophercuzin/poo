<?php
namespace App\Lane;

final class ResidentialWay extends HighWay{

    public function __construct()
    {
        parent::__construct(2, 50);
    }

    public function addVehicles(Object $typeOfVehicles)
    {
           
        $this->currentVehicles[] = $typeOfVehicles;
        
        return $this->currentVehicles;
    }

}

?>