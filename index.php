<?php
require_once 'Car.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$suv = new Car('blue', 4);
$vtt = new Bike('red', 2);
$skate = new Skateboard('black', 0);

$motorWay = new Motorway();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();

$motorWay->addVehicle($suv);
var_dump($motorWay->getCurrentVehicle());
echo '<br>';

$pedestrianWay->addVehicle($vtt);
var_dump($pedestrianWay->getCurrentVehicles());
echo '<br>';

$pedestrianWay->addVehicle($suv);
var_dump($pedestrianWay->getCurrentVehicles());
echo '<br>';

$residentialWay->addVehicle($skate);
var_dump($residentialWay->getCurrentVehicles());
echo '<br>';
?>

