<?php
namespace App\Http\Controllers;
 /**
 * 
 */
use App\Greet;

 class GreetingController extends Controller
 {
 	protected $greet;
 
 	public function __construct(Greet $greet)
 	{
 		$this->greet = $greet;
 	}
 	
 	public function index($greet = 'dung')
 	{
 		return $this->greet->greetone($greet);
 	}
 }