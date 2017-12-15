<?php
namespace Libs\Calc;

const PI=3.14;

function plus(float $a, float $b) {
   return $a + $b;
}

function minus($a, $b) {
   return $b - $a;
}

// 1. Create a function called area
// 2. The function accepts one parameter called radius
// 3. In the the file you should define a constant called PI with 3.14
// 4. The function should return π * pow(r,2);

function pow($a, $b) {
  return \pow($a, $b);
}
