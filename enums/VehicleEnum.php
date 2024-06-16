<?php

require_once __DIR__.'/../contracts/DriveContract.php';
require_once __DIR__.'/../classes/Car.php';
require_once __DIR__.'/../classes/Bike.php';

use NhlakaMzobe\OOP\Contracts\DriveContract;
use NhlakaMzobe\OOP\Classes\Car;
use NhlakaMzobe\OOP\Classes\Bike;

enum VehicleEnum : string {
    case BIKE = 'bike';
    case CAR = 'car';

    public function vehicleInstance(): DriveContract
    {
        return match($this)
        {
            VehicleEnum::CAR => new Car(),
            VehicleEnum::BIKE => new Bike(),
        };
    }
}