<?php
namespace Libs;

class Calc {
	const PI = 3.14;
        private $serialNumber = 0;

        protected static $count; // Counts the produced SciCalc

        // property
	protected $memory;

	public function __construct($serial = 0) {
           if($serial == 0) {
             $this->serialNumber = \rand(1,99999);
           }
           else {
             $this->serialNumber = $serial;
           }
        }

        public static function getCount() {
	     // $this->clear(); // Usage of $this is NOT allowed in static methods
	     return static::$count;
	}

        // methods
	final public function plus(float $a, float $b) {
           $this->memory = $a + $b;
	   return $this->memory;
	}

        // 3*2 = 3 + 3
	// TODO: create a method called multi
        // method accepts two parameters $a, $b
        // in the body you use loop and the internal plus method
	// to get the final result.
	public function multi($a,$b) {
           $result = 0;
           for ( $i=0; $i<$b; $i++){
                 $result = $this->plus($result,$a);
           }
               
           $this->memory = $result;
       	   return $result;
        }

        // method
	final public function minus($a, $b) {
           $this->memory = $b - $a;
	   return $this->memory;
	}

        public function getMemory(){
           return $this->memory;
        }

	public function getSerialNumber(){
           return $this->serialNumber;
        }

	protected function clear(){
           $this->memory = 0;
        }

	private function test() {}


	public function __destruct() {
           // echo "Destroyed";
        }
        
        // add the magic method __toString()
	// return "string with the serial number and memory";
	public function __toString() {
          return $this->serialNumber."|".$this->memory;
        }


        public function getTouchedArea() {
            return [1,1];
        }
}
