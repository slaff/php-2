<?php
require_once 'autoload.php';

use Libs\{Calc, SciCalc, Dog};

$cal = new SciCalc();
echo $cal->getSerialNumber();

$cal->clear();
