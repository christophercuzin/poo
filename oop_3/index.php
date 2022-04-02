<?php

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$motorWay = new MotorWay;

echo 'motor way :';
echo "<br>";echo "<br>";
echo $motorWay->getNbLane() . " voies";
echo "<br>";echo "<br>";
echo $motorWay->getMaxSpeed(). "km/h";
echo "<br>";echo "<br>";
var_dump($motorWay->getCurrentVehicles());
echo "<br>";echo "<br>";
var_dump($motorWay->addVehicles('car'));
echo "<br>";echo "<br>";
var_dump($motorWay->addVehicles('bike'));
echo "<br>";echo "<br>";
var_dump($motorWay->addVehicles('truck'));
echo "<br>";echo "<br>";
var_dump($motorWay->addVehicles('Skateboard'));
echo "<br>";echo "<br>";
var_dump($motorWay->addVehicles('moto'));
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
var_dump($pedestrianWay->addVehicles('car'));
echo "<br>";echo "<br>";
var_dump($pedestrianWay->addVehicles('bike'));
echo "<br>";echo "<br>";
var_dump($pedestrianWay->addVehicles('truck'));
echo "<br>";echo "<br>";
var_dump($pedestrianWay->addVehicles('Skateboard'));
echo "<br>";echo "<br>";
var_dump($pedestrianWay->addVehicles('moto'));
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
var_dump($residentialWay->addVehicles('car'));
echo "<br>";echo "<br>";
var_dump($residentialWay->addVehicles('bike'));
echo "<br>";echo "<br>";
var_dump($residentialWay->addVehicles('truck'));
echo "<br>";echo "<br>";
var_dump($residentialWay->addVehicles('Skateboard'));
echo "<br>";echo "<br>";
var_dump($residentialWay->addVehicles('moto'));
echo "<br>";echo "<br>";echo "<br>";

