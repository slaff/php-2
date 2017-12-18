<?php
//declare(strict_types=1);
require_once 'autoload.php';

use Libs\{Calc, SciCalc, MyHouse, HouseInterface};

$calc = new SciCalc();

try {
  $calc->dontCallMe();
}
// Note: First put specific exceptions and then generic exceptoins
catch(\Libs\CalcException | OtherException $ex) {  
   // doSomething();
}
catch(Exception $ex) {
  var_dump($ex);
}
finally {
  echo "It "; 
}

echo "Works!";
