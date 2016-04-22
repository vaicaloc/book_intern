<?php
namespace App;
use App\Operator;

class Minus implements Operator
{
	public function run ($number1, $number2)
	{
		return $number1 - $number2;
	}
}