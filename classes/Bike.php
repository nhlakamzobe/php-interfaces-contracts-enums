<?php

namespace NhlakaMzobe\OOP\Classes;

require_once __DIR__.'/../contracts/DriveContract.php';

use NhlakaMzobe\OOP\Contracts\DriveContract;

class Bike implements DriveContract {
    public function start() : void {
        print "Bike started.";
    }

    public function stop() : void {
        print "Bike stopped.";
    }
}