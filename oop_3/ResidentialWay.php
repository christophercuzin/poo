<?php
require_once 'HighWay.php';
final class ResidentialWay extends HighWay{

    public function __construct()
    {
        parent::__construct(2, 50);
    }

    public function addVehicles(string $typeOfVehicles): array
    {
           
        $this->currentVehicles[] = $typeOfVehicles;
        
        return $this->currentVehicles;
    }

}

?>