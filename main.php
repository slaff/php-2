<?php
//declare(strict_types=1);
require_once 'autoload.php';

use Libs\{Calc, SciCalc, MyHouse, HouseInterface};

$calc = new SciCalc();
$calc->plus(1,2);
echo $calc->getMemory()."\n";

// $calc2 = $calc; // Here $calc and $calc2 use the same memory 
$calc2 = clone $calc; // Use different memory storage for $calc and $calc2

echo $calc2->getMemory()."\n"; // 3

$calc2->plus(3,4);
echo $calc->getMemory()."\n"; // ?3 
