<?php
namespace Libs;

class Calc {
	const PI=3.14;

        // property
	private $memory;

        // methods
	public function plus(float $a, float $b) {
	   return $a + $b;
	}

        // 3*2 = 3 + 3
	// TODO: create a method called multi
        // method accepts two parameters $a, $b
        // in the body you use loop and the internal plus method
	// to get the final result.

	public function multi($a, $b) {
		 $res=0;		
	for ($i=0; $i<$b; $i++)
		{
			$res=$this->plus($res,$a);
		}
           $this->memory = $res;
	   return $this->memory;
	}

        // method
	public function minus($a, $b) {
           $this->memory = $b - $a;
	   return $this->memory;
	}

        public function getMemory(){
           return $this->memory;
        }
}
