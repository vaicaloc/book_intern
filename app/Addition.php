<?php
namespace App;
use App\Operator;

class Addition implements Operator
{
	public function run ($number1, $number2)
	{
		return $number1 + $number2;
	}
}