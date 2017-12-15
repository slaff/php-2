<?php
require_once __DIR__.'/Libs/Calc.php';
require_once __DIR__.'/Libs/SciCalc.php';

use Libs\{Calc, SciCalc};

echo "[";
$calc = new SciCalc(13);
echo "]";

$calc->minus(1, 3);
$calc->multi(3,4);

echo "============\n"; 
echo $calc->getSerialNumber()."\n";
echo "============\n";


echo $calc->getMem()."\n"; // ERROR
