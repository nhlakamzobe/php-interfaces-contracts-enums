<?php

require_once './contracts/DriveContract.php';
require_once './classes/Car.php';
require_once './classes/Bike.php';
require_once './enums/VehicleEnum.php';

$carEnum = VehicleEnum::CAR;
$carEnum->vehicleInstance()->start(); // "Car started."
$carEnum->vehicleInstance()->stop(); // "Car stopped."

$bikeEnum = VehicleEnum::BIKE;
$bikeEnum->vehicleInstance()->start(); // "Bike started."
$bikeEnum->vehicleInstance()->stop(); // "Bike stopped."

$vehicle = isset($_REQUEST['vehicle']) // bike | car
    ? $_REQUEST['vehicle']
    : 'car';

$enum = VehicleEnum::tryFrom($vehicle);

if($enum !== null) {
    $enum->vehicleInstance()->start();
    $enum->vehicleInstance()->stop();
}