<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pagedemo extends Controller
{
   public function test(){
		$data= 'loc';
		return view("demo")->with('name',$data);
	}
}
