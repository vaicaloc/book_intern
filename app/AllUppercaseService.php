<?php
namespace App;


class  AllUppercaseService implements Converter
{
	public function convert($string)
	{
		return strtoupper($string);
	}
}