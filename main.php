<?php
require_once 'autoload.php';

use Libs\{Calc, SciCalc, MyHouse, HouseInterface};

$house = new MyHouse();

if($house instanceof HouseInterface) {
   $house->openDoor();
} 


function test(HouseInterface $house) {
   echo "OK.";
}

test($house);

// unset($cal);
// var_dump($cal);
