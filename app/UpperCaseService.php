<?php
namespace App;

class UpperCaseService implements Converter  
{
	
	public function convert($string) 
	{
		return ucfirst($string);
	}
}