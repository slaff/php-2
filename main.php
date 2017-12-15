<?php
require_once 'autoload.php';

use Libs\{Calc, SciCalc, Dog};

$dog = new Dog(); // FQCN: Libs\Dog
echo $dog->speedRun(2);
