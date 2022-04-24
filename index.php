<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Vehicle\Bicycle;
use App\Vehicle\Skateboard;
use App\Vehicle\Car;
use App\Vehicle\Truck;
use App\Lane\MotorWay;
use App\Lane\PedestrianWay;
use App\Lane\ResidentialWay;
use App\Convert\Speedometer;


//new bicycle bike
$bike = new Bicycle('blue', 1);
$bike->setCurrentSpeed(15);
$bike->setNbWheels(2);


echo "<br>";
echo $bike -> forward();
echo '<br> Vitesse du velo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike-> brake();
echo '<br> vitesse du velo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike-> brake();
echo '<br>'. '<br>';


//new bicycle tornado
$tornado = new Bicycle('black', 1);
$tornado->setCurrentSpeed(25);
$tornado->setNbWheels(2);


echo "<br>";
echo $tornado -> forward();
echo '<br> Vitesse du velo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
echo $tornado -> brake();
echo '<br> vitesse du velo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
echo $tornado -> brake();
echo '<br>'. '<br>';

$skateboard = new Skateboard('yellow', 1);
$skateboard->setCurrentSpeed(5);
$skateboard->setNbWheels(4);


echo "<br>";
echo $skateboard -> forward();
echo '<br> Vitesse du skateboard : ' . $skateboard->getCurrentSpeed() . ' km/h' . '<br>';
echo $skateboard -> brake();
echo '<br> vitesse du velo : ' . $skateboard->getCurrentSpeed() . ' km/h' . '<br>';
echo $skateboard -> brake();
echo '<br>'. '<br>';



//new car lil bandit
$lilBandit = new Car('red', 2 , 'electric');
$lilBandit->setCurrentSpeed(90);
$lilBandit->setNbWheels(4);
$lilBandit->setEnergyLevel(200);


echo "<br>";
echo $lilBandit -> start();
echo '<br> autonomie restante : ' . $lilBandit -> getEnergyLevel() . 'km' . '<br>';
echo $lilBandit -> forward();
echo '<br> Vitesse de la voiture : ' . $lilBandit->getCurrentSpeed() . ' km/h' . '<br>';
echo $lilBandit-> brake();
echo '<br> Vitesse de la voiture  : ' . $lilBandit->getCurrentSpeed() . ' km/h' . '<br>';
echo $lilBandit-> brake();
echo '<br>'. '<br>';


//new car marge's station wagon
$margeStationWagon = new Car('orange', 4, 'fuel');
$margeStationWagon->setCurrentSpeed(60);
$margeStationWagon->setNbWheels(4);
$margeStationWagon->setEnergyLevel(20);


echo "<br>";
echo $margeStationWagon -> start();
echo '<br> quantité de d\'essence restant : ' . $margeStationWagon -> getEnergyLevel() . 'litres' . '<br>';
echo $margeStationWagon -> forward();
echo '<br> Vitesse de la voiture : ' . $margeStationWagon -> getCurrentSpeed() . ' km/h' . '<br>';
echo $margeStationWagon -> brake();
echo '<br> Vitesse de la voiture  : ' . $margeStationWagon -> getCurrentSpeed() . ' km/h' . '<br>';
echo $margeStationWagon -> brake();
echo'<br>'. '<br>';

//new truck 

$americanTruck = new Truck ('black', 3, 'fuel', 34);
$americanTruck->setCurrentSpeed(50);
$americanTruck->setNbWheels(4);
$americanTruck->setEnergyLevel(40);
$americanTruck->setCurrentStorage('full');




echo "<br>";
echo '<br> chargement actuelle : ' . $americanTruck -> getCurrentStorage() . '<br>';
echo $americanTruck -> start();
echo '<br> quantité de d\'essence restante : ' . $americanTruck -> getEnergyLevel() . 'litres' . '<br>';
echo $americanTruck -> forward();
echo '<br> Vitesse du camion : ' . $americanTruck -> getCurrentSpeed() . ' km/h' . '<br>';
echo $americanTruck -> brake();
echo '<br> Vitesse du camion  : ' . $americanTruck -> getCurrentSpeed() . ' km/h' . '<br>';
echo $americanTruck -> brake();
echo '<br>'. "<br>";

