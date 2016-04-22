<?php
namespace App;
use App\Greeter;
/**
* 
*/
class English implements Greeter
{
	
	public function greet()
	{
		return "Hello"; 
	}
}