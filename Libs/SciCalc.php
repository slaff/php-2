<?php
namespace Libs;

class SciCalc extends Calc {
   public function __construct() {
     $this->clear();
   }


   public function getMem() {
     // $this->test(); // Will break with fatal error
     return $this->memory;
   }
}

