<?php
namespace Libs;

class Dog
{
	public $name;
	public $legs;
	private $race;

	public function __constuctor ($na=null, $leg=4, $ra=null){
		$this->name=$na;
		$this->name=$na;
		$this->name=$na;
		
	} 
	
	public function getRace(){
		return $this->race;	
	}

	public function bark($race){
		if ($this->race=="doberman") 
		{
			return "WOOF WOOF";
		}else 
		{
			return "waf waf"; 
		}
	}
	
	public function speedRun($legs)
	{
		if ($legs==4){
			return "fast";
		}else
		{
			return "slow";
		}
	}
}

?>
