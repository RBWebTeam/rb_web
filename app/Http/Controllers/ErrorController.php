<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function went_wrong(){
    	return view('went-wrong');
    }
}
