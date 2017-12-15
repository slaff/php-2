<?php
require_once 'autoload.php';

use Libs\{Calc, SciCalc, Dog};

$cal = new SciCalc();
echo $cal->getSerialNumber();

$cal->clear();


echo $cal;

unset($cal);
var_dump($cal);

