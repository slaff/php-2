<?php
namespace Libs;

/*
*  SciCalc is a child class
*  and the parent class is Calc
*/
class SciCalc extends Calc {
  
   public function __construct()
   {
	// ... 
        parent::__construct();
      
        // ...
   }

   public function dontCallMe() {
     $ex = new CalcException();
     throw $ex;
   }

   

   public function getMemory() {
     $result = parent::getMemory();
 
     return (float)$result;
   }

   public function clear() {
      parent::clear();
   }
}

