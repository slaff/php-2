<?php
require_once __DIR__.'/Libs/Calc.php';
require_once __DIR__.'/Libs/SciCalc.php';

use Libs\{Calc, SciCalc};

$calc = new SciCalc();
$calc->minus(1, 3);
$calc->multi(3,4);

echo $calc->getMem()."\n"; // ERROR
