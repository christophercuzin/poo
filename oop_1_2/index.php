<?php

require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
//new bicycle bike
$bike = new Bicycle('blue', 1);
$bike->setCurrentSpeed(15);
$bike->setNbWheels(2);

var_dump($bike);
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

var_dump($tornado);
echo "<br>";
echo $tornado -> forward();
echo '<br> Vitesse du velo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
echo $tornado -> brake();
echo '<br> vitesse du velo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
echo $tornado -> brake();
echo '<br>'. '<br>';


//new car lil bandit
$lilBandit = new Car('red', 2 , 'electric');
$lilBandit->setCurrentSpeed(90);
$lilBandit->setNbWheels(4);
$lilBandit->setEnergyLevel(200);

var_dump($lilBandit);
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

var_dump($margeStationWagon);
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



var_dump($americanTruck);
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



var_dump($electricTruck);
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




?>

