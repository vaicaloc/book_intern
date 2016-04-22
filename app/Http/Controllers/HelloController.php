<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Converter;
use App\Http\Requests;



class HelloController extends Controller
{
	protected $converter;

	public function __construct(Converter $converter)
	{
		$this->converter = $converter;
	}

	public function test($name = 'World')
	{
		return "Hello" . $this->converter->convert($name);
	}
}
