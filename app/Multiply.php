<?php
namespace App;
use App\Operator;

class Multiply implements Operator
{
	public function run ($number1, $number2)
	{
		return $number1 * $number2;
	}
}