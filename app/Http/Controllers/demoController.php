<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demo;
class demoController extends Controller{
	function demo(Request $req)
	{
		
		$Demo->LName=$req->LName;
		$Demo->FName=$req->FName;
		$Demo->save();
		return ["Result"=>"demo is working"];
	}
}