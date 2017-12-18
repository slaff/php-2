<?php
namespace Libs;

/*
*  SciCalc is a child class
*  and the parent class is Calc
*/
class SciCalc extends Calc {
   use TouchScreenTrait;

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

   public function clear() {
      parent::clear();
   }


   private function getSpeed() {
   }
}



















