<?php
require_once 'HighWay.php';
final class MotorWay extends HighWay{

    public function __construct()
    {
        parent::__construct(4, 130);
    }
    
    public function addVehicles(string $typeOfVehicles): array
    {
        if ($typeOfVehicles !== 'bike' && $typeOfVehicles !== 'Skateboard')
        {
            $this->currentVehicles[] = $typeOfVehicles;
        } else {
            $this->currentVehicles;
        }
            
        return $this->currentVehicles;
    }
    
}

?>