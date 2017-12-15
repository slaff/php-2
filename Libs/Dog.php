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
	
	public get_race(){
		return $this->race;	
	}

	public bark($race){
		if ($this->race=="doperman")
		{
			return "WOOF WOOF";
		}else 
		{
			return "waf waf"; 
		}
	}
	
	public speed_run($legs)
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
