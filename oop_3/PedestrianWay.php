<?php
require_once 'HighWay.php';
final class PedestrianWay extends HighWay{

    public function __construct()
    {
        parent::__construct(1, 10);
    }

    public function addVehicles(string $typeOfVehicles): array
    {

        if ($typeOfVehicles === 'bike' || $typeOfVehicles === 'Skateboard')
        {
            $this->currentVehicles[] = $typeOfVehicles;
        } else {
            $this->currentVehicles;
        }
            
        return $this->currentVehicles;
     
    }
    
}



?>