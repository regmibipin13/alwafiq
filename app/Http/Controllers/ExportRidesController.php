<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class ExportRidesController extends Controller 
{
    function index(){

        return DB::select('select * from users');
              
    }
    

}