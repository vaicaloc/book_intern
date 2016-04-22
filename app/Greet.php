<?php
namespace App;
use App\Converter;
use App\Greeter;

class Greet
{	
	protected $converter;

	protected $greet;

	public function __construct(Converter $converter, Greeter $greet)
		{

			$this->converter = $converter;
			$this->greet  = $greet;
		}
		
	public function greetone($user)
		{
			return $this->greet->greet() . ' : ' . $this->converter->convert($user);
		}
}