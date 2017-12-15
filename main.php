<?php
require_once __DIR__.'/Libs/Calc.php';
require_once __DIR__.'/Libs/SciCalc.php';

use Libs\Calc;


$calc = new Calc();
$calc->minus(1, 3);
echo $calc->getMemory()."\n"; // ERROR