//new electric truck

$electricTruck = new Truck ('black', 3, 'electric', 3);
$electricTruck->setCurrentSpeed(65);
$electricTruck->setNbWheels(4);
$electricTruck->setEnergyLevel(200);
$electricTruck->setCurrentStorage('in filling');




echo "<br>";
echo '<br> chargement actuelle : ' . $electricTruck -> getCurrentStorage() . '<br>';
echo $electricTruck -> start();
echo '<br> autonomie restante : ' . $electricTruck -> getEnergyLevel() . 'km' . '<br>';
echo $electricTruck -> forward();
echo '<br> Vitesse du camion : ' . $electricTruck -> getCurrentSpeed() . ' km/h' . '<br>';
echo $electricTruck -> brake();
echo '<br> Vitesse du camion  : ' . $electricTruck -> getCurrentSpeed() . ' km/h' . '<br>';
echo $electricTruck -> brake();
echo '<br>'. '<br>';


$motorWay = new MotorWay;

echo 'motor way :';
echo "<br>";echo "<br>";
echo $motorWay->getNbLane() . " voies";
echo "<br>";echo "<br>";
echo $motorWay->getMaxSpeed(). "km/h";
echo "<br>";echo "<br>";
var_dump($motorWay->getCurrentVehicles());
echo "<br>";echo "<br>";
var_dump($motorWay->addVehicles($lilBandit));
echo "<br>";echo "<br>";
var_dump($motorWay->addVehicles($bike));
echo "<br>";echo "<br>";
var_dump($motorWay->addVehicles($americanTruck));
echo "<br>";echo "<br>";
var_dump($motorWay->addVehicles($skateboard));
echo "<br>";echo "<br>";
var_dump($motorWay->addVehicles($margeStationWagon));
echo "<br>";echo "<br>";echo "<br>";

$pedestrianWay = new PedestrianWay;

echo 'pedestrian way :';
echo "<br>";echo "<br>";
echo $pedestrianWay->getNbLane() . " voies";
echo "<br>";echo "<br>";
echo $pedestrianWay->getMaxSpeed(). "km/h";
echo "<br>";echo "<br>";
var_dump($pedestrianWay->getCurrentVehicles());
echo "<br>";echo "<br>";
var_dump($pedestrianWay->addVehicles($lilBandit));
echo "<br>";echo "<br>";
var_dump($pedestrianWay->addVehicles($bike));
echo "<br>";echo "<br>";
var_dump($pedestrianWay->addVehicles($americanTruck));
echo "<br>";echo "<br>";
var_dump($pedestrianWay->addVehicles($skateboard));
echo "<br>";echo "<br>";
var_dump($pedestrianWay->addVehicles($margeStationWagon));
echo "<br>";echo "<br>";echo "<br>";

$residentialWay= new ResidentialWay;

echo 'residential way :';
echo "<br>";echo "<br>";
echo $residentialWay->getNbLane() . " voies";
echo "<br>";echo "<br>";
echo $residentialWay->getMaxSpeed(). "km/h";
echo "<br>";echo "<br>";
var_dump($residentialWay->getCurrentVehicles());
echo "<br>";echo "<br>";
var_dump($residentialWay->addVehicles($lilBandit));
echo "<br>";echo "<br>";
var_dump($residentialWay->addVehicles($bike));
echo "<br>";echo "<br>";
var_dump($residentialWay->addVehicles($americanTruck));
echo "<br>";echo "<br>";
var_dump($residentialWay->addVehicles($skateboard));
echo "<br>";echo "<br>";
var_dump($residentialWay->addVehicles($margeStationWagon));
echo "<br>";echo "<br>";echo "<br>";

echo 'convertion de km en miles ';
echo Speedometer::convertKmToMiles(10);
echo "<br>"; 
echo "<br>";

echo 'convertion de km en miles ';
echo Speedometer::convertMilesToKm(10);

?>

