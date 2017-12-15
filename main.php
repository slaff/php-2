<?php
require_once __DIR__.'/Libs/Calc.php';
require_once __DIR__.'/Libs/SciCalc.php';

use Libs\Calc;


$calc = new Calc();
$calc->multi(5, 6);
echo $calc->getMemory()."\n"; // ERROR
