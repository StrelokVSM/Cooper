<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test;
class TestController extends Controller
{
    public function index(){
    	$data=Test::all();
    	//dd($data);
    	return view('test', ['data' => $data]);
    }
}
