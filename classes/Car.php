<?php

namespace NhlakaMzobe\OOP\Classes;

require_once __DIR__.'/../contracts/DriveContract.php';

use NhlakaMzobe\OOP\Contracts\DriveContract;

class Car implements DriveContract {
    public function start() : void {
        print "Car started.";
    }

    public function stop() : void {
        print "Car stopped.";
    }
}