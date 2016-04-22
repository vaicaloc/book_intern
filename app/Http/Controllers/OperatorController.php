<?php
namespace App\Http\Controllers;
use App\Operator;
/**
* 
*/

class OperatorController extends Controller
{
	protected $operator;
	public function __construct(Operator $operator)
	{
		$this->operator = $operator;
	}
	public function operate()
	{
		return $this->operator->run(2, 6);
	}  
}