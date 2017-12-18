<?php
//declare(strict_types=1);
require_once 'autoload.php';

use Libs\{Calc, SciCalc, MyHouse, HouseInterface};

$calc = new SciCalc();
$calc->plus(1,2);
// echo $calc->getMemory()."\n";

$calc2 = new SciCalc();
// $calc2->clear();

$calc3 = clone $calc2;

echo SciCalc::getCount(); // ? 3 or 2
