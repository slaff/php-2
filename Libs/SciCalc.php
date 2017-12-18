<?php
namespace Libs;

/*
*  SciCalc is a child class
*  and the parent class is Calc
*/
class SciCalc extends Calc {
   use TouchScreenTrait;

   private static $count; // Counts the produced SciCalc

   public function __construct()
   {
	// ... 
        parent::__construct();


        static::$count = static::$count + 1;  // static property syntax 
					      // looks like this
        // $this->count = $this->count + 1; // IF this was normal property
      
        // ...
   }

   public static function getCount() {
     // $this->clear(); // Usage of $this is NOT allowed in static methods
     return static::$count;
   }

   public function dontCallMe() {
     $ex = new CalcException();
     throw $ex;
   }

   public function clear() {
      static::$count = 0; 
      parent::clear();
   }


   public function __clone() {
       static::$count++;
       // TODO: implement cloning here
   }


   private function getSpeed() {
   }
}



















