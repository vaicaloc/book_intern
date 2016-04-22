<?php
namespace App;
use App\Operator;

class Division implements Operator
{
	public function run($number1,$number2)
	{
		if($number2 == 0)
		{
			throw new \InvalidArgumentException('Division by Zero');
		}

		return $number1 / $number2;
	}
}
